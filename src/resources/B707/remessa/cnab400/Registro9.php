<?php

namespace CnabPHP\resources\B707\remessa\cnab400;

use CnabPHP\resources\generico\remessa\cnab400\Generico9;

class Registro9 extends Generico9
{
    protected $meta = [
        'codigo_registro' => [             // 001-001
            'tamanho' => 1,
            'default' => '9',
            'tipo' => 'int',
            'required' => true
        ],
        'filler1' => [                     // 002-394
            'tamanho' => 393,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true
        ],
        'numero_sequencial' => [          // 395-400
            'tamanho' => 6,
            'default' => '1',
            'tipo' => 'int',
            'required' => true
        ],
    ];
}
