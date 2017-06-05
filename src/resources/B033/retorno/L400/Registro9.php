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
namespace CnabPHP\resources\B033\retorno\L400;
use CnabPHP\resources\generico\retorno\L400\Generico9;
use CnabPHP\Exception;

class Registro9 extends Generico9
{
	protected $meta = array(
		'codigo_registro'=>array(      //01.5
			'tamanho'=>1,
			'default'=>9,
			'tipo'=>'int',
			'required'=>true),
		'codigo_remessa'=>array(      //01.5
			'tamanho'=>1,
			'default'=>2,
			'tipo'=>'int',
			'required'=>true),
		'codigo_servico'=>array(      //01.5
			'tamanho'=>2,
			'default'=>'01',
			'tipo'=>'int',
			'required'=>true),
		'codigo_banco'=>array(      //01.5
			'tamanho'=>3,
			'default'=>'033',
			'tipo'=>'int',
			'required'=>true),
		'filler1'=>array(          //04.5
			'tamanho'=>10,
			'default'=>' ',
			'tipo'=>'alfa',
			'required'=>true),
		'qtde_registros_simples'=>array(       //02.5
			'tamanho'=>8,
			'default'=>'',
			'tipo'=>'int',
			'required'=>true),
		'valor_titulos_simples'=>array(                 //21.3P
            'tamanho'=>12,
            'default'=>'',
            'tipo'=>'decimal',
            'precision'=>2,
            'required'=>true),
		'nro_aviso_simples'=>array(     //03.5
			'tamanho'=>8,
			'default'=>'',
			'tipo'=>'int',
			'required'=>true),
		'filler2'=>array(          //04.5
			'tamanho'=>10,
			'default'=>' ',
			'tipo'=>'alfa',
			'required'=>true),
		'filler3'=>array(          //04.5
			'tamanho'=>30,
			'default'=>'0',
			'tipo'=>'alfa',
			'required'=>true),
		'filler4'=>array(          //04.5
			'tamanho'=>10,
			'default'=>' ',
			'tipo'=>'alfa',
			'required'=>true),
		'qtde_registros_caucionada'=>array(       //02.5
			'tamanho'=>8,
			'default'=>'',
			'tipo'=>'int',
			'required'=>true),
		'valor_titulos_caucionada'=>array(                 //21.3P
            'tamanho'=>12,
            'default'=>'',
            'tipo'=>'decimal',
            'precision'=>2,
            'required'=>true),
		'nro_aviso_caucionada'=>array(     //03.5
			'tamanho'=>8,
			'default'=>'',
			'tipo'=>'int',
			'required'=>true),
		'filler5'=>array(          //04.5
			'tamanho'=>10,
			'default'=>' ',
			'tipo'=>'alfa',
			'required'=>true),
		'qtde_registros_descontada'=>array(       //02.5
			'tamanho'=>8,
			'default'=>'',
			'tipo'=>'int',
			'required'=>true),
		'valor_titulos_descontada'=>array(                 //21.3P
            'tamanho'=>12,
            'default'=>'',
            'tipo'=>'decimal',
            'precision'=>2,
            'required'=>true),
		'nro_aviso_descontada'=>array(     //03.5
			'tamanho'=>8,
			'default'=>'',
			'tipo'=>'int',
			'required'=>true),
		'filler6'=>array(          //04.5
			'tamanho'=>224,
			'default'=>' ',
			'tipo'=>'alfa',
			'required'=>true),
		'numero_versao'=>array(      //13.3Q   
            'tamanho'=>3,
            'default'=>'',
            'tipo'=>'int',
            'required'=>true),
        'numero_registro'=>array(       // 4.3R
            'tamanho'=>6,
            'default'=>'0',
            'tipo'=>'int',
            'required'=>true),
	);
}
?>
