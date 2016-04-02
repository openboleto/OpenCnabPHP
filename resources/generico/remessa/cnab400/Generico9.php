<?php
namespace rctnet\resources\generico\remessa\cnab400;
use rctnet\RegistroAbstract;

class Generico9 extends RegistroAbstract
{
	protected $meta = array(
		'tipo_de_registro'=>
		array('posicao'=>array('i'=>1,'f'=>1),'tamanho'=>1,'default'=>'0','tipo'=>'numero'),
		'operacao'=>
		array('posicao'=>array('i'=>2,'f'=>2),'tamanho'=>1,'default'=>'1','tipo'=>'numero')
		// definir todos os campos do registro nesse formato
	);
}

?>
