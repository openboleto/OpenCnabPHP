<?php
namespace rctnet\resources\itau\remessa\cnab400;

use rctnet\resources\generico\remessa\cnab400\Generico1;

class Registro1 extends Generico1
{
	protected $meta = array(
		'tipo_de_registro'=>
		array('posicao'=>array('i'=>1,'f'=>1),'tamanho'=>1,'default'=>'0','tipo'=>'numero'),
		'operacao'=>
		array('posicao'=>array('i'=>2,'f'=>2),'tamanho'=>1,'default'=>'1','tipo'=>'numero')
		// definir todos os campos do registro nesse formato
	);
	public function get_nosso_numero(){
		$teste  = $this->data['nosso_numero'];
		$teste = $teste + 1;
		$this->data['nosso_numero']  = $teste;
		return $this->___get('nosso_numero');
	}
}

?>
