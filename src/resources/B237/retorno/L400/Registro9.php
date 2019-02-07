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

namespace CnabPHP\resources\B237\retorno\L400;

use CnabPHP\resources\generico\retorno\L400\Generico9;
use CnabPHP\Exception;

class Registro9 extends Generico9 {

    protected $meta = array(
        'tipo_registro' => array(//01.5
            'tamanho' => 1,
            'default' => '9',
            'tipo' => 'int',
            'required' => true),
        'ident_retorno' => array(//01.5
            'tamanho' => 1,
            'default' => '2',
            'tipo' => 'int',
            'required' => true),
        'ident__tipo_retorno' => array(//01.5
            'tamanho' => 2,
            'default' => '01',
            'tipo' => 'int',
            'required' => true),
        'codigo_banco' => array(//01.5
            'tamanho' => 3,
            'default' => '237',
            'tipo' => 'int',
            'required' => true),
        'filler0' => array(//02.5
            'tamanho' => 10,
            'default' => '',
            'tipo' => 'alfa',
            'required' => true),
        'qtd_titulos_cobranca' => array(//03.5
            'tamanho' => 8,
            'default' => '1',
            'tipo' => 'int',
            'required' => true),
        'valor_total_cobranca' => array(//04.5
            'tamanho' => 12,
            'default' => '',
            'tipo' => 'decimal',
            'precision' => 2,
            'required' => true),
        'n_aviso_bancario' => array(//05.5
            'tamanho' => 8,
            'default' => '1',
            'tipo' => 'alfa',
            'required' => true),
        'filler1' => array(//06.5
            'tamanho' => 10,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true),
        'QtdEntradaConfirmadaC02' => array(//12.5
            'tamanho' => 5,
            'default' => '',
            'tipo' => 'int',
            'required' => true),
        'ValEntradaConfirmadaC02' => array(//04.5
            'tamanho' => 10,
            'default' => '',
            'tipo' => 'decimal',
            'precision' => 2,
            'required' => true),
        'ValTotLiquidacaoC06' => array(//04.5
            'tamanho' => 10,
            'default' => '',
            'tipo' => 'decimal',
            'precision' => 2,
            'required' => true),
         'QtdLiquidacaoC06' => array(//12.5
            'tamanho' => 5,
            'default' => '',
            'tipo' => 'int',
            'required' => true),
        'ValLiquidacaoC06' => array(//04.5
            'tamanho' => 10,
            'default' => '',
            'tipo' => 'decimal',
            'precision' => 2,
            'required' => true),
         'QtdBaixaC09C10' => array(//12.5
            'tamanho' => 5,
            'default' => '',
            'tipo' => 'int',
            'required' => true),
        'ValBaixaC09C10' => array(//04.5
            'tamanho' => 10,
            'default' => '',
            'tipo' => 'decimal',
            'precision' => 2,
            'required' => true),
        'QtdAbatimentoCanceladoC13' => array(//12.5
            'tamanho' => 5,
            'default' => '',
            'tipo' => 'int',
            'required' => true),
        'ValAbatimentoCanceladoC13' => array(//04.5
            'tamanho' => 10,
            'default' => '',
            'tipo' => 'decimal',
            'precision' => 2,
            'required' => true),
        'QtdVencimentoAlteradoC14' => array(//12.5
            'tamanho' => 5,
            'default' => '',
            'tipo' => 'int',
            'required' => true),
        'ValVencimentoAlteradoC14' => array(//04.5
            'tamanho' => 10,
            'default' => '',
            'tipo' => 'decimal',
            'precision' => 2,
            'required' => true),
         'QtdAbatimentoConcedidoC12' => array(//12.5
            'tamanho' => 5,
            'default' => '',
            'tipo' => 'int',
            'required' => true),
        'ValAbatimentoConcedidoC12' => array(//04.5
            'tamanho' => 10,
            'default' => '',
            'tipo' => 'decimal',
            'precision' => 2,
            'required' => true),
        'QtdConfirmacaoInstProtestoC19' => array(//12.5
            'tamanho' => 5,
            'default' => '',
            'tipo' => 'int',
            'required' => true),
        'ValConfirmacaoInstProtestoC19' => array(//04.5
            'tamanho' => 10,
            'default' => '',
            'tipo' => 'decimal',
            'precision' => 2,
            'required' => true),
         'filler2' => array(//06.5
            'tamanho' => 174,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true),
          'ValTotalRateiosEfetuados' => array(//04.5
            'tamanho' => 13,
            'default' => '',
            'tipo' => 'decimal',
            'precision' => 2,
            'required' => true),
         'QtdTotalRateiosEfetuados' => array(//12.5
            'tamanho' => 8,
            'default' => '',
            'tipo' => 'int',
            'required' => true),
         'filler3' => array(//06.5
            'tamanho' => 9,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true),
         'numero_sequencial_registro'=>array(
            'tamanho'=>6,
            'default'=>'',
            'tipo'=>'int',
            'required'=>true)
    );

}
