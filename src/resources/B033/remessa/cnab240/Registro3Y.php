<?php

namespace CnabPHP\resources\B033\remessa\cnab240;

use CnabPHP\resources\generico\remessa\cnab240\Generico3;

class Registro3Y extends Generico3
{
    protected $meta = array(
        'codigo_banco' => array(
            'tamanho' => 3,
            'default' => '033',
            'tipo' => 'int',
            'required' => true
        ),
        'codigo_lote' => array(
            'tamanho' => 4,
            'default' => 1,
            'tipo' => 'int',
            'required' => true
        ),
        'tipo_registro' => array(
            'tamanho' => 1,
            'default' => '3',
            'tipo' => 'int',
            'required' => true
        ),
        'numero_registro' => array(
            'tamanho' => 5,
            'default' => '0',
            'tipo' => 'int',
            'required' => true
        ),
        'seguimento' => array(
            'tamanho' => 1,
            'default' => 'Y',
            'tipo' => 'alfa',
            'required' => true
        ),
        'filler1' => array(
            'tamanho' => 1,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true
        ),
        'codigo_movimento' => array(
            'tamanho' => 2,
            'default' => '01', // entrada de titulo
            'tipo' => 'int',
            'required' => true
        ),
        // - ------------------ ate aqui é igual para todo registro tipo 3
        'identificacao' => array(
            'tamanho' => 2,
            'default' => '03',
            'tipo' => 'int',
            'required' => true
        ),
        'filler2' => array(
            'tamanho' => 61,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true
        ),
        'tipo_pix' => array(
            'tamanho' => 1,
            'default' => '',
            'tipo' => 'alfa',
            'required' => true
        ),
        'chave_pix' => array(
            'tamanho' => 77,
            'default' => '',
            'tipo' => 'alfa',
            'required' => true
        ),
        'codigo_identificacao' => array(
            'tamanho' => 35,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true
        ),
        'filler3' => array(
            'tamanho' => 47,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true
        ),
    );
}
