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

class Registro3Q extends Generico3
{
	protected $meta = array(
		'codigo_banco'=>array(          // 1.3Q
			'tamanho'=>3,
			'default'=>'341',
			'tipo'=>'int',
			'required'=>true),
		'codigo_lote'=>array(           // 2.3Q
			'tamanho'=>4,
			'default'=>1,
			'tipo'=>'int',
			'required'=>true),
		'tipo_registro'=>array(         // 3.3Q
			'tamanho'=>1,
			'default'=>'3',
			'tipo'=>'int',
			'required'=>true),
		'numero_registro'=>array(       // 4.3Q
			'tamanho'=>5,
			'default'=>'0',
			'tipo'=>'int',
			'required'=>true),
		'seguimento'=>array(            // 5.3Q
			'tamanho'=>1,
			'default'=>'Q',
			'tipo'=>'alfa',
			'required'=>true),
		'filler1'=>array(               // 6.3Q
			'tamanho'=>1,
			'default'=>' ',
			'tipo'=>'alfa',
			'required'=>true),
		'codigo_movimento'=>array(      // 7.3Q
			'tamanho'=>2,
			'default'=>'01', // entrada de titulo
			'tipo'=>'int',
			'required'=>true),
			
			// - ------------------ até aqui é igual para todo registro tipo 3
			
		'tipo_inscricao'=>array(               // 8.3Q
			'tamanho'=>1,
			'default'=>'',
			'tipo'=>'int',
			'required'=>true),
		'numero_inscricao'=>array(            // 9.3Q
			'tamanho'=>15,
			'default'=>'',
			'tipo'=>'int',
			'required'=>true),
		'nome_pagador'=>array(       //10.3Q
			'tamanho'=>30,
			'default'=>'',
			'tipo'=>'alfa',
			'required'=>true),
        'filler12'=>array(               // 6.3Q
            'tamanho'=>10,
            'default'=>' ',
            'tipo'=>'alfa',
            'required'=>true),
		'endereco_pagador'=>array(               // 11.3Q
			'tamanho'=>40,
			'default'=>'',
			'tipo'=>'alfa',
			'required'=>true),
		'bairro_pagador'=>array(               //12.3Q
			'tamanho'=>15,
			'default'=>'',
			'tipo'=>'alfa',
			'required'=>true),
		'cep_pagador'=>array(      //13.3Q   
			'tamanho'=>5,
			'default'=>'',
			'tipo'=>'int',
			'required'=>true),
		'cep_sufixo'=>array(  //14.3Q
			'tamanho'=>3,
			'default'=>' ',
			'tipo'=>'int',
			'required'=>true),
		'cidade_pagador'=>array(   //15.3Q
			'tamanho'=>15,
			'default'=>'',
			'tipo'=>'alfa',
			'required'=>true),
		'uf_pagador'=>array(      //16.3Q
			'tamanho'=>2,
			'default'=>'',  // combrança com registro
			'tipo'=>'alfa',
			'required'=>true),
		'tipo_incricao_avalista'=>array(        //17.3Q
			'tamanho'=>1,
			'default'=>'0',
			'tipo'=>'int',
			'required'=>true),
		'numero_incricao_avalista'=>array(          // 18.3
			'tamanho'=>15,
			'default'=>'0',
			'tipo'=>'int',
			'required'=>true),
		'nome_avalista'=>array(        //18.3Q
			'tamanho'=>30,
			'default'=>' ',
			'tipo'=>'alfa',
			'required'=>true),
        'filler13'=>array(               // 6.3Q
            'tamanho'=>10,
            'default'=>' ',
            'tipo'=>'alfa',
            'required'=>true),
		'filler14'=>array(        //18.3Q
			'tamanho'=>3,
			'default'=>'0',
			'tipo'=>'int',
			'required'=>true),
		'filler15'=>array(            //19.3Q   Campo de preenchimento obrigatório; preencher com Seu Número de controle do título
			'tamanho'=>28,
			'default'=>' ', // este espaço foi colocado para passa a validação para os seters do generico
			'tipo'=>'alfa',
			'required'=>true),
	);
}

?>
