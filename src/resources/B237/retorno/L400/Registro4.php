<?php

/*
 * CnabPHP - GeraÃ§Ã£o de arquivos de remessa e retorno em PHP
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

namespace CnabPHP\resources\B237\retorno\L400;

use CnabPHP\resources\generico\retorno\L400\Generico4;
use CnabPHP\RetornoAbstract;

// Layout do Arquivo-Retorno - Registro de Transação - Tipo 4 (Pix)
class Registro4 extends Generico4 {

    public $trailler;
    protected $meta = array(
        'tipo_registro' => array( // 001 a 001
            'tamanho' => 1,
            'default' => '4',
            'tipo' => 'int',
            'required' => true),
        'carteira' => array( // 002 a 004
            'tamanho' => 3,
            'default' => '',
            'tipo' => 'int',
            'required' => true),
        'agencia' => array( // 005 a 009
            'tamanho' => 5,
            'default' => '',
            'tipo' => 'int',
            'required' => true),
        'conta' => array( // 010 a 016 // Sem dígito
            'tamanho' => 7,
            'default' => '',
            'tipo' => 'int',
            'required' => true),
        'nosso_numero' => array( // 017 a 027
            'tamanho' => 11,
            'default' => '',
            'tipo' => 'int',
            'required' => true),
        'nosso_numero_dv' => array( // 028 a 028
            'tamanho' => 1,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true),
        'pix_url' => array( // 029 a 105
            'tamanho' => 77,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true),
        'txid' => array( // 106 a 140
            'tamanho' => 35,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true),
        'zero' => array(//20.3
            'tamanho' => 254,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true),
        'numero_registro' => array( // 395 a 400
            'tamanho' => 6,
            'default' => '0',
            'tipo' => 'int',
            'required' => true),
    );

    public function __construct($linhaTxt) {
        parent::__construct($linhaTxt);

        RetornoAbstract::$linesCounter++;
        //$this->inserirDetalhe();
    }

    /*
      metodo get_R4
      metodo que espõe esse registro como tipo 4 bradesco
     */

    public function get_R4() {
        return $this;
    }

}
