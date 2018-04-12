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
use CnabPHP\resources\generico\remessa\cnab240\Generico5;
use CnabPHP\Exception;

class Registro5 extends Generico5
{
	protected $meta = array(
		'codigo_banco'=>array(				//01.5 -- 1-3
			'tamanho'=>3,
			'default'=>'756',
			'tipo'=>'int',
			'required'=>true),
		'codigo_lote'=>array(				//02.5 -- 4-7
			'tamanho'=>4,
			'default'=>1,
			'tipo'=>'int',
			'required'=>true),
		'tipo_registro'=>array(				//03.5 -- 8
			'tamanho'=>1,
			'default'=>'5',
			'tipo'=>'int',
			'required'=>true),
		'filler1'=>array(					//04.5 -- 9-17
			'tamanho'=>9,
			'default'=>' ',
			'tipo'=>'alfa',
			'required'=>true),
		'qtd_registros'=>array(				//05.5 -- 18-23
			'tamanho'=>6,
			'default'=>' ',
			'tipo'=>'int',
			'required'=>true),
		'qtd_titulos_simples'=>array(		//06.5 -- 24-29
			'tamanho'=>6,
			'default'=>'0',
			'tipo'=>'int',
			'required'=>true),
		'vrl_titulos_simples'=>array(		//07.5 -- 30-46
			'tamanho'=>15,
			'default'=>'0',
			'tipo'=>'decimal',
			'precision'=>'2',
			'required'=>true),
		'qtd_titulos_vinculada'=>array(		//08.5 -- 47-52
			'tamanho'=>6,
			'default'=>'0',
			'tipo'=>'int',
			'required'=>true),
		'vlr_titulos_vinculada'=>array(		//09.5 -- 53-69
			'tamanho'=>15,
			'default'=>'0',
			'tipo'=>'decimal',
			'precision'=>'2',
			'required'=>true),
		'qtd_titulos_caucionada'=>array(	//10.5 -- 70-75
			'tamanho'=>6,
			'default'=>'0',
			'tipo'=>'int',
			'required'=>true),
		'vlr_titulos_caucionada'=>array(	//11.5 -- 76-92
			'tamanho'=>15,
			'default'=>'0',
			'tipo'=>'decimal',
			'precision'=>'2',
			'required'=>true),
		'qtd_titulos_descontada'=>array(	//12.5 -- 93-98
			'tamanho'=>6,
			'default'=>'0',
			'tipo'=>'int',
			'required'=>true),
		'vlr_titulos_descontada'=>array(	//13.5 -- 99-115
			'tamanho'=>15,
			'default'=>'0',
			'tipo'=>'decimal',
			'precision'=>'2',
			'required'=>true),
		'filler2'=>array(					//14.5 -- 116-123
			'tamanho'=>8,
			'default'=>' ',
			'tipo'=>'alfa',
			'required'=>true),
		'filler3'=>array(           		//15.5 -- 124-240
			'tamanho'=>117,
			'default'=>' ',
			'tipo'=>'alfa',
			'required'=>true),
	);
}
?>
