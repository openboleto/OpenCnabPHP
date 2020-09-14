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
namespace CnabPHP\resources\B084\retorno\L400;
use CnabPHP\resources\generico\retorno\L400\Generico9;
use CnabPHP\Exception;

class Registro9 extends Generico9
{
	protected $meta = array(
        'ident_retorno'=>array(      //01.5
            'tamanho'=>1,
            'default'=>'9',
            'tipo'=>'int',
            'required'=>true),
        'ident__tipo_retorno'=>array(      //01.5
            'tamanho'=>1,
            'default'=>'1',
            'tipo'=>'int',
            'required'=>true),
		'tipo_registro'=>array(      //01.5
			 'tamanho'=>2,
			 'default'=>'01',
			 'tipo'=>'int',
			 'required'=>true),
		'codigo_banco'=>array(      //01.5
			'tamanho'=>3,
			'default'=>'084',
			'tipo'=>'int',
			'required'=>true),
		'filler0'=>array(       //02.5
			'tamanho'=>10,
			'default'=>'',
			'tipo'=>'alfa',
			'required'=>true),
		'qtd_titulos'=>array(           //06.5
			'tamanho'=>8,
			'default'=>'0',
			'tipo'=>'int',
			'required'=>true),
		'vlr_total_cobrancas'=>array(           //06.5
			  'tamanho'=>12,
			  'default'=>'0',
			  'precision' => 2,
			  'tipo'=>'decimal',
			  'required'=>true),
		'aviso_bancario'=>array(           //06.5
			'tamanho'=>8,
			'default'=>'0',
			'tipo'=>'int',
			'required'=>true),
		'filler2'=>array(        //12.5
			'tamanho'=>6,
			'default'=>' ',
			'tipo'=>'alfa',
			'required'=>true),
		'filler3'=>array(           //13.5
			'tamanho'=>10,
			'default'=>' ',
			'tipo'=>'alfa',
			'required'=>true),
		'qtd_registros_02'=>array(           //06.5
		  'tamanho'=>5,
		  'default'=>'0',
		  'tipo'=>'int',
		  'required'=>true),
		'valor_registros_02'=>array(           //06.5
			 'tamanho'=>10,
			 'default'=>'0',
			 'tipo'=>'decimal',
			 'precision' => 2,
			 'required'=>true),
		'valor_registros_06_liquidacao'=>array(           //06.5
			   'tamanho'=>10,
			   'default'=>'0',
			   'tipo'=>'decimal',
			   'precision' => 2,
			   'required'=>true),
        'qtd_registros_06'=>array(           //06.5
             'tamanho'=>5,
             'default'=>'0',
             'tipo'=>'int',
             'required'=>true),
        'valor_registros_06'=>array(           //06.5
              'tamanho'=>10,
              'default'=>'0',
              'tipo'=>'decimal',
              'precision' => 2,
              'required'=>true),
        'qtd_registros_09'=>array(           //06.5
             'tamanho'=>5,
             'default'=>'0',
             'tipo'=>'int',
             'required'=>true),
        'valor_registros_09'=>array(           //06.5
               'tamanho'=>10,
               'default'=>'0',
               'tipo'=>'decimal',
               'precision' => 2,
               'required'=>true),
        'qtd_registros_13'=>array(           //06.5
             'tamanho'=>5,
             'default'=>'0',
             'tipo'=>'int',
             'required'=>true),
        'valor_registros_13'=>array(           //06.5
               'tamanho'=>10,
               'default'=>'0',
               'tipo'=>'decimal',
               'precision' => 2,
               'required'=>true),
        'qtd_registros_14'=>array(           //06.5
             'tamanho'=>5,
             'default'=>'0',
             'tipo'=>'int',
             'required'=>true),
        'valor_registros_14'=>array(           //06.5
               'tamanho'=>10,
               'default'=>'0',
               'tipo'=>'decimal',
               'precision' => 2,
               'required'=>true),
        'qtd_registros_12'=>array(           //06.5
             'tamanho'=>5,
             'default'=>'0',
             'tipo'=>'int',
             'required'=>true),
        'valor_registros_12'=>array(           //06.5
               'tamanho'=>10,
               'default'=>'0',
               'tipo'=>'decimal',
               'precision' => 2,
               'required'=>true),
        'filler3'=>array(       //02.5
                'tamanho'=>17,
                'default'=>'0',
                'tipo'=>'int',
                'required'=>true),
        'filler4'=>array(       //02.5
                'tamanho'=>206,
                'default'=>'0',
                'tipo'=>'alfa',
                'required'=>true),
        'sequencial_registro'=>array(       //02.5
                'tamanho'=>6,
                'default'=>'',
                'tipo'=>'int',
                'required'=>true),
	);
}
?>
