<?php
namespace CnabPHP;

abstract class RetornoAbstract
{
	public  $hearder; // armazena o objeto registro 0 do arquivo
	private  $children = array(); // armazena os registros filhos da classe remessa
	public static $banco; // sera atribuido o nome do banco que tambem щ o nome da pasta que contem os layouts
	public static $layout;// recebera o nome do layout na instacia?ao  
	public static $loteCounter = 1; // contador de lotes
	public static $lines; // mantem os dados passados em $data na instanciaчуo
	public static $linesCounter = 0;
	//public static $retorno = array(); // durante a geraчуo do txt de retorno se tornara um array com as linhas do arquvio

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
			$layout_versao = '400';
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
		self::$lines = $lines; 
		$this->hearder = new $class($lines[0]);
		$this->children[] = $this->hearder;
		$class = 'CnabPHP\resources\\'.self::$banco.'\retorno\\'.self::$layout.'\Registro9';
		$this->children[] = new $class($lines[count($lines)-1]);

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
		foreach($this->$children as $child){
			$child->getText();
		}
		$class = 'CnabPHP\resources\\'.self::$banco.'\retorno\\'.self::$layout.'\Registro9';
		$headerArquivo = new $class(array('1'=>1));
		$headerArquivo->getText();
		return implode(PHP_EOL,self::$retorno);
	}
}
?>