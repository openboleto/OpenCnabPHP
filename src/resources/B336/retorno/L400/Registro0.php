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
namespace CnabPHP\resources\B336\retorno\L400;
use CnabPHP\resources\generico\retorno\L400\Generico0;
use CnabPHP\RetornoAbstract;

class Registro0 extends Generico0
{
    public $trailler;
    protected $meta = array(
        'tipo_registro'=>array(   //Tipo de Registro: 1/1T1
            'tamanho'=>1,
            'default'=>'0',
            'tipo'=>'int',
            'required'=>true),
        'operacao'=>array(        // Código Retorno: 2/1T2
            'tamanho'=>1,
            'default'=>'2',
            'tipo'=>'int',
            'required'=>true),
        'literal_retorno'=>array( //Literal Retorno: 3/9T7
            'tamanho'=>7,
            'default'=>'RETORNO',
            'tipo'=>'alfa',
            'required'=>true),
        'tipo_servico'=>array(    //Código Serviço: 10/11T2
            'tamanho'=>2,
            'default'=>'01',
            'tipo'=>'int',
            'required'=>true),
        'literal_servico'=>array( //Literal Serviço: 12/19T8
            'tamanho'=>8,
            'default'=>'COBRANCA',
            'tipo'=>'alfa',
            'required'=>true),
        'filler1'=>array(         //Uso do Banco: 20/21T2
            'tamanho'=>2,
            'default'=>' ',
            'tipo'=>'alfa',
            'required'=>true),
        'contador_arquivo'=>array(//Contador Arquivo: 22/26T5
            'tamanho'=>5,
            'default'=>'00000',
            'tipo'=>'int',
            'required'=>true),
        'codigo_empresa'=>array(  //Código da Empresa: 27/38T12
            'tamanho'=>12,
            'default'=>'',
            'tipo'=>'alfa',
            'required'=>true),
        'codigo_cedente'=>array(  //Código do Cedente: 39/50T12
            'tamanho'=>12,
            'default'=>'',
            'tipo'=>'alfa',
            'required'=>true),
        'filler2'=>array(         //Uso do Banco: 51/76T26
            'tamanho'=>26,
            'default'=>' ',
            'tipo'=>'alfa',
            'required'=>true),
        'codigo_banco'=>array(    //Código Banco: 77/79T3
            'tamanho'=>3,
            'default'=>'336',
            'tipo'=>'int',
            'required'=>true),
        'nome_banco'=>array(      //Nome do Banco: 80/104T25
            'tamanho'=>25,
            'default'=>'C6 BANK',
            'tipo'=>'alfa',
            'required'=>true),
        'filler3'=>array(         //Uso do Banco: 105/108T4
            'tamanho'=>4,
            'default'=>' ',
            'tipo'=>'alfa',
            'required'=>true),
        'conta_cobranca'=>array(  //Conta Cobrança Direta: 109/120T12
            'tamanho'=>12,
            'default'=>' ',
            'tipo'=>'alfa',
            'required'=>true),
        'filler4'=>array(         //Uso do Banco: 121/124T4
            'tamanho'=>4,
            'default'=>' ',
            'tipo'=>'alfa',
            'required'=>true),
        'data_gravacao'=>array(   //Data Movimento: 125/130T6
            'tamanho'=>6,
            'default'=>'',
            'tipo'=>'date',
            'required'=>true),
        'filler5'=>array(         //Uso do Banco: 131/394T264
            'tamanho'=>264,
            'default'=>' ',
            'tipo'=>'alfa',
            'required'=>true),
        'numero_sequencial_registro'=>array(//Sequencial: 395/400T6
            'tamanho'=>6,
            'default'=>'',
            'tipo'=>'int',
            'required'=>true),
    );
    public function __construct($linhaTxt)
    {
        parent::__construct($linhaTxt);
        RetornoAbstract::$linesCounter++;
        $this->inserirDetalhe();
    }
    public function inserirDetalhe()
    {
        while(RetornoAbstract::$linesCounter < (count(RetornoAbstract::$lines)-2))
        {
            $class = 'CnabPHP\resources\\B'.RetornoAbstract::$banco.'\retorno\\'.RetornoAbstract::$layout.'\Registro1';
            $this->children[] = new $class(RetornoAbstract::$lines[RetornoAbstract::$linesCounter]);
        }
        //RetornoAbstract::$linesCounter--;
    }
}
