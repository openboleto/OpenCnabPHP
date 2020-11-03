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
namespace CnabPHP\resources\B001\retorno\L030;
use CnabPHP\resources\generico\retorno\L030\Generico1;
use CnabPHP\RetornoAbstract;

class Registro1 extends Generico1
{
	public $trailler;
	protected $meta = array(
		'codigo_banco'=>array(// 01.1
			'tamanho'=>3,
			'default'=>'001',
			'tipo'=>'int',
			'required'=>true),
		'codigo_lote'=>array(// 02.1
			'tamanho'=>4,
			'default'=>1,
			'tipo'=>'int',
			'required'=>true),
		'tipo_registro'=>array(// 03.1
			'tamanho'=>1,
			'default'=>1,
			'tipo'=>'int',
			'required'=>true),
		'operacao'=>array(// 04.1
			'tamanho'=>1,
			'default'=>'T',
			'tipo'=>'alfa',
			'required'=>true),
		'tipo_servico'=>array(// 05.1
			'tamanho'=>2,
			'default'=>'01',
			'tipo'=>'int',
			'required'=>true),
		'filler1'=>array(// 06.1
			'tamanho'=>2,
			'default'=>' ',
			'tipo'=>'alfa',
			'required'=>true),
		'versa_layout'=>array(
			'tamanho'=>3,
			'default'=>'042',
			'tipo'=>'int',
			'required'=>true),
		'filler2'=>array(
			'tamanho'=>1,
			'default'=>' ',
			'tipo'=>'alfa',
			'required'=>true),
		'tipo_inscricao'=>array(
			'tamanho'=>1,
			'default'=>'',
			'tipo'=>'int',
			'required'=>true),
		'numero_inscricao'=>array(
			'tamanho'=>15,
			'default'=>'',
			'tipo'=>'int',
			'required'=>true),
		'convenio'=>array(
			'tamanho'=>9,
			'default'=>'',
			'tipo'=>'int',
			'required'=>true),
		'cobranca_cedente'=>array(
			'tamanho'=>4,
			'default'=>'0014',
			'tipo'=>'int',
			'required'=>true),
		'carteira_cobranca'=>array(
			'tamanho'=>2,
			'default'=>'',
			'tipo'=>'int',
			'required'=>true),
		'carteira_cobranca_dv'=>array(
			'tamanho'=>3,
			'default'=>'',
			'tipo'=>'int',
			'required'=>true),
		'filler3'=>array(
			'tamanho'=>2,
			'default'=>' ',
			'tipo'=>'int',
			'required'=>true),
		'agencia'=>array(
			'tamanho'=>5,
			'default'=>'',
			'tipo'=>'int',
			'required'=>true),
		'agencia_dv'=>array(
			'tamanho'=>1,
			'default'=>'',
			'tipo'=>'alfa',
			'required'=>true),
		'conta'=>array(
			'tamanho'=>12,
			'default'=>'',
			'tipo'=>'int',
			'required'=>true),
		'conta_dv'=>array(
			'tamanho'=>1,
			'default'=>'',
			'tipo'=>'alfa',
			'required'=>true),
		'uso_caixa2'=>array(
			'tamanho'=>1,
			'default'=>'0',
			'tipo'=>'int',
			'required'=>true),
		'nome_empresa'=>array(
			'tamanho'=>30,
			'default'=>'',
			'tipo'=>'alfa',
			'required'=>true),
		'mensagem_fixa1'=>array(// mensagem 1: somente use para mensagens que serao impressas de forma identica em todos os boletos do lote
			'tamanho'=>40,
			'default'=>' ',
			'tipo'=>'alfa',
			'required'=>true),
		'mensagem_fixa2'=>array(// mensagem 1: somente use para mensagens que serao impressas de forma identica em todos os boletos do lote
			'tamanho'=>40,
			'default'=>' ',
			'tipo'=>'alfa',
			'required'=>true),
		'numero_remessa'=>array(
			'tamanho'=>8,
			'default'=>'',
			'tipo'=>'int',
			'required'=>true),
		'data_gravacao'=>array(
			'tamanho'=>8,
			'default'=>'',
			'tipo'=>'date',
			'required'=>true),
		'data_credito'=>array(
			'tamanho'=>8,
			'default'=>' ',
			'tipo'=>'date',
			'required'=>true),
		'filler4'=>array(
			'tamanho'=>33,
			'default'=>' ',
			'tipo'=>'alfa',
			'required'=>true)
	);
	public function __construct($linhaTxt)
	{
		parent::__construct($linhaTxt);
		$this->inserirDetalhe($linhaTxt);
	}
	/*
	* método inserirDetalhe()
	* Recebe os parametros
	* @$data = um array contendo os dados nessesarios para o arquvio
	*/
	public function inserirDetalhe($linhaTxt){
		while($this->data['codigo_lote']==abs(substr(RetornoAbstract::$lines[RetornoAbstract::$linesCounter],3,4)))
		{
			RetornoAbstract::$linesCounter++;
			$class = 'CnabPHP\resources\\B'.RetornoAbstract::$banco.'\retorno\\'.RetornoAbstract::$layout.'\Registro3T';
			$this->children[] = new $class(RetornoAbstract::$lines[RetornoAbstract::$linesCounter]);

		}
		RetornoAbstract::$linesCounter--;
		$teste = array_pop($this->children);
	}

}

?>
