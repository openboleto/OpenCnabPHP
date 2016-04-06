<?php
namespace CnabPHP;

abstract class ArquivoAbstract
{
	public static $banco;
	public static $layout;
	//public static $counter = 1;
	public static $hearder;
	public static $entryData;
	public static $loteCounter = 0;
	protected $children = array();
	public static $retorno = array();
	
	public function __construct($layout,$data){
		
		self::$layout = $layout;
		$class = 'CnabPHP\resources\\'.self::$banco.'\remessa\\'.self::$layout.'\Registro0';
		self::$entryData = $data; 
		self::$hearder = new $class($data);
		$this->children[] = self::$hearder;
	}
	public function inserirDetalhe($data){
		
		$class = 'CnabPHP\resources\\'.self::$banco.'\remessa\\'.self::$layout.'\Registro1';
		$this->children[] = new $class($data);
		//self::$counter++;
	}
	public function getText(){
		foreach($this->children as $child){
			$child->getText();
		}
		return implode(PHP_EOL,self::$retorno);
	}
	// metodos para o controle da geração do arquivo
}
?>
