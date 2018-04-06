<?php
/*
 * CnabPHP - Geraчуo de arquivos de remessa e retorno em PHP
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
namespace CnabPHP\resources\B341\retorno\L040;
use CnabPHP\resources\generico\retorno\L040\Generico5;
use CnabPHP\Exception;

class Registro5 extends Generico5
{
	protected $meta = array(
		'codigo_banco'=>array(      //01.5
			'tamanho'=>3,
			'default'=>'104',
			'tipo'=>'int',
			'required'=>true),
		'codigo_lote'=>array(       //02.5
			'tamanho'=>4,
			'default'=>1,
			'tipo'=>'int',
			'required'=>true),
		'tipo_registro'=>array(     //03.5
			'tamanho'=>1,
			'default'=>'5',
			'tipo'=>'int',
			'required'=>true),
		'filler1'=>array(          //04.5
			'tamanho'=>1,
			'default'=>' ',
			'tipo'=>'alfa',
			'required'=>true),
		'qtd_registros'=>array(      //05.5
			'tamanho'=>9,
			'default'=>' ',
			'tipo'=>'int',
			'required'=>true),
		'qtd_titulos_simples'=>array(           //06.5
			'tamanho'=>6,
			'default'=>'0',
			'tipo'=>'int',
			'required'=>true),
		'vrl_titulos_simples'=>array(      //07.5
			'tamanho'=>15,
			'default'=>'0',
			'tipo'=>'decimal',
			'precision'=>'2',
			'required'=>true),
		'qtd_titulos_caucionada'=>array(           //08.5
			'tamanho'=>6,
			'default'=>'0',
			'tipo'=>'int',
			'required'=>true),
		'vlr_titulos_caucionada'=>array(    //09.5
			'tamanho'=>15,
			'default'=>'0',
			'tipo'=>'decimal',
			'precision'=>'2',
			'required'=>true),
		'qtd_titulos_descontada'=>array(           //10.5
			'tamanho'=>6,
			'default'=>'0',
			'tipo'=>'int',
			'required'=>true),
		'vlr_titulos_descontada'=>array(    //11.5
			'tamanho'=>15,
			'default'=>'0',
			'tipo'=>'decimal',
			'precision'=>'2',
			'required'=>true),
		'filler2'=>array(        //12.5
			'tamanho'=>31,
			'default'=>' ',
			'tipo'=>'alfa',
			'required'=>true),
		'filler3'=>array(           //13.5
			'tamanho'=>117,
			'default'=>' ',
			'tipo'=>'alfa',
			'required'=>true),
	);
}
?>