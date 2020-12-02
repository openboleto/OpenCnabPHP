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
namespace CnabPHP\resources\B104\retorno\L050;
use CnabPHP\resources\generico\retorno\L050\Generico1;
use CnabPHP\RetornoAbstract;

class Registro1 extends Generico1
{
	public $trailler;
	protected $meta = array(
		'codigo_banco'=>array(//01.1
			'tamanho'=>3,
			'default'=>'104',
			'tipo'=>'int',
			'required'=>true),
		'codigo_lote'=>array(//02.1
			'tamanho'=>4,
			'default'=>1,
			'tipo'=>'int',
			'required'=>true),
		'tipo_registro'=>array(//3.1
			'tamanho'=>1,
			'default'=>1,
			'tipo'=>'int',
			'required'=>true),
		'operacao'=>array(//04.1
			'tamanho'=>1,
			'default'=>'C', // C Compromisso de pagamento - D Compromisso de recebimento
			'tipo'=>'alfa',
			'required'=>true),
		'tipo_servico_transf'=>array(//05.1
			'tamanho'=>2,
			'default'=>'01',
			'tipo'=>'int',
			'required'=>true),
		'forma_lancamento'=>array(//06.1
			'tamanho'=>2,
			'default'=>'',
			'tipo'=>'int',
			'required'=>true),
		'versa_layout'=>array(//07.1
			'tamanho'=>3,
			'default'=>'041',
			'tipo'=>'int',
			'required'=>true),
		'filler2'=>array(//08.1
			'tamanho'=>1,
			'default'=>' ',
			'tipo'=>'alfa',
			'required'=>true),
		'tipo_inscricao'=>array(//09.1
			'tamanho'=>1,
			'default'=>'',
			'tipo'=>'int',
			'required'=>true),
		'numero_inscricao'=>array(//10.1
			'tamanho'=>14,
			'default'=>'',
			'tipo'=>'int',
			'required'=>true),
		'convenio_caixa'=>array(//11.1
			'tamanho'=>6,
			'default'=>'',
			'tipo'=>'int',
			'required'=>true),
		'tipo_compromisso'=>array(//11.1
			'tamanho'=>2,
			'default'=>'', //01 Pagamento a Fornecedor - 02 Pagamento de Salarios - 03 Autopagamento - 06 Salario Ampliacao de Base - 11 Debito em Conta			
			'tipo'=>'int',
			'required'=>true),
		'codigo_compromisso'=>array(//11.1
			'tamanho'=>4,
			'default'=>'0',
			'tipo'=>'int',
			'required'=>true),
		'param_transmissao'=>array(//11.1
			'tamanho'=>2,
			'default'=>'0',
			'tipo'=>'int',
			'required'=>true),
		'filler3'=>array(//11.1
			'tamanho'=>6,
			'default'=>' ',
			'tipo'=>'alfa',
			'required'=>true),
		'agencia'=>array(//12.1
			'tamanho'=>5,
			'default'=>'',
			'tipo'=>'int',
			'required'=>true),
		'agencia_dv'=>array(//13.1
			'tamanho'=>1,
			'default'=>'',
			'tipo'=>'int',
			'required'=>true),
		'conta' => array(//14.1
			'tamanho' => 12,
			'default' => '',
			'tipo' => 'int',
			'required' => true),
		'conta_dv' => array(//15.1
			'tamanho' => 1,
			'default' => '',
			'tipo' => 'alfa',
			'required' => true),
		'filler4' => array(//16.1
			'tamanho' => 1,
			'default' => ' ',
			'tipo' => 'alfa',
			'required' => true),
		'nome_empresa'=>array(
			'tamanho'=>30,
			'default'=>'',
			'tipo'=>'alfa',
			'required'=>true),
		'mensagem_fixa1'=>array(// mensagems 1 e 2 : somente use para mensagens que serao impressas de forma identica em todos os boletos do lote
			'tamanho'=>40,
			'default'=>' ',
			'tipo'=>'alfa',
			'required'=>true),
		'logradouro' => array(//19.1
			'tamanho' => 30,
			'default' => '',
			'tipo' => 'alfa',
			'required' => true),
		'numero_endereco' => array(//20.1
			'tamanho' => 5,
			'default' => '',
			'tipo' => 'int',
			'required' => true),
		'complemento' => array(//21.1
			'tamanho' => 15,
			'default' => ' ',
			'tipo' => 'alfa',
			'required' => true),
		'cidade' => array(//22.1
			'tamanho' => 20,
			'default' => '',
			'tipo' => 'alfa',
			'required' => true),
		'cep' => array(//23.1
			'tamanho' => 5,
			'default' => '',
			'tipo' => 'int',
			'required' => true),
		'complemento_cep' => array(//24.1
			'tamanho' => 3,
			'default' => '',
			'tipo' => 'alfa',
			'required' => true),
		'estado' => array(//25.1
			'tamanho' => 2,
			'default' => '',
			'tipo' => 'alfa',
			'required' => true),
		'filler5' => array(//26.1
			'tamanho' => 8,
			'default' => ' ',
			'tipo' => 'alfa',
			'required' => true),
		'ocorrencias' => array(//27.1
			'tamanho' => 10,
			'default' => ' ',
			'tipo' => 'alfa',
			'required' => true),
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
			$class = 'CnabPHP\resources\\B'.RetornoAbstract::$banco.'\retorno\\'.RetornoAbstract::$layout.'\Registro3A';
			$this->children[] = new $class(RetornoAbstract::$lines[RetornoAbstract::$linesCounter]);
			
		}
		RetornoAbstract::$linesCounter--;
		$teste = array_pop($this->children);
	}

}

?>
