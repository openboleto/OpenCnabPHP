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
namespace CnabPHP\resources\B756\retorno\L085;
use CnabPHP\resources\generico\retorno\L040\Generico3;
//use CnabPHP\RetornoAbstract;
use CnabPHP\Exception;

class Registro3Y08 extends Generico3
{
	protected $meta = array(
		'codigo_banco'=>array(          // 1.9U
			'tamanho'=>3,
			'default'=>'756',
			'tipo'=>'int',
			'required'=>true),
		'codigo_lote'=>array(           // 2.9U
			'tamanho'=>4,
			'default'=>1,
			'tipo'=>'int',
			'required'=>true),
		'tipo_registro'=>array(         // 3.9U
			'tamanho'=>1,
			'default'=>'3',
			'tipo'=>'int',
			'required'=>true),
		'numero_registro'=>array(       // 4.9U
			'tamanho'=>5,
			'default'=>'0',
			'tipo'=>'int',
			'required'=>true),
		'seguimento'=>array(            // 5.9U
			'tamanho'=>1,
			'default'=>'U',
			'tipo'=>'alfa',
			'required'=>true),
		'filler1'=>array(               // 6.9U
			'tamanho'=>1,
			'default'=>' ',
			'tipo'=>'int',
			'required'=>true),
		'codigo_movimento'=>array(      // 7.9U
			'tamanho'=>2,
			'default'=>'', // entrada de titulo
			'tipo'=>'int',
			'required'=>true),
			
			// - ------------------ até aqui é igual para todo registro tipo 3
			
		'identificacao_registro'=>array(               // 8.9U
			'tamanho'=>2,
			'default'=>'',
			'tipo'=>'int',
			'required'=>true),
		'codigo_solicitacao'=>array(            // 9.9U
			'tamanho'=>2,
			'default'=>'',
			'tipo'=>'int',
			'required'=>true),
		'id_identificador'=>array(       //10.9U
			'tamanho'=>1,
			'default'=>'',
			'tipo'=>'int',
			'required'=>true),
		'numero_solicitacao'=>array(               // 11.9U
			'tamanho'=>18,
			'default'=>'',
			'tipo'=>'int',
			'required'=>true),
		'descricao'=>array(               //12.9U
			'tamanho'=>180,
			'default'=>'',
			'tipo'=>'alfa',
			'required'=>true),
		'quantidade'=>array(      //13.9U   
			'tamanho'=>4,
			'default'=>'',
			'tipo'=>'int',
			'required'=>true),
		'erro'=>array(  //14.9U
			'tamanho'=>3,
			'default'=>' ',
			'tipo'=>'int',
			'required'=>true),
		'filler2'=>array(   //15.9U
			'tamanho'=>30,
			'default'=>'',
			'tipo'=>'alfa',
			'required'=>true),	
	);
}

?>
