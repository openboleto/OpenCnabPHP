<?php
/*
 * CnabPHP - GeraÃ§Ã£o de arquivos de remessa e retorno em PHP
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

namespace CnabPHP\resources\B756\remessa\cnab400;

use CnabPHP\resources\generico\remessa\cnab400\Generico0;

class Registro0 extends Generico0
{
        protected $meta = array(
        'tipo_registro'=>array(
            'tamanho'=>1,
            'default'=>'0',
            'tipo'=>'int',
            'required'=>true),
        'operacao'=>array(
            'tamanho'=>1,
            'default'=>'1',
            'tipo'=>'int',
            'required'=>true),
        'literal_remessa'=>array(
            'tamanho'=>7,
            'default'=>'remessa',
            'tipo'=>'alfa',
            'required'=>true),
        'tipo_servico'=>array(
            'tamanho'=>2,
            'default'=>'01',
            'tipo'=>'int',
            'required'=>true),
        'literal_servico'=>array(
            'tamanho'=>8,
            'default'=>'COBRANÇA',
            'tipo'=>'alfa2',
            'required'=>true),
        'filler0'=>array(
            'tamanho'=>7,
            'default'=>' ',
            'tipo'=>'alfa',
            'required'=>true),
        'agencia'=>array(
            'tamanho'=>4,
            'default'=>'',
            'tipo'=>'int',
            'required'=>true),
        'agencia_dv'=>array(
            'tamanho'=>1,
            'default'=>'',
            'tipo'=>'int',
            'required'=>true),
        'codigo_beneficiario'=>array(
            'tamanho'=>8,
            'default'=>'',
            'tipo'=>'int',
            'required'=>true),
        'codigo_beneficiario_dv'=>array(
            'tamanho'=>1,
            'default'=>'',
            'tipo'=>'alfa',
            'required'=>true),
        'numero_convenio'=>array(
            'tamanho'=>6,
            'default'=>' ',
            'tipo'=>'alfa',
            'required'=>true),
        'nome_empresa'=>array(
            'tamanho'=>30,
            'default'=>' ',
            'tipo'=>'alfa',
            'required'=>true),
        'codigo_banco'=>array(
            'tamanho'=>3,
            'default'=>'756',
            'tipo'=>'int',
            'required'=>true),
        'nome_banco'=>array(
            'tamanho'=>15,
            'default'=>'BANCOOBCED',
            'tipo'=>'alfa',
            'required'=>true),
        'data_gravacao'=>array(
            'tamanho'=>6,
            'default'=>'',// nao informar a data na instanciaÃ§Ã£o - gerada dinamicamente
            'tipo'=>'date',
            'required'=>true),
        'numero_sequencial_arquivo'=>array(
            'tamanho'=>7,
            'default'=>'1',
            'tipo'=>'int',
            'required'=>true),
        'filler3'=>array(
            'tamanho'=>287,
            'default'=>' ',
            'tipo'=>'alfa',
            'required'=>true),
        'numero_sequencial'=>array(
            'tamanho'=>6,
            'default'=>'1',
            'tipo'=>'int',
            'required'=>true),
        );
}
