<?php
namespace CnabPHP\resources\B756\remessa\cnab400;

use CnabPHP\resources\generico\remessa\cnab400\Generico9;
use CnabPHP\RemessaAbstract;

class Registro9 extends Generico9
{
    protected $meta = array(
        'tipo_registro'=>array(
            'tamanho'=>1,
            'default'=>'9',
            'tipo'=>'int',
            'required'=>true),
        'filler1'=>array(            //32.3P
            'tamanho'=>193,
            'default'=>' ',
            'tipo'=>'alfa',
            'required'=>true),
        'mensagem_1'=>array(            //32.3P
            'tamanho'=>40,
            'default'=>' ',
            'tipo'=>'alfa',
            'required'=>true),
        'mensagem_2'=>array(            //32.3P
            'tamanho'=>40,
            'default'=>' ',
            'tipo'=>'alfa',
            'required'=>true),
        'mensagem_3'=>array(            //32.3P
            'tamanho'=>40,
            'default'=>' ',
            'tipo'=>'alfa',
            'required'=>true),
        'mensagem_4'=>array(            //32.3P
            'tamanho'=>40,
            'default'=>' ',
            'tipo'=>'alfa',
            'required'=>true),
        'mensagem_5'=>array(            //32.3P
            'tamanho'=>40,
            'default'=>' ',
            'tipo'=>'alfa',
            'required'=>true),
        'numero_registro'=>array(       // 4.3R
            'tamanho'=>6,
            'default'=>'0',
            'tipo'=>'int',
            'required'=>true),
    );
    
    protected function set_mensagem_1($value)
    {
        $this->data['mensagem_1'] = isset(RemessaAbstract::$entryData['mensagem_1'])?RemessaAbstract::$entryData['mensagem_1']:''; 
    }
    
    protected function set_mensagem_2($value)
    {
        $this->data['mensagem_2'] = isset(RemessaAbstract::$entryData['mensagem_2'])?RemessaAbstract::$entryData['mensagem_2']:''; 
    }
    
    protected function set_mensagem_3($value)
    {
        $this->data['mensagem_3'] = isset(RemessaAbstract::$entryData['mensagem_3'])?RemessaAbstract::$entryData['mensagem_3']:''; 
    }
    
    protected function set_mensagem_4($value)
    {
        $this->data['mensagem_4'] = isset(RemessaAbstract::$entryData['mensagem_4'])?RemessaAbstract::$entryData['mensagem_4']:''; 
    }
    
    protected function set_mensagem_5($value)
    {
        $this->data['mensagem_5'] = isset(RemessaAbstract::$entryData['mensagem_5'])?RemessaAbstract::$entryData['mensagem_5']:''; 
    }
}

?>
