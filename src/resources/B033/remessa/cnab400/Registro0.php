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

namespace CnabPHP\resources\b033\remessa\cnab400;

use CnabPHP\resources\generico\remessa\cnab400\Generico0;
use CnabPHP\RemessaAbstract;

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
            'tamanho'=>15,
            'default'=>'COBRANCA',
            'tipo'=>'alfa',
            'required'=>true),
        'codigo_transmissao'=>array(
            'tamanho'=>20,
            'default'=>'',
            'tipo'=>'alfa',
            'required'=>true),
        'nome_empresa'=>array(
            'tamanho'=>30,
            'default'=>' ',
            'tipo'=>'alfa',
            'required'=>true),
        'codigo_banco'=>array(
            'tamanho'=>3,
            'default'=>'033',
            'tipo'=>'int',
            'required'=>true),
        'nome_banco'=>array(
            'tamanho'=>15,
            'default'=>'SANTANDER',
            'tipo'=>'alfa',
            'required'=>true),
        'data_gravacao'=>array(
            'tamanho'=>6,
            'default'=>'',// nao informar a data na instanciação - gerada dinamicamente
            'tipo'=>'date',
            'required'=>true),
        'filler1'=>array(
            'tamanho'=>16,
            'default'=>'0',
            'tipo'=>'int',
            'required'=>true),
        'mensagem_1'=>array(
            'tamanho'=>47,
            'default'=>'',
            'tipo'=>'alfa',
            'required'=>false),
        'mensagem_2'=>array(
            'tamanho'=>47,
            'default'=>'',
            'tipo'=>'alfa',
            'required'=>false),
        'mensagem_3'=>array(
            'tamanho'=>47,
            'default'=>'',
            'tipo'=>'alfa',
            'required'=>false),
        'mensagem_4'=>array(
            'tamanho'=>47,
            'default'=>'',
            'tipo'=>'alfa',
            'required'=>false),
        'mensagem_5'=>array(
            'tamanho'=>47,
            'default'=>'',
            'tipo'=>'alfa',
            'required'=>false),
        'mensagem_6'=>array(
            'tamanho'=>40,
            'default'=>'',
            'tipo'=>'alfa',
            'required'=>false),
        'versao'=>array(
            'tamanho'=>3,
            'default'=>'0',
            'tipo'=>'int',
            'required'=>true),
        'numero_sequencial'=>array(
            'tamanho'=>6,
            'default'=>'1',
            'tipo'=>'int',
            'required'=>true),
        );

    public function set_codigo_transmissao()
    {
        $codigo = RemessaAbstract::$entryData['agencia']
            . "0"
            . RemessaAbstract::$entryData['codigo_beneficiario']
            . "0"
            . substr(RemessaAbstract::$entryData['conta'], 0, 7);

        $this->data['codigo_transmissao'] = $codigo;
    }

    public function get_codigo_transmissao()
    {
        return $this->data['codigo_transmissao'];
    }
}

?>
