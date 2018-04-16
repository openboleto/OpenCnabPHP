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
use CnabPHP\resources\generico\remessa\cnab240\Generico9;
use CnabPHP\Exception;

class Registro9 extends Generico9
{
	protected $meta = array(
		'codigo_banco'=>array(		//01.9 -- 1-3 
			'tamanho'=>3,
			'default'=>'756',
			'tipo'=>'int',
			'required'=>true),
		'codigo_lote'=>array(       //02.9 -- 4-7
			'tamanho'=>4,
			'default'=>'9999',
			'tipo'=>'int',
			'required'=>true),
		'tipo_registro'=>array(		//03.9 -- 8
			'tamanho'=>1,
			'default'=>'9',
			'tipo'=>'int',
			'required'=>true),
		'filler1'=>array(			//04.9 -- 9-17
			'tamanho'=>9,
			'default'=>' ',
			'tipo'=>'alfa',
			'required'=>true),
		'qtd_lotes'=>array(			//05.9 -- 18-23
			'tamanho'=>6,
			'default'=>'1',
			'tipo'=>'int',
			'required'=>true),
		'qtd_registros'=>array(		//06.9 -- 24-29
			'tamanho'=>6,
			'default'=>'0',
			'tipo'=>'int',
			'required'=>true),
		'qtd_contas'=>array(		//07.9 -- 30-35
			'tamanho'=>6,
			'default'=>'0',
			'tipo'=>'int',
			'required'=>true),
		'filler3'=>array(			//08.9 -- 36-240
			'tamanho'=>205,
			'default'=>' ',
			'tipo'=>'alfa',
			'required'=>true),
	);
}
?>
