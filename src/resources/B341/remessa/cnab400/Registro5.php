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
namespace CnabPHP\resources\B341\remessa\cnab400;
use CnabPHP\resources\generico\remessa\cnab400\Generico5;
use CnabPHP\Exception;

class Registro5 extends Generico5
{
    protected $meta = array(
		'tipo_registro'=>array(     //03.5
			'tamanho'=>1,
			'default'=>'5',
			'tipo'=>'int',
			'required'=>true),
		'email'=>array(          //04.5
			'tamanho'=>120,
			'default'=>'',
			'tipo'=>'alfa',
			'required'=>true),
        'tipo_inscricao' => array(
            'tamanho' => 2,
            'default' => '',
            'tipo' => 'int',
            'required' => true),
        'numero_inscricao' => array(
            'tamanho' => 14,
            'default' => '',
            'tipo' => 'int',
            'required' => true),
        'endereco_pagador' => array(// 11.3Q
            'tamanho' => 40,
            'default' => '',
            'tipo' => 'alfa',
            'required' => true),
        'bairro_pagador' => array(//12.3Q
            'tamanho' => 12,
            'default' => '',
            'tipo' => 'alfa',
            'required' => true),
        'cep_pagador' => array(//13.3Q   
            'tamanho' => 8,
            'default' => '',
            'tipo' => 'int',
            'required' => true),
        'cidade_pagador' => array(//15.3Q
            'tamanho' => 15,
            'default' => '',
            'tipo' => 'alfa',
            'required' => true),
        'uf_pagador' => array(//16.3Q
            'tamanho' => 2,
            'default' => '', // combrança com registro
            'tipo' => 'alfa',
            'required' => true),
        'filler1' => array(
            'tamanho' => 180,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true),
        'numero_registro' => array(// 4.3R
            'tamanho' => 6,
            'default' => '0',
            'tipo' => 'int',
            'required' => true),
	);
}