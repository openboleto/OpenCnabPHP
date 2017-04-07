<?php
namespace CnabPHP\resources\b033\remessa\cnab400;

use CnabPHP\resources\generico\remessa\cnab400\Generico9;

class Registro9 extends Generico9
{
	protected $meta = array(
        'tipo_registro'=>array(
            'tamanho'=>1,
            'default'=>'9',
            'tipo'=>'int',
            'required'=>true),
        'qtde_documento'=>array(
            'tamanho'=>6,
            'default'=>'',
            'tipo'=>'int',
            'required'=>true),
        'valor_total_titulo'=>array(
			'tamanho'=>11,
			'default'=>'0',
			'tipo'=>'decimal',
			'precision'=>2,
			'required'=>true),
      	'filler1'=>array(            //32.3P
            'tamanho'=>374,
            'default'=>' ',
            'tipo'=>'alfa',
            'required'=>true),
        'numero_registro'=>array(       // 4.3R
            'tamanho'=>6,
            'default'=>'0',
            'tipo'=>'int',
            'required'=>true),
   	);

}

?>
