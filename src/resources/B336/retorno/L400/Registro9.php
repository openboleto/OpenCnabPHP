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

namespace CnabPHP\resources\B336\retorno\L400;

use CnabPHP\resources\generico\retorno\L400\Generico9;
use CnabPHP\Exception;

class Registro9 extends Generico9 {

    protected $meta = array(
        'tipo_registro' => array(//Tipo Registro: 1/1T
            'tamanho' => 1,
            'default' => '9',
            'tipo' => 'int',
            'required' => true),
        'filler0' => array(//Uso do Banco: 2/2T1
            'tamanho' => 1,
            'default' => '',
            'tipo' => 'alfa',
            'required' => true),
        'valor_total_cobranca' => array(//Valor Total: 3/16T14
            'tamanho' => 12,
            'default' => '',
            'tipo' => 'decimal',
            'precision' => 2,
            'required' => true),
        'qtd_titulos_cobranca' => array(//Quantidade Total: 17/22T6
            'tamanho' => 6,
            'default' => '1',
            'tipo' => 'int',
            'required' => true),
        'ValTotLiquidacaoC06' => array(//Valor Total Liquidacao: 23/36T14
            'tamanho' => 12,
            'default' => '',
            'tipo' => 'decimal',
            'precision' => 2,
            'required' => true),
        'QtdLiquidacaoC06' => array(//Quantidade Total Liquidacoes: 37/42T6
            'tamanho' => 6,
            'default' => '',
            'tipo' => 'int',
            'required' => true),
        'filler1' => array(//Uso do Banco: 43/394T352
            'tamanho' => 352,
            'default' => '',
            'tipo' => 'alfa',
            'required' => true),
        'numero_sequencial_registro'=>array(//Sequencial: 395/400T6
            'tamanho'=>6,
            'default'=>'',
            'tipo'=>'int',
            'required'=>true)
    );
}
