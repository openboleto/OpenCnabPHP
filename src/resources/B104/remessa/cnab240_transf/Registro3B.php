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

namespace CnabPHP\resources\B104\remessa\cnab240_transf;
use CnabPHP\resources\generico\remessa\cnab240\Generico3;
use Exception;

class Registro3B extends Generico3 {
	protected $meta = array(
		'codigo_banco'=>array(          // 1.3B
			'tamanho'=>3,
			'default'=>'104',
			'tipo'=>'int',
			'required'=>true),
		'codigo_lote'=>array(           // 2.3B
			'tamanho'=>4,
			'default'=>1,
			'tipo'=>'int',
			'required'=>true),
		'tipo_registro'=>array(         // 3.3B
			'tamanho'=>1,
			'default'=>'3',
			'tipo'=>'int',
			'required'=>true),
		'numero_registro'=>array(       // 4.3B
			'tamanho'=>5,
			'default'=>'2',
			'tipo'=>'int',
			'required'=>true),
		'seguimento'=>array(            // 5.3B
			'tamanho'=>1,
			'default'=>'B',
			'tipo'=>'alfa',
			'required'=>true),
		'filler1'=>array(               // 6.3B
			'tamanho'=>3,
			'default'=>' ',
			'tipo'=>'alfa',
			'required'=>true),			
		'tipo_inscricao'=>array(        // 7.3B
			'tamanho'=>1,
			'default'=>'0',
			'tipo'=>'int',
			'required'=>true),
		'numero_inscricao'=>array(      // 8.3B
			'tamanho'=>14,
			'default'=>'0',
			'tipo'=>'int',
			'required'=>true),
		'logradouro'=>array(       		//9.3B
			'tamanho'=>30,
			'default'=>'',
			'tipo'=>'alfa',
			'required'=>true),
		'num_do_local'=>array(         	//10.3B
			'tamanho'=>5,
			'default'=>'',
			'tipo'=>'int',
			'required'=>true),
		'complemento'=>array(           //11.3B
			'tamanho'=>15,
			'default'=>' ',
			'tipo'=>'alfa',
			'required'=>true),
		'bairro'=>array(      			//12.3B   
			'tamanho'=>15,
			'default'=>'',
			'tipo'=>'alfa',
			'required'=>true),
		'cidade'=>array(  				//13.3B
			'tamanho'=>20,
			'default'=>'',
			'tipo'=>'alfa',
			'required'=>true),
		'cep'=>array(   				//14.3B
			'tamanho'=>5,
			'default'=>'',
			'tipo'=>'int',
			'required'=>true),
		'complemento_cep'=>array(      	//15.3B
			'tamanho'=>3,
			'default'=>'',
			'tipo'=>'alfa',
			'required'=>true),
		'sigla_estado'=>array(        	//16.3B
			'tamanho'=>2,
			'default'=>'',
			'tipo'=>'alfa',
			'required'=>true),
		'data_pagamento' => array(// 17.3B
			'tamanho' => 8,
            'default' => '0',
            'tipo' => 'date',
            'required' => true),
		'valor_documento_nominal' => array(//18.3B
			'tamanho' => 13,
			'default' => '0',
			'tipo' => 'decimal',
			'precision' => 2,
			'required' => true),
		'valor_abatimento' => array(	//19.3B
			'tamanho' => 13,
			'default' => '0',
			'tipo' => 'decimal',
			'precision' => 2,
			'required' => true),
		'valor_desconto' => array(		//20.3B
			'tamanho' => 13,
			'default' => '0',
			'tipo' => 'decimal',
			'precision' => 2,
			'required' => true),
		'valor_mora' => array(			//21.3B
			'tamanho' => 13,
			'default' => '0',
			'tipo' => 'decimal',
			'precision' => 2,
			'required' => true),
		'valor_multa' => array(			//22.3B
			'tamanho' => 13,
			'default' => '0',
			'tipo' => 'decimal',
			'precision' => 2,
			'required' => true),
		'codigo_favorecido'=>array(		//23.3B
			'tamanho'=>15,
			'default'=>' ',
			'tipo'=>'alfa',
			'required'=>true),
		'aviso_fav'=>array(  			//24.3B
			'tamanho'=>1,
			'default'=>' ',
			'tipo'=>'alfa',
			'required'=>true),
		'filler2'=>array(               //25.3B
			'tamanho'=>6,
			'default'=>' ',
			'tipo'=>'alfa',
			'required'=>true),
		'filler3'=>array(               //26.3B
			'tamanho'=>8,
			'default'=>' ',
			'tipo'=>'alfa',
			'required'=>true),
		
	);
}

?>
