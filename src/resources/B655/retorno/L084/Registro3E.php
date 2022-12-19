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
namespace CnabPHP\resources\B655\retorno\L084;
use CnabPHP\resources\generico\retorno\L030\Generico3;
use CnabPHP\RetornoAbstract;
use CnabPHP\Exception;

class Registro3E extends Generico3
{
	protected $meta = array(
		'codigo_banco'=>array(          // 1.3P
			'tamanho'=>3,
			'default'=>'104',
			'tipo'=>'int',
			'required'=>true),
		'codigo_lote'=>array(           // 2.3P
			'tamanho'=>4,
			'default'=>1,
			'tipo'=>'int',
			'required'=>true),
		'tipo_registro'=>array(         // 3.3P
			'tamanho'=>1,
			'default'=>'3',
			'tipo'=>'int',
			'required'=>true),
		'numero_registro'=>array(       // 4.3P
			'tamanho'=>5,
			'default'=>'0',
			'tipo'=>'int',
			'required'=>true),
		'seguimento'=>array(            // 5.3P
			'tamanho'=>1,
			'default'=>'T',
			'tipo'=>'alfa',
			'required'=>true),
		'filler1'=>array(               // 6.3E
			'tamanho'=>3,
			'default'=>' ',
			'tipo'=>'alfa',
			'required'=>true),
		// - ------------------ até aqui é igual para todo registro tipo 3
		"tipo_inscricao"=>array(
			'tamanho'=>1,
			'default'=>'',
			'tipo'=>'int',
			'required'=>true),
		"numero_inscricao"=>array(
			'tamanho'=>14,
			'default'=>'',
			'tipo'=>'int',
			'required'=>true),
		"codigo_beneficiario"=>array(
			'tamanho'=>20,
			'default'=>'0',
			'tipo'=>'alfa',
			'required'=>true),
		"agencia" => array(
			'tamanho'=>5,
			'default'=>'',
			'tipo'=>'int',
			'required'=>true),
		"agencia_dv" => array(
			'tamanho'=>1,
			'default'=>'',
			'tipo'=>'alfa',
			'required'=>true),
		"conta" => array(
			'tamanho'=>12,
			'default'=>'',
			'tipo'=>'int',
			'required'=>true),
		"conta_dv" => array(
			'tamanho'=>1,
			'default'=>'',
			'tipo'=>'alfa',
			'required'=>true),
		"agencia_conta_dv" => array(
			'tamanho'=>1,
			'default'=>'',
			'tipo'=>'alfa',
			'required'=>true),
		'nome_empresa'=>array(               //15.3E
			'tamanho'=>30,
			'default'=>'',
			'tipo'=>'alfa',
			'required'=>true),
		'filler1_1'=>array(               //16.3E
			'tamanho'=>6,
			'default'=>'',
			'tipo'=>'alfa',
			'required'=>true),
		'natureza_lancamento'=>array(  //17.3E
			'tamanho'=>3,
			'default'=>'',
			'tipo'=>'alfa',
			'required'=>true),
		'tipo_complemento_lancamento'=>array(      //18.3E
			'tamanho'=>2,
			'default'=>'',
			'tipo'=>'int',
			'required'=>true),
		'complemento_lancamento'=>array(            //19.3E
			'tamanho'=>20,
			'default'=>'',
			'tipo'=>'alfa',
			'required'=>true),
		'CPMF'=>array(      //20.3E
			'tamanho'=>1,
			'default'=>'',
			'tipo'=>'alfa',
			'required'=>true),
		'data_contabil'=>array(            //21.3E
			'tamanho'=>8,
			'default'=>'',
			'tipo'=>'date',
			'required'=>true),
		'data_lancamento'=>array(                 //22.3E
			'tamanho'=>8,
			'default'=>'',
			'tipo'=>'date',
			'required'=>true),
		'valor'=>array(    //23.3E
			'tamanho'=>16,
			'default'=>'',
			'tipo'=>'decimal',
			'precision'=>2,
			'required'=>true),
		'debito_credito'=>array(    //24.3E
			'tamanho'=>1,
			'default'=>'',
			'tipo'=>'alda',
			'required'=>true),
		'categoria_lancamento'=>array(    //25.3E
			'tamanho'=>3,
			'default'=>'',
			'tipo'=>'int',
			'required'=>true),
		'codigo_historico_banco'=>array(    //26.3E
			'tamanho'=>4,
			'default'=>'',
			'tipo'=>'alfa',
			'required'=>true),
		'descricao_lancamento'=>array(            //27.3E
			'tamanho'=>25,
			'default'=>'',
			'tipo'=>'alfa',
			'required'=>true),
		'numero_documento'=>array(            //28.3E
			'tamanho'=>39,
			'default'=>'',
			'tipo'=>'alfa',
			'required'=>true),
	);
	public function __construct($data = null)
	{
		parent::__construct($data);
		RetornoAbstract::$linesCounter++;
		$this->inserirDetalhe(RetornoAbstract::$lines[RetornoAbstract::$linesCounter]);
	}
	public function inserirDetalhe($data)
	{
		$class = 'CnabPHP\resources\\B'.RetornoAbstract::$banco.'\retorno\\'.RetornoAbstract::$layout.'\Registro3U';
		$this->addChild(new $class($data));
		RetornoAbstract::$linesCounter++;
	}    
}

?>
