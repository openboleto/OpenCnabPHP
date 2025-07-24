<?php

namespace CnabPHP\resources\B707\remessa\cnab400;

use CnabPHP\resources\generico\remessa\cnab400\Generico0;
use CnabPHP\RemessaAbstract;

class Registro0 extends Generico0
{
    protected $meta = [
        'codigo_registro' => [ // 001
            'tamanho' => 1,
            'default' => '0',
            'tipo' => 'int',
            'required' => true,
        ],
        'codigo_remessa' => [ // 002
            'tamanho' => 1,
            'default' => '1',
            'tipo' => 'int',
            'required' => true,
        ],
        'literal_remessa' => [ // 003-009
            'tamanho' => 7,
            'default' => 'REMESSA',
            'tipo' => 'alfa',
            'required' => true,
        ],
        'codigo_servico' => [ // 010-011
            'tamanho' => 2,
            'default' => '01',
            'tipo' => 'int',
            'required' => true,
        ],
        'literal_servico' => [ // 012-026
            'tamanho' => 15,
            'default' => 'COBRANCA',
            'tipo' => 'alfa',
            'required' => true,
        ],
        'codigo_empresa' => [ // 027-046
            'tamanho' => 20,
            'default' => '',
            'tipo' => 'alfa',
            'required' => true,
        ],
        'nome_empresa' => [ // 047-076
            'tamanho' => 30,
            'default' => '',
            'tipo' => 'alfa',
            'required' => true,
        ],
        'codigo_banco' => [ // 077-079
            'tamanho' => 3,
            'default' => '707',
            'tipo' => 'int',
            'required' => true,
        ],
        'nome_banco' => [ // 080-094
            'tamanho' => 15,
            'default' => 'BANCO DAYCOVAL',
            'tipo' => 'alfa',
            'required' => true,
        ],
        'data_gravacao' => [ // 095-100
            'tamanho' => 6,
            'default' => '', // gerado dinamicamente
            'tipo' => 'date',
            'required' => true,
        ],
        'filler1' => [ // 101-394
            'tamanho' => 294,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true,
        ],
        'numero_sequencial' => [ // 395-400
            'tamanho' => 6,
            'default' => '000001',
            'tipo' => 'int',
            'required' => true,
        ],
    ];

    public function __construct($data = NULL)
    {
        parent::__construct($data);
        RemessaAbstract::$endLine = "\r\n"; // CNAB usa CRLF
    }

    public function getFileName()
    {
        return 'CNAB400_' . date('Ymd_His') . '.REM';
    }
}
