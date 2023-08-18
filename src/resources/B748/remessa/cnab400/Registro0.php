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

namespace CnabPHP\resources\B748\remessa\cnab400;

use CnabPHP\resources\generico\remessa\cnab400\Generico0;
use CnabPHP\RemessaAbstract;

class Registro0 extends Generico0 {

    protected $meta = array(
        'identificacao_registro' => array(
            'tamanho' => 1,
            'default' => '0',
            'tipo' => 'int',
            'required' => true),
        'id_arquivo_remessa' => array(//fixo 
            'tamanho' => 1,
            'default' => '1',
            'tipo' => 'int',
            'required' => true),
        'literal_remessa' => array(
            'tamanho' => 7,
            'default' => 'REMESSA',
            'tipo' => 'alfa',
            'required' => true),
        'tipo_servico' => array(
            'tamanho' => 2,
            'default' => '01',
            'tipo' => 'int',
            'required' => true),
        'literal_servico' => array(
            'tamanho' => 15,
            'default' => 'COBRANCA',
            'tipo' => 'alfa',
            'required' => true),
        'codigo_beneficiario' => array(
            'tamanho' => 5,
            'default' => '',
            'tipo' => 'int',
            'required' => true),
        'numero_inscricao' => array(
            'tamanho' => 14,
            'default' => '',
            'tipo' => 'int',
            'required' => true),
        'filler0' => array(
            'tamanho' => 31,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true),
        'codigo_banco' => array(
            'tamanho' => 3,
            'default' => '748',
            'tipo' => 'int',
            'required' => true),
        'nome_banco' => array(
            'tamanho' => 15,
            'default' => 'SICREDI',
            'tipo' => 'alfa',
            'required' => true),
        'data_gravacao' => array(
            'tamanho' => 8,
            'default' => '', // nao informar a data na instanciação - gerada dinamicamente
            'tipo' => 'dateReverse',
            'required' => true),
        'filler1' => array(
            'tamanho' => 8,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true),
        'numero_sequencial_arquivo' => array(
            'tamanho' => 7,
            'default' => '1',
            'tipo' => 'int',
            'required' => true),
        'filler2' => array(
            'tamanho' => 273,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true),
        'identificacao_sistema' => array(
            'tamanho' => 4,
            'default' => '2.00',
            'tipo' => 'alfa',
            'required' => true),
        'numero_sequencial' => array(
            'tamanho' => 6,
            'default' => '1',
            'tipo' => 'int',
            'required' => true),
    );
    
    public function __construct($data = NULL) {
        parent::__construct($data);
        RemessaAbstract::$endLine = hex2bin('0D0A');
    }

    public function getFileName() {
        $codigo_meses = array(1=>1,2=>2,3=>3,4=>4,5=>5,6=>6,7=>7,8=>8,9=>9,10=>'O',11=>'N',12=>'D');
        return $this->entryData['codigo_beneficiario'] . $codigo_meses[date('n')] . date('d');
    }

}
