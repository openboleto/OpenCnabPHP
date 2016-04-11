<?php
namespace CnabPHP;

abstract class RetornoAbstract
{
	public static $banco; // sera atribuido o nome do banco que tambem щ o nome da pasta que contem os layouts
	public static $layout;// recebera o nome do layout na instacia?ao  
	public static $hearder; // armazena o objeto registro 0 do arquivo
	public static $conteudo; // mantem os dados passados em $data na instanciaчуo
	public static $loteCounter = 1; // contador de lotes
	private static $children = array(); // armazena os registros filhos da classe remessa
	public static $retorno = array(); // durante a geraчуo do txt de retorno se tornara um array com as linhas do arquvio

	/*
	* mщtodo __construct()
	* Recebe os parametros
	* @$banco = nome do banco no momento so Caixa
	* @$layout = nome do layout no momento so Cnab240_SIGCB
	* @$data = um array contendo os dados nessesarios para o arquvio
	*/

	public function __construct($conteudo){

		$conteudo = str_replace("\r\n", "\n", $conteudo);
		$lines = explode("\n", $conteudo);
		if (count($lines) < 2) {
			throw new Exception("Arquivo sem Conteudo");
		}
		$length = strlen($lines[0]);
		$layout_versao = null;

		if ($length == 240 || $length == 241) {
			$bytes = 240;
			$layout_versao = substr($lines[0], 163, 3);
			$codigo_banco = substr($lines[0], 0, 3);
			$codigo_tipo = substr($lines[0],  142, 1);
		} elseif ($length == 400 || $length == 401) {
			$bytes = 400;
			$codigo_banco = substr($lines[0], 76, 3);
			$codigo_tipo = substr($lines[0],  1, 1);
		}
		else
		{
			throw new Exception("Nуo foi possivel detectar o tipo do arquivo, provavelmente esta corrompido");
		}
		if($codigo_tipo == '1'){
			throw new Exception("Esse щ um arqvuio de remessa, nao pode ser processado aqui.");
		}
		self::$banco = "B".$codigo_banco;
		self::$layout = "L".$layout_versao;
		$class = 'CnabPHP\resources\\'.self::$banco.'\retorno\\'.self::$layout.'\Registro0';
		self::$conteudo = $conteudo; 
		self::$hearder = new $class($lines[0]);
		self::$children[] = self::$hearder;
	}
	/*
	* mщtodo inserirDetalhe()
	* Recebe os parametros
	* @$data = um array contendo os dados nessesarios para o arquvio
	*/
	public function inserirDetalhe($data){

		$class = 'CnabPHP\resources\\'.self::$banco.'\retorno\\'.self::$layout.'\Registro1';
		self::addChild(new $class($data));
		//self::$counter++;
	}
	/*
	* m?todo changeLayout()
	* Recebe os parametros
	* @$newLayout = altera o layout do lote , servira para enviar lotes de layouts diferentes no mesmo arquvio //(ALERTA) nao testado
	*/
	public function changeLayout($newLayout)
	{
		self::$layout = $newLayout;
	}
	/*
	* m?todo addChild()
	* Recebe os parametros abaixo e insere num array para uso fururo
	* @RegistroRemAbstract $child = recebe um filho de RegistroRemAbstract
	*/

	static private function addChild(RegistroRemAbstract $child){
		self::$children[] = $child;   
	}
	/*
	* mщtodo addLote()
	* Recebe os parametros abaixo e insere num array para uso fururo
	* @array $data = recebe um array contendo os dados do lote a sera aberto e retorna para qualqer layout 240 o lote criado ou $this se outro 
	*/
	public function addLote(array $data)
	{
		if(strpos(self::$layout,'240'))
		{
			$class = 'CnabPHP\resources\\'.self::$banco.'\remessa\\'.self::$layout.'\Registro1';
			$loteData = $data ? $data:RemessaAbstract::$entryData; 
			$lote = new $class($loteData);
			self::addChild($lote);
		}else{
			$lote = $this;
		} 
		return $lote;
		self::$loteCounter++;
	}
	/*
	* mщtodo getLote()
	* Metodo statico para pegar o objeto do lote
	* @$index = o indice do lote , normalmente 1
	*/
	public static function getLote($index){
		return self::$children[$index];
	}	
	/*
	* mщtodo getText()
	* Metodo que percorre todos os filhos acionando o metodo getText() deles
	*/
	public function getText(){
		foreach(self::$children as $child){
			$child->getText();
		}
		$class = 'CnabPHP\resources\\'.self::$banco.'\remessa\\'.self::$layout.'\Registro9';
		$headerArquivo = new $class(array('1'=>1));
		$headerArquivo->getText();
		return implode(PHP_EOL,self::$retorno);
	}
}
?>