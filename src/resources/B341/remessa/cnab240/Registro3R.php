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
namespace CnabPHP\resources\B341\remessa\cnab240;
use CnabPHP\resources\generico\remessa\cnab240\Generico3;
use CnabPHP\Exception;

class Registro3R extends Generico3
{
	protected $meta = array(
		'codigo_banco'=>array(          // 1.3R
			'tamanho'=>3,
			'default'=>'341',
			'tipo'=>'int',
			'required'=>true),
		'codigo_lote'=>array(           // 2.3R
			'tamanho'=>4,
			'default'=>1,
			'tipo'=>'int',
			'required'=>true),
		'tipo_registro'=>array(         // 3.3R
			'tamanho'=>1,
			'default'=>'3',
			'tipo'=>'int',
			'required'=>true),
		'numero_registro'=>array(       // 4.3R
			'tamanho'=>5,
			'default'=>'0',
			'tipo'=>'int',
			'required'=>true),
		'seguimento'=>array(            // 5.3R
			'tamanho'=>1,
			'default'=>'R',
			'tipo'=>'alfa',
			'required'=>true),
		'filler1'=>array(               // 6.3R
			'tamanho'=>1,
			'default'=>' ',
			'tipo'=>'alfa',
			'required'=>true),
		'codigo_movimento'=>array(      // 7.3R
			'tamanho'=>2,
			'default'=>'01', // entrada de titulo
			'tipo'=>'int',
			'required'=>true),
			
			// - ------------------ até aqui é igual para todo registro tipo 3
			
		'filler12'=>array(               // 8.3R
			'tamanho'=>1,
			'default'=>'0',
			'tipo'=>'int',
			'required'=>true),
		'data_desconto2'=>array(            // 9.3R
			'tamanho'=>8,
			'default'=>'0',
			'tipo'=>'date',
			'required'=>true),
		'vlr_desconto2'=>array(       //10.3R
			'tamanho'=>13,
			'default'=>'0',
			'tipo'=>'decimal',
			'precision'=>2,
			'required'=>true),
        'filler14'=>array(               // 8.3R
            'tamanho'=>1,
            'default'=>'0',
            'tipo'=>'int',
            'required'=>true),
		'data_desconto3'=>array(               //12.3R
			'tamanho'=>8,
			'default'=>'0',
			'tipo'=>'date',
			'required'=>true),
		'vlr_desconto3'=>array(      //13.3R   
			'tamanho'=>13,
			'default'=>'0',
			'tipo'=>'decimal',
			'precision'=>2,
			'required'=>true),
		'codigo_multa'=>array(  //14.3R
			'tamanho'=>1,
			'default'=>'0',
			'tipo'=>'int',
			'required'=>true),
		'data_multa'=>array(   //15.3R
			'tamanho'=>8,
			'default'=>'0',
			'tipo'=>'date',
			'required'=>true),
		'vlr_multa'=>array(      //16.3R
			'tamanho'=>13,
			'default'=>'0',  
			'tipo'=>'decimal',
			'precision'=>2,
			'required'=>true),
		'filler15'=>array(        //17.3R
			'tamanho'=>10,
			'default'=>' ',
			'tipo'=>'alfa',
			'required'=>true),
		'informacao_pagador'=>array(          // 18.3
			'tamanho'=>40,
			'default'=>' ',
			'tipo'=>'alfa',
			'required'=>true),
		'filler16'=>array(        //19.3R
			'tamanho'=>60,
			'default'=>' ',
			'tipo'=>'alfa',
			'required'=>true),
		'cod_ocor_pagador'=>array(    //20.3R   
			'tamanho'=>8,
			'default'=>'0', 
			'tipo'=>'int',
			'required'=>true),
        'filler4'=>array(         //21.3R
            'tamanho'=>8,
            'default'=>'0',
            'tipo'=>'int',
            'required'=>true),
        'filler5'=>array(         //21.3R
            'tamanho'=>1,
            'default'=>' ',
            'tipo'=>'alfa',
            'required'=>true),
        'filler6'=>array(         //21.3R
            'tamanho'=>12,
            'default'=>'0',
            'tipo'=>'int',
            'required'=>true),
        'filler7'=>array(         //21.3R
            'tamanho'=>2,
            'default'=>' ',
            'tipo'=>'alfa',
            'required'=>true),
        'filler8'=>array(         //21.3R
            'tamanho'=>1,
            'default'=>'0',
            'tipo'=>'int',
            'required'=>true),
		'filler9'=>array(         //21.3R
			'tamanho'=>9,
			'default'=>' ',
			'tipo'=>'alfa',
			'required'=>true),
	);
}

?>
