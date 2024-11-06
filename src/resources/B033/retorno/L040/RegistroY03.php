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

class RegistroY03 extends Generico3
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
            'tipo' => 'int',
            'required' => true
		),
        'codigo_movimento' => array(
            'tamanho' => 2,
            'default' => '06',
            'tipo' => 'int',
            'required' => true
		),
        // - ------------------ até aqui é igual para todo registro tipo 3
        'identificacao_registro' => array(
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
        'tipo_chave_pix' => array(
            'tamanho' => 1,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true
		),
        'url_qrcode' => array(
            'tamanho' => 77,
            'default' => ' ',
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
