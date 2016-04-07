<?php
namespace CnabPHP\Banco;
use \CnabPHP\RemessaAbstract;
use \CnabPHP;
class Caixa extends RemessaAbstract{
	public function __construct($layout,$data){    
		self::$banco = 'Caixa';
		parent::__construct($layout,$data);
	}
}
?>
