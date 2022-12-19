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
namespace CnabPHP\resources\B655\retorno\L001;
use CnabPHP\resources\generico\retorno\L030\Generico3;
use CnabPHP\RetornoAbstract;
use CnabPHP\Exception;

class Registro3T extends Generico3
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
		'filler1'=>array(               // 6.3P
			'tamanho'=>1,
			'default'=>' ',
			'tipo'=>'alfa',
			'required'=>true),
		'codigo_movimento'=>array(      // 7.3P
			'tamanho'=>2,
			'default'=>'01', // entrada de titulo
			'tipo'=>'int',
			'required'=>true),
			
		// - ------------------ até aqui é igual para todo registro tipo 3
		"agencia" => array(
			'tamanho'=>5,
			'default'=>'',
			'tipo'=>'int',
			'required'=>true),
		"agencia_dv" => array(
			'tamanho'=>1,
			'default'=>'',
			'tipo'=>'int',
			'required'=>true),
		"conta" => array(
			'tamanho'=>12,
			'default'=>'',
			'tipo'=>'int',
			'required'=>true),
		"conta_dv" => array(
			'tamanho'=>1,
			'default'=>'',
			'tipo'=>'int',
			'required'=>true),
		"agencia_conta_dv" => array(
			'tamanho'=>1,
			'default'=>'',
			'tipo'=>'int',
			'required'=>true),
		'filler1.1'=>array(               //13.3T
			'tamanho'=>10,
			'default'=>'0',
			'tipo'=>'int',
			'required'=>true),
		'nosso_numero'=>array(  //14.3T
			'tamanho'=>10,
			'default'=>'',
			'tipo'=>'int',
			'required'=>true),
		'codigo_carteira'=>array(      //15.3T
			'tamanho'=>1,
			'default'=>'1',
			'tipo'=>'int',
			'required'=>true),
		'num_documento_cobranca'=>array(            //16.3T   Campo de preenchimento obrigatório; preencher com Seu Número de controle do título
			'tamanho'=>10,
			'default'=>' ',      // este espaço foi colocado para passa a validação para os seters do generico
			'tipo'=>'alfa',
			'required'=>true),
		'filler2'=>array(      //17.3T
			'tamanho'=>5,
			'default'=>' ',
			'tipo'=>'alfa',
			'required'=>true),
		'data_vencimento'=>array(            //20.3
			'tamanho'=>8,
			'default'=>'',
			'tipo'=>'date',
			'required'=>true),
		'valor'=>array(                 //21.3P
			'tamanho'=>13,
			'default'=>'',
			'tipo'=>'decimal',
			'precision'=>2,
			'required'=>true),
		'banco_cobrador'=>array(    //22.3P
			'tamanho'=>3,
			'default'=>'0',
			'tipo'=>'int',
			'required'=>true),
		'agencia_cobradora'=>array(    //22.3P
			'tamanho'=>5,
			'default'=>'0',
			'tipo'=>'int',
			'required'=>true),
		'agencia_cobradora_dv'=>array(    //23.3P
			'tamanho'=>1,
			'default'=>'0',
			'tipo'=>'int', // originalmente no manual esta alfa mas foi mudado para int para funcionar
			'required'=>true),
		'seu_numero'=>array(    //24.3P
			'tamanho'=>25,
			'default'=>'2',
			'tipo'=>'int',
			'required'=>true),
		'codigo_moeda'=>array(            //25.3P
			'tamanho'=>2,
			'default'=>'0',
			'tipo'=>'int',
			'required'=>true),
		'tipo_inscricao_sacado'=>array(            //26.3P
			'tamanho'=>1,
			'default'=>'',
			'tipo'=>'int',
			'required'=>true),
		'numero_inscricao_sacado'=>array(            //27.3P
			'tamanho'=>15,
			'default'=>'',
			'tipo'=>'int',
			'required'=>true),
		'nome_sacado'=>array(            //28.3P
			'tamanho'=>40,
			'default'=>'',
			'tipo'=>'alfa',
			'required'=>true),
		'numero_contrato'=>array(            //29.3P
			'tamanho'=>10,
			'default'=>' ',
			'tipo'=>'alfa',
			'required'=>true),
		'valor_custas'=>array(            //30.3P
			'tamanho'=>13,
			'default'=>'',
			'tipo'=>'decimal',
			'precision'=>2,
			'required'=>true),
		'motivo_ocorrencia'=>array(            //31.3P
			'tamanho'=>10,
			'default'=>' ',
			'tipo'=>'alfa',
			'required'=>true),
		'filler5'=>array(            //32.3P
			'tamanho'=>17,
			'default'=>' ',
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
