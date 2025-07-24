<?php

namespace CnabPHP\resources\B707\remessa\cnab400;

use CnabPHP\resources\generico\remessa\cnab400\Generico1;
use CnabPHP\RemessaAbstract;

class Registro1 extends Generico1
{
    protected $meta = [
        'codigo_registro' => [               // 001-001
            'tamanho' => 1,
            'default' => '1',
            'tipo' => 'int',
            'required' => true
        ],
        'codigo_inscricao' => [              // 002-003
            'tamanho' => 2,
            'default' => '02', // 01=CPF do cedente, 02=CNPJ do cedente, 03 = cpf do sacador, 04 = cnpj do sacador
            'tipo' => 'int',
            'required' => true
        ],
        'numero_inscricao' => [              // 004-017 cnpj
            'tamanho' => 14,
            'default' => '',
            'tipo' => 'int',
            'required' => true
        ],
        'codigo_empresa' => [                // 018-037
            'tamanho' => 20,
            'default' => '',
            'tipo' => 'alfa',
            'required' => true
        ],
        'uso_empresa' => [                   // 038-062
            'tamanho' => 25,
            'default' => '',
            'tipo' => 'alfa',
            'required' => false
        ],
        'nosso_numero' => [                  // 063-070
            'tamanho' => 8,
            'default' => '',
            'tipo' => 'int',
            'required' => true
        ],
        'filler1' => [                       // 071-083
            'tamanho' => 13,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true
        ],
        'uso_banco' => [                     // 084-107
            'tamanho' => 24,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => false
        ],
        'codigo_remessa' => [               // 108-108
            'tamanho' => 1,
            'default' => '1',
            'tipo' => 'alfa',
            'required' => false
        ],
        'codigo_ocorrencia' => [            // 109-110
            'tamanho' => 2,
            'default' => '01', // 01 = Remessa
            'tipo' => 'int',
            'required' => true
        ],
        'seu_numero' => [                   // 111-120
            'tamanho' => 10,
            'default' => '',
            'tipo' => 'alfa',
            'required' => true
        ],
        'data_vencimento' => [              // 121-126
            'tamanho' => 6,
            'default' => '',
            'tipo' => 'date',
            'required' => true
        ],
        'valor_titulo' => [                 // 127-139
            'tamanho' => 13,
            'default' => '0',
            'tipo' => 'decimal',
            'precision' => 0,
            'required' => true
        ],
        'codigo_banco' => [                 // 140-142
            'tamanho' => 3,
            'default' => '707',
            'tipo' => 'int',
            'required' => true
        ],
        'agencia_cobradora' => [           // 143-146
            'tamanho' => 4,
            'default' => '0000',
            'tipo' => 'int',
            'required' => true
        ],
        'dac_agencia_cobradora' => [       // 147-147
            'tamanho' => 1,
            'default' => '0',
            'tipo' => 'int',
            'required' => true
        ],
        'especie_titulo' => [              // 148-149
            'tamanho' => 2,
            'default' => '01', // Duplicata
            'tipo' => 'alfa',
            'required' => true
        ],
        'aceite' => [                      // 150-150
            'tamanho' => 1,
            'default' => 'N',
            'tipo' => 'alfa',
            'required' => true
        ],
        'data_emissao' => [                // 151-156
            'tamanho' => 6,
            'default' => '',
            'tipo' => 'date',
            'required' => true
        ],
        'filler2' => [                     // 157-160
            'tamanho' => 4,
            'default' => '0000',
            'tipo' => 'int',
            'required' => true
        ],
        'juros_mora_dia' => [              // 161-173
            'tamanho' => 13,
            'default' => '0',
            'tipo' => 'decimal',
            'precision' => 0,
            'required' => true
        ],
        'data_desconto' => [              // 174-179
            'tamanho' => 6,
            'default' => '0',
            'tipo' => 'date',
            'required' => true
        ],
        'valor_desconto' => [             // 180-192
            'tamanho' => 13,
            'default' => '0',
            'tipo' => 'decimal',
            'precision' => 0,
            'required' => true
        ],
        'uso_banco2' => [                 // 193-205
            'tamanho' => 13,
            'default' => '0',
            'tipo' => 'int',
            'required' => true
        ],
        'valor_abatimento' => [          // 206-218
            'tamanho' => 13,
            'default' => '0',
            'tipo' => 'decimal',
            'precision' => 0,
            'required' => true
        ],
        'tipo_inscricao_sacado' => [     // 219-220
            'tamanho' => 2,
            'default' => '01',
            'tipo' => 'int',
            'required' => true
        ],
        'numero_inscricao_sacado' => [   // 221-234
            'tamanho' => 14,
            'default' => '',
            'tipo' => 'int',
            'required' => true
        ],
        'nome_sacado' => [               // 235-264
            'tamanho' => 30,
            'default' => '',
            'tipo' => 'alfa',
            'required' => true
        ],
        'filler3' => [                   // 265-274
            'tamanho' => 10,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true
        ],
        'endereco_sacado' => [          // 275-314
            'tamanho' => 40,
            'default' => '',
            'tipo' => 'alfa',
            'required' => true
        ],
        'bairro_sacado' => [            // 315-326
            'tamanho' => 12,
            'default' => '',
            'tipo' => 'alfa',
            'required' => true
        ],
        'cep_sacado' => [               // 327-334
            'tamanho' => 8,
            'default' => '',
            'tipo' => 'int',
            'required' => true
        ],
        'cidade_sacado' => [            // 335-349
            'tamanho' => 15,
            'default' => '',
            'tipo' => 'alfa',
            'required' => true
        ],
        'uf_sacado' => [                // 350-351
            'tamanho' => 2,
            'default' => '',
            'tipo' => 'alfa',
            'required' => true
        ],
        'sacador_avalista' => [         // 352-381
            'tamanho' => 30,
            'default' => '',
            'tipo' => 'alfa',
            'required' => false
        ],
        'filler4a' => [ // 382–385
            'tamanho' => 4,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true
        ],
        'filler4b' => [ // 386–391
            'tamanho' => 6,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true
        ],
        'prazo_protesto' => [          // 392-393
            'tamanho' => 2,
            'default' => '00',
            'tipo' => 'int',
            'required' => true
        ],
        'moeda' => [                   // 394-394
            'tamanho' => 1,
            'default' => '0',
            'tipo' => 'alfa',
            'required' => true
        ],
        'numero_registro' => [       // 395-400
            'tamanho' => 6,
            'default' => '1',
            'tipo' => 'int',
            'required' => true
        ],
    ];
}
