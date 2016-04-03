<?php
namespace CnabPHP\resources\generico\remessa\cnab400;
use CnabPHP\RegistroAbstract;

class Generico0 extends RegistroAbstract
{
	protected $meta = array(
		'tipo_de_registro'=>
		array('posicao'=>array('i'=>1,'f'=>1),'tamanho'=>1,'default'=>'0','tipo'=>'numero','required'=>true),
		'operacao'=>
		array('posicao'=>array('i'=>2,'f'=>2),'tamanho'=>1,'default'=>'1','tipo'=>'numero','required'=>true)
		// definir todos os campos do registro nesse formato
	);
}

?>
