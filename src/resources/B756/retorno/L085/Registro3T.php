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
namespace CnabPHP\resources\B756\retorno\L085;
use CnabPHP\resources\generico\retorno\L040\Generico3;
use CnabPHP\RetornoAbstract;
use CnabPHP\Exception;

class Registro3T extends Generico3
{
    protected $meta = array(
        'codigo_banco'=>array(          // 1.3T
            'tamanho'=>3,
            'default'=>'756',
            'tipo'=>'int',
            'required'=>true),
        'codigo_lote'=>array(           // 2.3T
            'tamanho'=>4,
            'default'=>1,
            'tipo'=>'int',
            'required'=>true),
        'tipo_registro'=>array(         // 3.3T
            'tamanho'=>1,
            'default'=>'0',
            'tipo'=>'int',
            'required'=>true),
        'numero_registro'=>array(       // 4.3T
            'tamanho'=>5,
            'default'=>'0',
            'tipo'=>'int',
            'required'=>true),
        'seguimento'=>array(            // 5.3T
            'tamanho'=>1,
            'default'=>'T',
            'tipo'=>'alfa',
            'required'=>true),
        'filler1'=>array(               // 6.3T
            'tamanho'=>1,
            'default'=>' ',
            'tipo'=>'alfa',
            'required'=>true),
        'codigo_movimento'=>array(      // 7.3T
            'tamanho'=>2,
            'default'=>'01', // entrada de titulo
            'tipo'=>'int',
            'required'=>true),

        // - ------------------ até aqui é igual para todo registro tipo 3

        'agencia'=>array(               // 8.3T
            'tamanho'=>5,
            'default'=>'',
            'tipo'=>'int',
            'required'=>true),
        'agencia_dv'=>array(            // 9.3T
            'tamanho'=>1,
            'default'=>'',
            'tipo'=>'alfa',
            'required'=>true),
        'conta'=>array(       //10.3T
            'tamanho'=>12,
            'default'=>'0',
            'tipo'=>'int',
            'required'=>true),
        'conta_dv'=>array(               // 11.3T
            'tamanho'=>1,
            'default'=>'0',
            'tipo'=>'int',
            'required'=>true),
        'conta_agencia_dv'=>array(               // 12.3T
            'tamanho'=>1,
            'default'=>'0',
            'tipo'=>'int',
            'required'=>true),
        'nosso_numero'=>array(               //13.3T
            'tamanho'=>9,
            'default'=>'0',
            'tipo'=>'alfa',
            'required'=>true),
        'filler'=>array(               //13.3T
            'tamanho'=>1,
            'default'=>'0',
            'tipo'=>'alfa',
            'required'=>true),
        'parcela'=>array(               //13.3T
            'tamanho'=>2,
            'default'=>'0',
            'tipo'=>'alfa',
            'required'=>true),
        'modalidade'=>array(               //13.3T
            'tamanho'=>2,
            'default'=>'0',
            'tipo'=>'alfa',
            'required'=>true),
        'tipo_formulario'=>array(               //13.3T
            'tamanho'=>1,
            'default'=>'0',
            'tipo'=>'alfa',
            'required'=>true),
        'filler2'=>array(               //13.3T
            'tamanho'=>5,
            'default'=>'0',
            'tipo'=>'alfa',
            'required'=>true),
        'carteira'=>array(               //14.3T
            'tamanho'=>1,
            'default'=>' ',
            'tipo'=>'int',
            'required'=>true),
        'seu_numero'=>array(      //15.3T
            'tamanho'=>15,
            'default'=>'0',
            'tipo'=>'alfa',
            'required'=>true),
        'vencimento'=>array(  //16.3T
            'tamanho'=>8,
            'default'=>'',
            'tipo'=>'date',
            'required'=>true),
        'valor'=>array(  //17.3T
            'tamanho'=>13,
            'default'=>'0',
            'tipo'=>'decimal',
            'precision'=>2,
            'required'=>true),
        'cod_banco_receb'=>array(   //18.3T
            'tamanho'=>3,
            'default'=>'1',
            'tipo'=>'int',
            'required'=>true),
        'agencia_recebedora'=>array(      //19.3T
            'tamanho'=>5,
            'default'=>'0',
            'tipo'=>'int',
            'required'=>true),
        'dv_agencia_receb'=>array(        //20.3T
            'tamanho'=>1,
            'default'=>' ',
            'tipo'=>'alfa',
            'required'=>true),
        'filler3'=>array(          // 21.3
            'tamanho'=>25,
            'default'=>'',
            'tipo'=>'alfa',
            'required'=>false),
        'cod_moeda'=>array(        //22.3T
            'tamanho'=>2,
            'default'=>'0',
            'tipo'=>'int',
            'required'=>false),
        'tipo_inscricao'=>array(            //23.3T
            'tamanho'=>1,
            'default'=>' ',
            'tipo'=>'int',
            'required'=>true),
        'numero_inscricao'=>array(    //24.3T
            'tamanho'=>15,
            'default'=>'0',
            'tipo'=>'int',
            'required'=>true),
        'nome_pagador'=>array(            //25.3T
            'tamanho'=>40,
            'default'=>'',
            'tipo'=>'alfa',
            'required'=>true),
        'filler4'=>array(            //26.3T
            'tamanho'=>10,
            'default'=>'',
            'tipo'=>'alfa',
            'required'=>true),
        'vlr_tarifa'=>array(            //27.3T
            'tamanho'=>13,
            'default'=>'',
            'tipo'=>'decimal',
            'precision'=>2,
            'required'=>true),
        'codigo_ocorrencia'=>array(            //28.3T
            'tamanho'=>10,
            'default'=>'0',
            'tipo'=>'alfa',
            'required'=>true),
        'filler5'=>array(            //29.3T
            'tamanho'=>17,
            'default'=>'0',
            'tipo'=>'alfa',
            'required'=>true
        ),
    );

	public function __construct($data = null)
	{
		if(empty($this->data))parent::__construct($data);
		$this->inserirDetalhe($data);
	}
	public function inserirDetalhe($data)
	{
		RetornoAbstract::$linesCounter++;
		$class = 'CnabPHP\resources\\B'.RetornoAbstract::$banco.'\retorno\\'.RetornoAbstract::$layout.'\Registro3U';
		$this->children[] = new $class(RetornoAbstract::$lines[RetornoAbstract::$linesCounter]);
		if(substr(RetornoAbstract::$lines[RetornoAbstract::$linesCounter+1],14,1)=="Y"){
			if(substr(RetornoAbstract::$lines[RetornoAbstract::$linesCounter+1],18,2)=="50")
			{
				//RetornoAbstract::$linesCounter++;
				//$class = 'CnabPHP\resources\\'.RetornoAbstract::$banco.'\retorno\\'.RetornoAbstract::$layout.'\Registro3Y50';
				//$this->children[] = new $class(RetornoAbstract::$lines[RetornoAbstract::$linesCounter]);
			}elseif(substr(RetornoAbstract::$lines[RetornoAbstract::$linesCounter+1],18,2)=="08")
			{
				RetornoAbstract::$linesCounter++;
				$class = 'CnabPHP\resources\\B'.RetornoAbstract::$banco.'\retorno\\'.RetornoAbstract::$layout.'\Registro3Y08';
				$this->children[] = new $class(RetornoAbstract::$lines[RetornoAbstract::$linesCounter]);
			}
		}
	}

	public function get_data_ocorrencia(){
		$r3u = $this->R3U;
		return $r3u->___get('data_ocorrencia');
	}
	public function get_vlr_pago(){
		$r3u = $this->R3U;
		return $r3u->___get('vlr_pago');
	}
	public function get_codigo_movimento(){
		$r3u = $this->R3U;
		return $r3u->codigo_movimento;
	}
}
?>
