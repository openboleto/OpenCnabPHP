<?php

/*
 * CnabPHP - Geração de arquivos de remessa e retorno em PHP
 *
 * LICENSE: The MIT License (MIT)
 *
 * Copyright (C) 2018 NextStep <http://github.com/nxstep-si>
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy of this
 * software and associated documentation files (the "Software"), to deal in the Software
 * without restriction, including without limitation the rights to use, copy, modify,
 * merge, publish, distribute, sublicense, and/or sell copies of the Software, and to
 * permit persons to whom the Software is furnished to do so, subject to the following
 * conditions:
 *
 * The above copyright notice and this permission notice shall be included in all copies
 * or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED,
 * INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A
 * PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT
 * HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION
 * OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE
 * SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 */

namespace CnabPHP\resources\B756\remessa\cnab240;

use CnabPHP\resources\generico\remessa\cnab240\Generico3;
use CnabPHP\RegistroRemAbstract;
use CnabPHP\RemessaAbstract;
use CnabPHP\Exception;

class Registro3P extends Generico3 {

    protected $meta = array(
        'codigo_banco' => array(//01.3P -- 1-3
            'tamanho' => 3,
            'default' => '756',
            'tipo' => 'int',
            'required' => true
        ),
        'codigo_lote' => array(//02.3P -- 4-7 
            'tamanho' => 4,
            'default' => 1,
            'tipo' => 'int',
            'required' => true
        ),
        'tipo_registro' => array(//03.3P -- 8
            'tamanho' => 1,
            'default' => '3',
            'tipo' => 'int',
            'required' => true
        ),
        'numero_registro' => array(//04.3P -- 9-13
            'tamanho' => 5,
            'default' => '1',
            'tipo' => 'int',
            'required' => true
        ),
        'seguimento' => array(//05.3P -- 14
            'tamanho' => 1,
            'default' => 'P',
            'tipo' => 'alfa',
            'required' => true
        ),
        'filler1' => array(//06.3P -- 15
            'tamanho' => 1,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true
        ),
        'codigo_movimento' => array(//07.3P -- 16-17
            'tamanho' => 2,
            'default' => '01', // entrada de titulo
            'tipo' => 'int',
            'required' => true
        ),
        // - ------------------ até aqui é igual para todo registro tipo 3
        'agencia' => array(//08.3P -- 18-22
            'tamanho' => 5,
            'default' => '',
            'tipo' => 'int',
            'required' => true
        ),
        'agencia_dv' => array(//09.3P -- 23
            'tamanho' => 1,
            'default' => '',
            'tipo' => 'alfa',
            'required' => true
        ),
        'conta' => array(//10.3P -- 24-35
            'tamanho' => 12,
            'default' => '',
            'tipo' => 'int',
            'required' => true
        ),
        'conta_dv' => array(//11.3P -- 36
            'tamanho' => 1,
            'default' => '',
            'tipo' => 'alfa',
            'required' => true
        ),
        'filler2' => array(//12.3P -- 37
            'tamanho' => 1,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true
        ),
        /* Início do nosso número composto */
        //TODO Verificar se as variáveis passam ou se precisa ser tudo 'alfa'
        'nosso_numero' => array(//13.3P -- 38-46
            'tamanho' => 9,
            'default' => '',
            'tipo' => 'int',
            'required' => true
        ),
        'nosso_numero_dv' => array(//13.3P -- 47
            'tamanho' => 1,
            'default' => '',
            'tipo' => 'int',
            'required' => true
        ),
        'parcela' => array(//13.3P -- 48-49
            'tamanho' => 2,
            'default' => '',
            'tipo' => 'int',
            'required' => true
        ),
        'modalidade' => array(//13.3P -- 50-51
            'tamanho' => 2,
            'default' => '',
            'tipo' => 'int',
            'required' => true
        ),
        'tipo_formulario' => array(//13.3P -- 52
            'tamanho' => 1,
            'default' => '',
            'tipo' => 'int',
            'required' => true
        ),
        'filler3' => array(//13.3P -- 53-57
            'tamanho' => 5,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true
        ),
        /* Fim do nosso número composto */
        'codigo_carteira' => array(//14.3P -- 58
            'tamanho' => 1,
            'default' => '',
            'tipo' => 'int',
            'required' => true
        ),
        'cadastramento' => array(//15.3P -- 59
            'tamanho' => 1,
            'default' => '0',
            'tipo' => 'int',
            'required' => true
        ),
        // documento
        'filler4' => array(//16.3P -- 60
            'tamanho' => 1,
            'default' => ' ', // combrança com registro
            'tipo' => 'alfa',
            'required' => true
        ),
        'cod_emissao_boleto' => array(//17.3P -- 61
            'tamanho' => 1,
            'default' => '2', // {2} - beneficiário/cedente emite
            'tipo' => 'int',
            'required' => true
        ),
        'distrib_boleto' => array(//18.3P -- 62
            'tamanho' => 1,
            'default' => '2', // {2} - beneficiário/cedente distribui
            'tipo' => 'alfa',
            'required' => true
        ),
        // numero documento
        'seu_numero' => array(//19.3P -- 63-77
            // Campo de preenchimento obrigatório preencher com o 
            'tamanho' => 15, // Numero do Contrato que gerou o boleto
            'default' => '',
            'tipo' => 'alfa',
            'required' => true
        ),
        'data_vencimento' => array(//20.3P -- 78-85
            'tamanho' => 8,
            'default' => '',
            'tipo' => 'date',
            'required' => true
        ),
        'valor' => array(//21.3P -- 86-100
            'tamanho' => 13,
            'default' => '',
            'tipo' => 'decimal',
            'precision' => 2,
            'required' => true
        ),
        'agencia_cobradora' => array(//22.3P -- 101-105
            'tamanho' => 5,
            'default' => '0',
            'tipo' => 'int',
            'required' => true
        ),
        'agencia_cobradora_dv' => array(//23.3P -- 106
            'tamanho' => 1,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true
        ),
        'especie_titulo' => array(//24.3P -- 107-108
            'tamanho' => 2,
            'default' => '2',
            'tipo' => 'int',
            'required' => true
        ),
        'aceite' => array(//25.3P -- 109
            'tamanho' => 1,
            'default' => 'N',
            'tipo' => 'alfa',
            'required' => true
        ),
        'data_emissao' => array(//26.3P -- 110-117
            'tamanho' => 8,
            'default' => '',
            'tipo' => 'date',
            'required' => true
        ),
        // codigo juros/mora
        'codigo_juros' => array(//27.3P -- 118
            'tamanho' => 1,
            'default' => '0',
            'tipo' => 'int',
            'required' => true
        ),
        'data_juros' => array(//28.3P -- 119-126
            'tamanho' => 8, // Data de vencimento do título
            'default' => '0',
            'tipo' => 'date',
            'required' => true
        ),
        'vlr_juros' => array(//29.3P -- 127-141
            'tamanho' => 13,
            'default' => '0',
            'tipo' => 'decimal',
            'precision' => 2,
            'required' => true
        ),
        // codigo desconto
        'codigo_desconto' => array(//30.3P -- 124
            'tamanho' => 1,
            'default' => '0',
            'tipo' => 'int',
            'required' => true
        ),
        'data_desconto' => array(//31.3P -- 143-150
            'tamanho' => 8,
            'default' => '0',
            'tipo' => 'date',
            'required' => true
        ),
        'vlr_desconto' => array(//32.3P -- 151-165
            'tamanho' => 13,
            'default' => '0',
            'tipo' => 'decimal',
            'precision' => 2,
            'required' => true
        ),
        'vlr_IOF' => array(//33.3P -- 166-180
            'tamanho' => 13,
            'default' => '0',
            'tipo' => 'decimal',
            'precision' => 2,
            'required' => true
        ),
        'vlr_abatimento' => array(//34.3P -- 181-195
            'tamanho' => 13,
            'default' => '0',
            'tipo' => 'decimal',
            'precision' => 2,
            'required' => true
        ),
        'identificacao_contrato' => array(//35.3P -- 162-220
            'tamanho' => 25, // Identificação do contrato
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true
        ),
        'protestar' => array(//36.3P -- 221
            'tamanho' => 1,
            'default' => '1',
            'tipo' => 'int',
            'required' => true
        ),
        'prazo_protesto' => array(//37.3P -- 222-223
            'tamanho' => 2,
            'default' => '0',
            'tipo' => 'int',
            'required' => true
        ),
        'baixar' => array(//38.3P -- 224
            'tamanho' => 1,
            'default' => '0',
            'tipo' => 'int',
            'required' => true
        ),
        'prazo_baixar' => array(//39.3P -- 225-227
            'tamanho' => 3,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true
        ),
        'codigo_moeda' => array(//40.3P -- 228-229
            'tamanho' => 2,
            'default' => '09',
            'tipo' => 'int',
            'required' => true
        ),
        'filler7' => array(//41.3P -- 230-239
            'tamanho' => 10,
            'default' => '0',
            'tipo' => 'int',
            'required' => true
        ),
        'filler8' => array(//42.3P -- 240
            'tamanho' => 1,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true
        )
    );

    public function __construct($data = null) {
        if (empty($this->data))
            parent::__construct($data);
        $this->inserirDetalhe($data);
    }

    protected function set_nosso_numero_dv($value) {
        $Dv = self::modulo11($this->data['nosso_numero'], $this->data['agencia'], RemessaAbstract::$entryData['codigo_beneficiario'] . RemessaAbstract::$entryData['codigo_beneficiario_dv']);
        $this->data['nosso_numero_dv'] = (string)$Dv;
    }

    protected static function modulo11($index, $ag, $conv) {
        $sequencia = str_pad($ag, 4, 0, STR_PAD_LEFT) . str_pad($conv, 10, 0, STR_PAD_LEFT) . str_pad($index, 7, 0, STR_PAD_LEFT);
        $cont = 0;
        $calculoDv = 0;
        for ($num = 0; $num <= strlen($sequencia); $num++) {
            $cont++;
            if ($cont == 1) {
                // constante fixa Sicoob » 3197
                $constante = 3;
            }
            if ($cont == 2) {
                $constante = 1;
            }
            if ($cont == 3) {
                $constante = 9;
            }
            if ($cont == 4) {
                $constante = 7;
                $cont = 0;
            }
            $calculoDv += ((int) substr($sequencia, $num, 1) * $constante);
        }
        $Resto = $calculoDv % 11;
        if ($Resto == 0 || $Resto == 1) {
            $Dv = 0;
        } else {
            $Dv = 11 - $Resto;
        };
        return $Dv;
    }

    public function inserirDetalhe($data) {
        $class = 'CnabPHP\resources\\B' . RemessaAbstract::$banco . '\remessa\\' . RemessaAbstract::$layout . '\Registro3Q';
        $this->children [] = new $class($data);
        // Chamar função para inserir nosso número
        if (isset($data ['codigo_desconto2']) || isset($data ['codigo_desconto3']) || isset($data ['vlr_multa']) || isset($data ['informacao_pagador'])) {
            $class = 'CnabPHP\resources\\B' . RemessaAbstract::$banco . '\remessa\\' . RemessaAbstract::$layout . '\Registro3R';
            $this->children [] = new $class($data);
        }
        $class = 'CnabPHP\resources\\B' . RemessaAbstract::$banco . '\remessa\\' . RemessaAbstract::$layout . '\Registro3S3';
        $this->children [] = new $class($data);
    }

}

?>
