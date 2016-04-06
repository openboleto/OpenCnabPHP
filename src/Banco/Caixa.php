<?php
namespace CnabPHP\Banco;
use \CnabPHP\ArquivoAbstract;
use \CnabPHP;
class Caixa extends ArquivoAbstract{
	public function __construct($layout,$data){	
		self::$banco = 'Caixa';
		parent::__construct($layout,$data);
	}
}
?>
