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
namespace CnabPHP\resources\B001\remessa\cnab240;
use CnabPHP\RegistroRemAbstract;
use CnabPHP\RemessaAbstract;
use CnabPHP\resources\generico\remessa\cnab240\Generico1;
use Exception;

class Registro1 extends Generico1
{
	protected $meta = array(
		'codigo_banco'=>array( //01.1
			'tamanho'=>3,
			'default'=>'001',
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
			'default'=>'R',
			'tipo'=>'alfa',
			'required'=>true),
		'tipo_servico'=>array(//05.1
			'tamanho'=>2,
			'default'=>'01',
			'tipo'=>'int',
			'required'=>true),
		'filler1'=>array(//06.1
			'tamanho'=>2,
			'default'=>' ',
			'tipo'=>'alfa',
			'required'=>true),
		'versa_layout'=>array( //07.1
			'tamanho'=>3,
			'default'=>'000',
			'tipo'=>'int',
			'required'=>true),
		'filler2'=>array( //08.1
			'tamanho'=>1,
			'default'=>' ',
			'tipo'=>'alfa',
			'required'=>true),
		'tipo_inscricao'=>array(//09.1
			'tamanho'=>1,
			'default'=>'0',
			'tipo'=>'int',
			'required'=>true),
		'numero_inscricao'=>array( //10.1
			'tamanho'=>15,
			'default'=>'',
			'tipo'=>'int',
			'required'=>true),
		'convenio'=>array(//11.1
			'tamanho'=>9,
			'default'=>'0',
			'tipo'=>'int',
			'required'=>true),
		'cobranca'=>array(//11.1
			'tamanho'=>4,
			'default'=>'0014',
			'tipo'=>'int',
			'required'=>true),
		'carteira'=>array(//11.1
			'tamanho'=>2,
			'default'=>'0',
			'tipo'=>'int',
			'required'=>true),
		'variacao'=>array(//11.1
			'tamanho'=>3,
			'default'=>'000',
			'tipo'=>'int',
			'required'=>true),
		'situacao_arquivo'=>array(//11.1
			'tamanho'=>2,
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
			'tipo'=>'alfa',
			'required'=>true),
		'conta'=>array(//14.1
			'tamanho'=>12,
			'default'=>'',
			'tipo'=>'int',
			'required'=>true),
		'conta_dv'=>array(//15.1
			'tamanho'=>1,
			'default'=>'',
			'tipo'=>'alfa',
			'required'=>true),
		'filler3'=>array(//16.1
			'tamanho'=>1,
			'default'=>'0',
			'tipo'=>'alfa',
			'required'=>true),
		'nome_empresa'=>array(//17.1
			'tamanho'=>30,
			'default'=>'',
			'tipo'=>'alfa',
			'required'=>true),
		'mensagem_fixa1'=>array(//18.1 mensagems 1 e 2 : somente use para mensagens que serao impressas de forma identica em todos os boletos do lote
			'tamanho'=>40,
			'default'=>' ',
			'tipo'=>'alfa',
			'required'=>true),
		'mensagem_fixa2'=>array(// 19.1 mensagems 1 e 2 : somente use para mensagens que serao impressas de forma identica em todos os boletos do lote
			'tamanho'=>40,
			'default'=>' ',
			'tipo'=>'alfa',
			'required'=>true),
		'numero_remessa'=>array( //20.1
			'tamanho'=>8,
			'default'=>'0',
			'tipo'=>'int',
			'required'=>true),
		'data_gravacao'=>array(//21.1
			'tamanho'=>8,
			'default'=>'',// nao informar a data na instanciação - gerada dinamicamente
			'tipo'=>'date',
			'required'=>true),
		'filler4'=>array(//22.1
			'tamanho'=>8,
			'default'=>'0',
			'tipo'=>'int',
			'required'=>true),
		'filler5'=>array(//23.1
			'tamanho'=>33,
			'default'=>' ',
			'tipo'=>'alfa',
			'required'=>true),
	);
	
	protected function set_carteira($value)
{
$this->data['carteira'] = RemessaAbstract::$entryData['carteira'];
}

protected function set_convenio($value)
{
$this->data['convenio'] = RemessaAbstract::$entryData['convenio'];
}
	protected function set_situacao_arquivo($value)
{
$this->data['situacao_arquivo'] = RemessaAbstract::$entryData['situacao_arquivo'];
}
	
	
}


