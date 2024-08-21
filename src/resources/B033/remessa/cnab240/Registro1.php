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
namespace CnabPHP\resources\B033\remessa\cnab240;

use CnabPHP\resources\generico\remessa\cnab240\Generico1;

class Registro1 extends Generico1
{

    protected $meta = array(
        'codigo_banco' => array(
            'tamanho' => 3,
            'default' => '033',
            'tipo' => 'int',
            'required' => true
        ),
        'codigo_lote' => array(
            'tamanho' => 4,
            'default' => 1,
            'tipo' => 'int',
            'required' => true
        ),
        'tipo_registro' => array(
            'tamanho' => 1,
            'default' => 1,
            'tipo' => 'int',
            'required' => true
        ),
        'operacao' => array(
            'tamanho' => 1,
            'default' => 'R',
            'tipo' => 'alfa',
            'required' => true
        ),
        'tipo_servico' => array(
            'tamanho' => 2,
            'default' => '01',
            'tipo' => 'int',
            'required' => true
        ),
        'filler1' => array(
            'tamanho' => 2,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true
        ),
        'versao_layout' => array(
            'tamanho' => 3,
            'default' => '030',
            'tipo' => 'int',
            'required' => true
        ),
        'filler2' => array(
            'tamanho' => 1,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true
        ),
        'tipo_inscricao' => array(
            'tamanho' => 1,
            'default' => '',
            'tipo' => 'int',
            'required' => true
        ),
        'numero_inscricao' => array(
            'tamanho' => 15,
            'default' => '',
            'tipo' => 'int',
            'required' => true
        ),
        'filler3' => array(
            'tamanho' => 20,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true
        ),
        'agencia' => array(
            'tamanho' => 4,
            'default' => '',
            'tipo' => 'int',
            'required' => true
        ),
        'filler12' => array(
            'tamanho' => 4,
            'default' => '0',
            'tipo' => 'int',
            'required' => true
        ),
        'codigo_beneficiario' => array(
            'tamanho' => 7,
            'default' => '0',
            'tipo' => 'int',
            'required' => true
        ),
        'filler4' => array(
            'tamanho' => 5,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true
        ),
        'nome_empresa' => array(
            'tamanho' => 30,
            'default' => '',
            'tipo' => 'alfa',
            'required' => true
        ),
        'mensagem1' => array(// mensagems 1 e 2 : somente use para mensagens que serao impressas de forma identica em todos os boletos do lote
            'tamanho' => 40,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true
        ),
        'mensagem2' => array(// mensagems 1 e 2 : somente use para mensagens que serao impressas de forma identica em todos os boletos do lote
            'tamanho' => 40,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true
        ),
        'numero_remessa' => array(
            'tamanho' => 8,
            'default' => '',
            'tipo' => 'int',
            'required' => true
        ),
        'data_gravacao' => array(
            'tamanho' => 8,
            'default' => '', // nao informar a data na instanciação - gerada dinamicamente
            'tipo' => 'date',
            'required' => true
        ),
        'filler5' => array(
            'tamanho' => 41,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true
        ),
    );
}
