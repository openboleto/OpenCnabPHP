<?php

namespace CnabPHP\resources\B748\remessa\cnab400;

use CnabPHP\RemessaAbstract;
use CnabPHP\resources\generico\remessa\cnab400\Generico9;

class Registro9 extends Generico9 {

    protected $meta = array(
        'tipo_registro' => array(
            'tamanho' => 1,
            'default' => '9',
            'tipo' => 'int',
            'required' => true),
        'id_arquivo_remessa' => array(
            'tamanho' => 1,
            'default' => '1',
            'tipo' => 'int',
            'required' => true),
        'codigo_banco' => array(
            'tamanho' => 1,
            'default' => '748',
            'tipo' => 'int',
            'required' => true),
        'codigo_beneficiario' => array(
            'tamanho' => 5,
            'default' => '',
            'tipo' => 'int',
            'required' => true),
        'filler1' => array(//32.3P
            'tamanho' => 384,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true),
        'numero_registro' => array(// 4.3R
            'tamanho' => 6,
            'default' => '0',
            'tipo' => 'int',
            'required' => true),
    );

    protected function set_codigo_beneficiario($value) {
        $this->data['codigo_beneficiario'] =  RemessaAbstract::$entryData['codigo_beneficiario'];
    }

}
