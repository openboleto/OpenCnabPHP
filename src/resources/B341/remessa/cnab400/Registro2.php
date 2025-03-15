<?php
namespace CnabPHP\resources\B341\remessa\cnab400;

use CnabPHP\resources\generico\remessa\cnab400\Generico2;

class Registro2 extends Generico2
{
	protected $meta = array(
        'tipo_registro'=>array(
            'tamanho'=>1,
            'default'=>'2',
            'tipo'=>'int',
            'required'=>true),
        'codigo_multa'=>array(    //24.3P
            'tamanho'=>1,
            'default'=>'1',
            'tipo'=>'alfa',
            'required'=>true),
        'data_multa'=>array(            //31.3P
            'tamanho'=>8,
            'default'=>'0',
            'tipo'=>'date',
            'required'=>true),
        'vlr_multa'=>array(            //29.3P
            'tamanho'=>11,
            'default'=>'0',
            'tipo'=>'decimal',
            'precision'=>2,
            'required'=>true),
        'filler2'=>array(            //32.3P
            'tamanho'=>371, 
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