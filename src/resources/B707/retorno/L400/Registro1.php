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

namespace CnabPHP\resources\B707\retorno\L400;

use CnabPHP\resources\generico\retorno\L400\Generico1;
use CnabPHP\RetornoAbstract;

class Registro1 extends Generico1 {

    public $trailler;
    protected $meta = array(
        'tipo_registro' => array(
            'tamanho' => 1,
            'default' => '1',
            'tipo' => 'int',
            'required' => true
        ),
        'cod_inscricao' => array( //13.3P
            'tamanho' => 2,
            'default' => ' ',
            'tipo' => 'int',
            'required' => true
        ),
        'numero_inscricao' => array(
            'tamanho' => 14,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true
        ),
        'filler0' => array(
            'tamanho' => 45,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true
        ),
        'nosso_numero' => array(
            'tamanho' => 11,
            'default' => ' ',
            'tipo' => 'int',
            'required' => true
        ),
        'filler2' => array(
            'tamanho' => 9,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true
        ),
        'nossa_carteira' => array(
            'tamanho' => 3,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true
        ),

        'filler3' => array(
            'tamanho' => 9,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true
        ),
        'filler4' => array(
            'tamanho' => 13,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true
        ),
        'carteira' => array(
            'tamanho' => 1,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true
        ),
        'codigo_movimento' => array( // codigo da ocorrencia
            'tamanho' => 2,
            'default' => '02',
            'tipo' => 'int',
            'required' => true
        ),
        'data_ocorrencia' => array( // data da ocorrencia
            'tamanho' => 6,
            'default' => ' ', // entrada de titulo
            'tipo' => 'date',
            'required' => true
        ),
        'seu_numero' => array(
            'tamanho' => 10,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true
        ),
        'filler5' => array(
            'tamanho' => 20,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true
        ),
        'data_vencimento' => array( //26.3P
            'tamanho' => 6,
            'default' => ' ',
            'tipo' => 'date',
            'required' => true
        ),
        'valor' => array( //12.3Q
            'tamanho' => 11,
            'default' => '0',
            'tipo' => 'decimal',
            'precision' => 2,
            'required' => true
        ),
        'codigo_banco' => array( //12.3Q
            'tamanho' => 3,
            'default' => '0',
            'tipo' => 'int',
            'required' => true
        ),
        'agencia' => array( //12.3Q
            'tamanho' => 4,
            'default' => '0',
            'tipo' => 'alfa',
            'required' => true
        ),
        'agencia_digito' => array( //12.3Q
            'tamanho' => 1,
            'default' => '0',
            'tipo' => 'int',
            'required' => true
        ),
        'especie_titulo' => array( //12.3Q
            'tamanho' => 2,
            'default' => '0',
            'tipo' => 'alfa',
            'required' => true
        ),
        'vlr_despesas_cobranca' => array(
            'tamanho' => 13,
            'default' => '0',
            'tipo' => 'decimal',
            'precision' => 0,
            'required' => true
        ),
        'filler6' => array(
            'tamanho' => 26,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true
        ),
        'vlr_iof' => array(
            'tamanho' => 11,
            'default' => '0',
            'tipo' => 'decimal',
            'precision' => 2,
            'required' => true
        ),
        'vlr_abatimento' => array(
            'tamanho' => 11,
            'default' => '0',
            'tipo' => 'decimal',
            'precision' => 2,
            'required' => true
        ),
        'vlr_desconto' => array(
            'tamanho' => 11,
            'default' => '0',
            'tipo' => 'decimal',
            'precision' => 2,
            'required' => true
        ),
        'vlr_pago' => array(
            'tamanho' => 11,
            'default' => '0',
            'tipo' => 'decimal',
            'precision' => 2,
            'required' => true
        ),
        'vlr_juros_mora' => array( // 8.3Q
            'tamanho' => 11,
            'default' => '0',
            'tipo' => 'decimal',
            'precision' => 2,
            'required' => true
        ),
        'filler7' => array(
            'tamanho' => 97,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true
        ),
        'moeda' => array(
            'tamanho' => 1,
            'default' => ' ',
            'tipo' => 'int',
            'required' => true
        ),
        'motivo_rejeicao' => array( //10.3Q
            'tamanho' => 8,
            'default' => '00',
            'tipo' => 'alfa',
            'required' => true
        ),
        'data_credito' => array( //26.3P
            'tamanho' => 6,
            'default' => '',
            'tipo' => 'date',
            'required' => true
        ),
        'filler8' => array(
            'tamanho' => 3,
            'default' => '0',
            'tipo' => 'int',
            'required' => true
        ),
        'numero_registro' => array( // 4.3R
            'tamanho' => 6,
            'default' => '0',
            'tipo' => 'int',
            'required' => true
        ),
    );

    public function __construct($linhaTxt) {
        parent::__construct($linhaTxt);

        RetornoAbstract::$linesCounter++;
        //$this->inserirDetalhe();
    }

    /*
      metodo get_R3U
      metodo que espõe esse registro como se fosse o R3U da caixa
     */

    public function get_R3U() {
        return $this;
    }

    /*
      metodo get_vlr_liquido
      metodo que espõe esse vlr_liquido como se fosse o da caixa
     */

    public function get_vlr_liquido() {
        return $this->vlr_pago;
    }

}
