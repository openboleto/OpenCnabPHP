<?php

/*
 * CnabPHP - Gera��o de arquivos de remessa e retorno em PHP
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
namespace CnabPHP\resources\B756\remessa\cnab240;

use CnabPHP\resources\generico\remessa\cnab240\Generico3;
use CnabPHP\RegistroRemAbstract;
use CnabPHP\RemessaAbstract;
use CnabPHP\Exception;

class Registro3P extends Generico3 {
	protected $meta = array (
			'codigo_banco' => array ( // 1.3P
					'tamanho' => 3,
					'default' => '756',
					'tipo' => 'int',
					'required' => true 
			),
			'codigo_lote' => array ( // 2.3P
					'tamanho' => 4,
					'default' => 1,
					'tipo' => 'int',
					'required' => true 
			),
			'tipo_registro' => array ( // 3.3P
					'tamanho' => 1,
					'default' => '3',
					'tipo' => 'int',
					'required' => true 
			),
			'numero_registro' => array ( // 4.3P
					'tamanho' => 5,
					'default' => '1',
					'tipo' => 'int',
					'required' => true 
			),
			'seguimento' => array ( // 5.3P
					'tamanho' => 1,
					'default' => 'P',
					'tipo' => 'alfa',
					'required' => true 
			),
			'filler1' => array ( // 6.3P
					'tamanho' => 1,
					'default' => ' ',
					'tipo' => 'alfa',
					'required' => true 
			),
			'codigo_movimento' => array ( // 7.3P
					'tamanho' => 2,
					'default' => '01', // entrada de titulo
					'tipo' => 'int',
					'required' => true 
			),
			
			// - ------------------ at� aqui � igual para todo registro tipo 3
			'agencia' => array (
					'tamanho' => 5,
					'default' => '',
					'tipo' => 'int',
					'required' => true 
			),
			'agencia_dv' => array (
					'tamanho' => 1,
					'default' => '',
					'tipo' => 'int',
					'required' => true 
			),
			'conta' => array (
					'tamanho' => 12,
					'default' => '',
					'tipo' => 'int',
					'required' => true 
			),
			'conta_dv' => array (
					'tamanho' => 1,
					'default' => '',
					'tipo' => 'int',
					'required' => true 
			),
			// dv conta/empresa
			'filler2' => array ( // 9.3P
					'tamanho' => 1,
					'default' => '0',
					'tipo' => 'alfa',
					'required' => true 
			),
			'nosso_numero' => array ( // 13.3P
					'tamanho' => 20,
					'default' => '',
					'tipo' => 'int',
					'required' => true 
			),
			'carteira' => array ( // 13.3P
					'tamanho' => 1,
					'default' => '',
					'tipo' => 'int',
					'required' => true 
			),
			'cadastramento' => array ( // 14.3P
					'tamanho' => 1,
					'default' => '0',
					'tipo' => 'int',
					'required' => true 
			),
			// documento
			'filler3' => array ( // 15.3P
					'tamanho' => 1,
					'default' => ' ', // combran�a com registro
					'tipo' => 'alfa',
					'required' => true 
			),
			'cod_emissao_boleto' => array ( // 16.3P
					'tamanho' => 1,
					'default' => '2', // {2} - beneficiário emite
					'tipo' => 'int',
					'required' => true 
			),
			'distrib_boleto' => array ( // 16.3P
					'tamanho' => 1,
					'default' => '2', // {2} - beneficiário distribui
					'tipo' => 'alfa',
					'required' => true 
			),
			// numero documento
			'seu_numero' => array (   // Campo de preenchimento obrigatório preencher com o 
					'tamanho' => 15,  // Numero do Contrato que gerou o boleto
					'default' => '',
					'tipo' => 'alfa',
					'required' => true 
			),
			'data_vencimento' => array ( // 20.3
					'tamanho' => 8,
					'default' => '',
					'tipo' => 'date',
					'required' => true 
			),
			'valor' => array ( // 21.3P
					'tamanho' => 13,
					'default' => '',
					'tipo' => 'decimal',
					'precision' => 2,
					'required' => true 
			),
			'agencia_cobradora' => array ( // 22.3P
					'tamanho' => 5,
					'default' => '0',
					'tipo' => 'int',
					'required' => true 
			),
			'agencia_cobradora_dv' => array ( // 23.3P
					'tamanho' => 1,
					'default' => ' ',
					'tipo' => 'alfa',
					'required' => true 
			),
			'especie_titulo' => array ( // 24.3P
					'tamanho' => 2,
					'default' => '2',
					'tipo' => 'int',
					'required' => true 
			),
			'aceite' => array ( // 25.3P
					'tamanho' => 1,
					'default' => 'N',
					'tipo' => 'alfa',
					'required' => true 
			),
			'data_emissao' => array ( // 26.3P
					'tamanho' => 8,
					'default' => '',
					'tipo' => 'date',
					'required' => true 
			),
			// codigo juros
			'filler35' => array ( // 27.3P
					'tamanho' => 1,
					'default' => '0',
					'tipo' => 'int',
					'required' => true 
			),
			'data_juros' => array ( // 28.3P
					'tamanho' => 8,
					'default' => '0',
					'tipo' => 'date',
					'required' => true 
			),
			'vlr_juros' => array ( // 29.3P
					'tamanho' => 13,
					'default' => '0',
					'tipo' => 'decimal',
					'precision' => 2,
					'required' => true 
			),
			// codigo desconto
			'filler36' => array ( // 30.3P
					'tamanho' => 1,
					'default' => '2',
					'tipo' => 'int',
					'required' => true 
			),
			'data_desconto' => array ( // 31.3P
					'tamanho' => 8,
					'default' => '0',
					'tipo' => 'date',
					'required' => true 
			),
			'vlr_desconto' => array ( // 32.3P
					'tamanho' => 13,
					'default' => '0',
					'tipo' => 'decimal',
					'precision' => 2,
					'required' => true 
			),
			'vlr_IOF' => array ( // 33.3P
					'tamanho' => 13,
					'default' => '0',
					'tipo' => 'decimal',
					'precision' => 2,
					'required' => true 
			),
			'vlr_abatimento' => array ( // 34.3P
					'tamanho' => 13,
					'default' => '0',
					'tipo' => 'decimal',
					'precision' => 2,
					'required' => true 
			),
			'seu_numero2' => array ( // 35.3P
					'tamanho' => 25, // Identificação do contrato
					'default' => '',
					'tipo' => 'alfa',
					'required' => true 
			),
			'protestar' => array ( // 36.3P
					'tamanho' => 1,
					'default' => '1',
					'tipo' => 'int',
					'required' => true 
			),
			'prazo_protesto' => array ( // 37.3P
					'tamanho' => 2,
					'default' => '0',
					'tipo' => 'int',
					'required' => true 
			),
			'baixar' => array ( // 38.3P
					'tamanho' => 1,
					'default' => '0',
					'tipo' => 'int',
					'required' => true 
			),
			'prazo_baixar' => array ( // 39.3P
					'tamanho' => 3,
					'default' => ' ',
					'tipo' => 'alfa',
					'required' => true 
			),
			'codigo_moeda' => array ( // 39.3P
					'tamanho' => 2,
					'default' => '09',
					'tipo' => 'int',
					'required' => true 
			),
			'filler5' => array ( // 41.3P
					'tamanho' => 10,
					'default' => '0',
					'tipo' => 'int',
					'required' => true 
			),
			'filler6' => array ( // 42.3P
					'tamanho' => 1,
					'default' => ' ',
					'tipo' => 'alfa',
					'required' => true 
			) 
	);
	public function __construct($data = null) {
		if (empty ( $this->data ))
			parent::__construct ( $data );
		$this->inserirDetalhe ( $data );
	}
	public function inserirDetalhe($data) {
		$class = 'CnabPHP\resources\\' . RemessaAbstract::$banco . '\remessa\\' . RemessaAbstract::$layout . '\Registro3Q';
		$this->children [] = new $class ( $data );
		if (isset ( $data ['codigo_desconto2'] ) || isset ( $data ['codigo_desconto3'] ) || isset ( $data ['vlr_multa'] ) || isset ( $data ['informacao_pagador'] )) {
			$class = 'CnabPHP\resources\\' . RemessaAbstract::$banco . '\remessa\\' . RemessaAbstract::$layout . '\Registro3R';
			$this->children [] = new $class ( $data );
		}
		$class = 'CnabPHP\resources\\' . RemessaAbstract::$banco . '\remessa\\' . RemessaAbstract::$layout . '\Registro3S3';
		$this->children [] = new $class ( $data );
	}
}

?>
