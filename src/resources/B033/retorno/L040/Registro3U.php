<?php
/*
 * CnabPHP - Geração de arquivos de remessa e retorno em PHP
 *
 * LICENSE: The MIT License (MIT)
 *
 * Copyright (C) 2013 Ciatec.net
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
namespace CnabPHP\resources\B033\retorno\L040;

use CnabPHP\resources\generico\retorno\L040\Generico3;

class Registro3U extends Generico3
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
            'default' => 'U',
            'tipo' => 'alfa',
            'required' => true
		),
        'filler1' => array(
            'tamanho' => 1,
            'default' => ' ',
            'tipo' => 'int',
            'required' => true
		),
        'codigo_movimento' => array(
            'tamanho' => 2,
            'default' => '',
            'tipo' => 'int',
            'required' => true
		),
        // - ------------------ até aqui é igual para todo registro tipo 3
        'vlr_juros_multa' => array(
            'tamanho' => 13,
            'default' => '',
            'tipo' => 'decimal',
            'precision' => 2,
            'required' => true
		),
        'vlr_desconto' => array(
            'tamanho' => 13,
            'default' => '',
            'tipo' => 'decimal',
            'precision' => 2,
            'required' => true
		),
        'vlr_abatimento' => array(
            'tamanho' => 13,
            'default' => '',
            'tipo' => 'decimal',
            'precision' => 2,
            'required' => true
		),
        'vlr_IOF' => array(
            'tamanho' => 13,
            'default' => '',
            'tipo' => 'decimal',
            'precision' => 2,
            'required' => true
		),
        'vlr_pago' => array(
            'tamanho' => 13,
            'default' => '',
            'tipo' => 'decimal',
            'precision' => 2,
            'required' => true
		),
        'vlr_liquido' => array(
            'tamanho' => 13,
            'default' => '',
            'tipo' => 'decimal',
            'precision' => 2,
            'required' => true
		),
        'vlr_outras_despesas' => array(
            'tamanho' => 13,
            'default' => ' ',
            'tipo' => 'decimal',
            'precision' => 2,
            'required' => true
		),
        'vlr_outros_creditos' => array(
            'tamanho' => 13,
            'default' => '',
            'tipo' => 'decimal',
            'precision' => 2,
            'required' => true
		),
        'data_ocorrencia' => array(
            'tamanho' => 8,
            'default' => '',
            'tipo' => 'date',
            'required' => true
		),
        'data_credito' => array(
            'tamanho' => 8,
            'default' => '0',
            'tipo' => 'date',
            'required' => true
		),
        'codigo_ocorrencia_pagador' => array(
            'tamanho' => 4,
            'default' => '0',
            'tipo' => 'int',
            'required' => true
		),
        'data_ocorrencia_pagador' => array(
            'tamanho' => 8,
            'default' => '0',
            'tipo' => 'date',
            'required' => false
		),
        'vlr_ocorrencia_pagador' => array(
            'tamanho' => 13,
            'default' => '',
            'tipo' => 'decimal',
            'precision' => 2,
            'required' => true
		),
        'complemento_ocorrencia_pagador' => array(
            'tamanho' => 30,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true
		),
        'codigo_banco_pagador' => array(
            'tamanho' => 3,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true
		),
        'filler2' => array(
            'tamanho' => 27,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true
		),
    );
}
