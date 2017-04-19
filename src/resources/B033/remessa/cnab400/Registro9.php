<?php
namespace CnabPHP\resources\b033\remessa\cnab400;

use CnabPHP\resources\generico\remessa\cnab400\Generico9;
use cnabPHP\RemessaAbstract;

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
            'default'=>'0',
            'tipo'=>'int',
            'required'=>true),
        'numero_registro'=>array(       // 4.3R
            'tamanho'=>6,
            'default'=>'0',
            'tipo'=>'int',
            'required'=>true),
   	);


    protected function set_qtde_documento($value)
    {
        $registros = $this->getRegistros();
	    $header = 1;
	    $trailer = 1;

        $this->data['qtde_documento'] = count($registros) + $header + $trailer;
    }

    protected function set_valor_total_titulo()
    {

        $this->data['valor_total_titulo'] = $this->getTotal();
    }

    protected function getTotal()
    {
        return array_reduce($this->getRegistros(), function($soma, $registro) {
            return $soma + $registro->getValor();
        });
    }

    protected function getRegistros()
    {
        $lotes = RemessaAbstract::getLotes();

        $registros = array_filter($lotes, function($lote) {
            return $lote instanceof Registro1;
        });

        return $registros;
    }

}

?>
