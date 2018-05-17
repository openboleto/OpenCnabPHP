<?php
/*
* CnabPHP - Geração de arquivos de remessa e retorno em PHP
*
* LICENSE: The MIT License (MIT)
*
* Copyright (C) 2018 NextStep <http://github.com/nxstep-si>
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
namespace CnabPHP\resources\B756\remessa\cnab240;
use CnabPHP\resources\generico\remessa\cnab240\Generico1;

class Registro1 extends Generico1
{
	protected $meta = array(
		'codigo_banco'=>array(			//01.1 -- 1-3
			'tamanho'=>3,
			'default'=>'756',
			'tipo'=>'int',
			'required'=>true),
		'codigo_lote'=>array(			//02.1 -- 4-7
			'tamanho'=>4,
			'default'=>1,
			'tipo'=>'int',
			'required'=>true),
		'tipo_registro'=>array(			//03.1 -- 8
			'tamanho'=>1,
			'default'=>1,
			'tipo'=>'int',
			'required'=>true),
		'operacao'=>array(				//04.1 -- 9
			'tamanho'=>1,
			'default'=>'R',
			'tipo'=>'alfa',
			'required'=>true),
		'tipo_servico'=>array(			//05.1 -- 10-11
			'tamanho'=>2,
			'default'=>'01',
			'tipo'=>'int',
			'required'=>true),
		'filler1'=>array(				//06.1 -- 12-13
			'tamanho'=>2,
			'default'=>' ',
			'tipo'=>'alfa',
			'required'=>true),
		'versa_layout'=>array(			//07.1 -- 14-16
			'tamanho'=>3,
			'default'=>'040',//TODO Conferir layout
			'tipo'=>'int',
			'required'=>true),
		'filler2'=>array(				//08.1 -- 17
			'tamanho'=>1,
			'default'=>' ',
			'tipo'=>'alfa',
			'required'=>true),
		'tipo_inscricao'=>array(		//09.1 -- 18
			'tamanho'=>1,
			'default'=>'',
			'tipo'=>'int',
			'required'=>true),
		'numero_inscricao'=>array(		//10.1 -- 19-33
			'tamanho'=>15,
			'default'=>'',
			'tipo'=>'int',
			'required'=>true),
		'filler3'=>array( 				//11.1 -- 34-53
			'tamanho'=>20,
			'default'=>' ',
			'tipo'=>'alfa',
            'required'=>true),
		'agencia'=>array(				//12.1 -- 54-58
			'tamanho'=>5,
			'default'=>'',
			'tipo'=>'int',
			'required'=>true),
        'agencia_dv'=>array(			//13.1 -- 59
            'tamanho'=>1,
            'default'=>'',
            'tipo'=>'alfa',
            'required'=>true),
		'conta'=>array(					//14.1 -- 60-71
			'tamanho'=>12,
			'default'=>'',
			'tipo'=>'int',
			'required'=>true),
		'conta_dv'=>array(				//15.1 -- 72
			'tamanho'=>1,
			'default'=>'',
			'tipo'=>'alfa',
			'required'=>true),
		'filler4'=>array( 				//16.1 -- 73
			'tamanho'=>1,
			'default'=>' ',
			'tipo'=>'alfa',
			'required'=>true),
		'nome_empresa'=>array(			//17.1 -- 74-103
			'tamanho'=>30,
			'default'=>'',
			'tipo'=>'alfa',
			'required'=>true),
		'mensagem_1'=>array(			//18.1 -- 104-143
			'tamanho'=>40,
			'default'=>' ',//TODO Ainda não passa a mensagem para
			'tipo'=>'alfa',
			'required'=>true),
		'mensagem_2'=>array(			//19.1 -- 144-183
			'tamanho'=>40,
			'default'=>' ',//TODO Ainda não passa a mensagem para
			'tipo'=>'alfa',
			'required'=>true),
		'numero_remessa'=>array(		//20.1 -- 184-191
			'tamanho'=>8,
			'default'=>'',
			'tipo'=>'int',
			'required'=>true),
		'data_gravacao'=>array(			//21.1 -- 192-199
			'tamanho'=>8,
			'default'=>'',// nao informar - gerada dinamicamente
			'tipo'=>'date',
			'required'=>true),
		'data_credito'=>array(			//22.1 -- 200-207
			'tamanho'=>8,
			'default'=>'0',
			'tipo'=>'int',
			'required'=>true),
		'filler5'=>array(				//23.1 -- 208-240
			'tamanho'=>33,
			'default'=>' ',
			'tipo'=>'alfa',
			'required'=>true),
	);
}