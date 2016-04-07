<?php
namespace CnabPHP;

abstract class RemessaAbstract
{
	public static $banco;
	public static $layout;
	//public static $counter = 1;
	public static $hearder;
	public static $entryData;
	public static $loteCounter = 1;
	private static $children = array();
	public static $lotes = array();
	public static $retorno = array();
	
	public function __construct($layout,$data){
		
		self::$layout = $layout;
		$class = 'CnabPHP\resources\\'.self::$banco.'\remessa\\'.self::$layout.'\Registro0';
		self::$entryData = $data; 
		self::$hearder = new $class($data);
		self::$children[] = self::$hearder;
	}
	public function inserirDetalhe($data){
		
		$class = 'CnabPHP\resources\\'.self::$banco.'\remessa\\'.self::$layout.'\Registro1';
		self::addChild(new $class($data));
		//self::$counter++;
	}
	public function getText(){
		foreach(self::$children as $child){
			$child->getText();
		}
		return implode(PHP_EOL,self::$retorno);
	}
	
	static private function addChild(RegistroAbstract $child){
		self::$children[] = $child;   
	}
	
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
	// metodos para o controle da geração do arquivo
}
?>
