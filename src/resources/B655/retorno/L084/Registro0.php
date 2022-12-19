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
namespace CnabPHP\resources\B655\retorno\L084;
use CnabPHP\resources\generico\retorno\L030\Generico0;
use CnabPHP\RetornoAbstract;
use Exception;

class Registro0 extends Generico0
{
	protected $meta = array(
		'codigo_banco'=>array(
			'tamanho'=>3,
			'default'=>'655',
			'tipo'=>'int',
			'required'=>true),
		'codigo_lote'=>array(
			'tamanho'=>4,
			'default'=>'0000',
			'tipo'=>'int',
			'required'=>true),
		'tipo_registro'=>array(
			'tamanho'=>1,
			'default'=>'1',
			'tipo'=>'int',
			'required'=>true),
		'filler1'=>array(
			'tamanho'=>9,
			'default'=>' ',
			'tipo'=>'alfa',
			'required'=>true),
		'tipo_inscricao'=>array(
			'tamanho'=>1,
			'default'=>'',
			'tipo'=>'int',
			'required'=>true),
		'numero_inscricao'=>array(
			'tamanho'=>14,
			'default'=>'',
			'tipo'=>'int',
			'required'=>true),
		'codigo_beneficiario'=>array(
			'tamanho'=>20,
			'default'=>'0',
			'tipo'=>'alfa',
			'required'=>true),
		'codigo_beneficiario2'=>array(
			'tamanho'=>20,
			'default'=>'',
			'tipo'=>'alfa',
			'required'=>true),
		'nome_empresa'=>array(
			'tamanho'=>30,
			'default'=>'',
			'tipo'=>'alfa',
			'required'=>true),
		'nome_banco'=>array(
			'tamanho'=>30,
			'default'=>'BANCO ABC DO BRASIL SA',
			'tipo'=>'alfa',
			'required'=>true),
		'filler3'=>array(
			'tamanho'=>11,
			'default'=>' ',
			'tipo'=>'alfa',
			'required'=>true),
		'data_saldo_inicial'=>array(
			'tamanho'=>8,
			'default'=>'',
			'tipo'=>'date',
			'required'=>true),
		'valor_saldo_inicial'=>array(
			'tamanho'=>16,
			'default'=>'',
			'tipo'=>'decimal',
			'precision'=>2,
			'required'=>true),
		'situacao_saldo_inicial'=>array(
			'tamanho'=>1,
			'default'=>' ',
			'tipo'=>'alfa',
			'required'=>true),
		'status_saldo_inicial'=>array(
			'tamanho'=>1,
			'default'=>' ',
			'tipo'=>'alfa',
			'required'=>true),
		'filler4'=>array(
			'tamanho'=>70,
			'default'=>' ',
			'tipo'=>'alfa',
			'required'=>true),
	);
	public function __construct($linhaTxt)
	{
		parent::__construct($linhaTxt);
		RetornoAbstract::$linesCounter++;
		$this->inserirDetalhe(RetornoAbstract::$lines[RetornoAbstract::$linesCounter]);
	}
	/*
	* método inserirDetalhe()
	* Recebe os parametros
	* @$data = um array contendo os dados nessesarios para o arquvio
	*/
	public function inserirDetalhe()
    {
        while (RetornoAbstract::$linesCounter < (count(RetornoAbstract::$lines) - 4))
        {
            $class = 'CnabPHP\resources\\B' . RetornoAbstract::$banco . '\retorno\\' . RetornoAbstract::$layout . '\Registro1';
            $lote = new $class(RetornoAbstract::$lines[RetornoAbstract::$linesCounter]);
            $class = 'CnabPHP\resources\\B' . RetornoAbstract::$banco . '\retorno\\' . RetornoAbstract::$layout . '\Registro5';
            $trailler = new $class(RetornoAbstract::$lines[RetornoAbstract::$linesCounter]);
            $this->children[] = $lote;
            $this->children[] = $trailler;
        }
    }
}