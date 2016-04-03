<?php
namespace CnabPHP;

abstract class ArquivoAbstract
{
	protected $counter = 1;
	protected $hearder;
	protected $banco;
	protected $layout;
	protected $children;
	public function __construct($layout,$data){
		
		$this->layout = $layout;
		$class = 'CnabPHP\resources\\'.$this->banco.'\remessa\\'.$this->layout.'\Registro0';
		$data['NSR'] = $counter; 
		 
		$this->hearder = new $class($data);
		$this->$children[] = $this->hearder;
		$counter++;
	}
	public function inserirDetalhe($data){
		
		$class = 'CnabPHP\resources\\'.$this->banco.'\remessa\\'.$this->layout.'\Registro1';
		$data['NSR'] = $counter; 
		$data['header'] = $this->hearder;
		$this->children[] = new $class($data);
		$counter++;
	}
	public function getText(){
		foreach($this->children as $child){
			$child->getText();
		}
	}
	// metodos para o controle da geração do arquivo etste
}
?>
