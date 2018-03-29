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

use CnabPHP\resources\generico\remessa\cnab240\Generico3;
use CnabPHP\RegistroRemAbstract;
use CnabPHP\RemessaAbstract;
use CnabPHP\Exception;

class Registro3P extends Generico3 {

    protected $meta = array(
        'codigo_banco' => array(// 1.3P
            'tamanho' => 3,
            'default' => '033',
            'tipo' => 'int',
            'required' => true),
        'codigo_lote' => array(// 2.3P
            'tamanho' => 4,
            'default' => 1,
            'tipo' => 'int',
            'required' => true),
        'tipo_registro' => array(// 3.3P
            'tamanho' => 1,
            'default' => '3',
            'tipo' => 'int',
            'required' => true),
        'numero_registro' => array(// 4.3P
            'tamanho' => 5,
            'default' => '0',
            'tipo' => 'int',
            'required' => true),
        'seguimento' => array(// 5.3P
            'tamanho' => 1,
            'default' => 'P',
            'tipo' => 'alfa',
            'required' => true),
        'filler1' => array(// 6.3P
            'tamanho' => 1,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true),
        'codigo_movimento' => array(// 7.3P
            'tamanho' => 2,
            'default' => '01', // entrada de titulo
            'tipo' => 'int',
            'required' => true),
        // - ------------------ até aqui é igual para todo registro tipo 3
        'agencia' => array(
            'tamanho' => 4,
            'default' => '',
            'tipo' => 'int',
            'required' => true),
        'agencia_dv' => array(
            'tamanho' => 1,
            'default' => '',
            'tipo' => 'int',
            'required' => true),
        'conta' => array(
            'tamanho' => 9,
            'default' => '0',
            'tipo' => 'int',
            'required' => true),
        'conta_dv' => array(
            'tamanho' => 1,
            'default' => '',
            'tipo' => 'int',
            'required' => true),
        'codigo_beneficiario' => array(
            'tamanho' => 9,
            'default' => '',
            'tipo' => 'int',
            'required' => true),
        'codigo_beneficiario_dv' => array(
            'tamanho' => 1,
            'default' => '',
            'tipo' => 'int',
            'required' => true),
        'filler2' => array(
            'tamanho' => 2,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true),
        'nosso_numero' => array(
            'tamanho' => 13,
            'default' => '',
            'tipo' => 'int',
            'required' => true),
        'tipo_cobranca' => array(
            'tamanho' => 1,
            'default' => '5',
            'tipo' => 'int',
            'required' => true),
        'forma_cadastramento' => array(
            'tamanho' => 1,
            'default' => '1', // '1' = Cobrança Registrada (Rápida e Eletrônica com Registro)
            'tipo' => 'int',
            'required' => true),
        'tipo_documento' => array(
            'tamanho' => 1,
            'default' => '1', // 1- Tradicional , 2- Escritural
            'tipo' => 'int',
            'required' => true),
        'filler3' => array(
            'tamanho' => 1,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true),
        'filler4' => array(
            'tamanho' => 1,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true),
        'seu_numero' => array(
            'tamanho' => 15,
            'default' => '',
            'tipo' => 'int',
            'required' => true),
        'data_vencimento' => array(
            'tamanho' => 8,
            'default' => '',
            'tipo' => 'date',
            'required' => true),
        'valor' => array(
            'tamanho' => 13,
            'default' => '',
            'tipo' => 'decimal',
            'precision' => 2,
            'required' => true),
        'agencia_cobradora' => array(
            'tamanho' => 4,
            'default' => '0',
            'tipo' => 'int',
            'required' => true),
        'agencia_cobradora_dv' => array(
            'tamanho' => 1,
            'default' => '0',
            'tipo' => 'int',
            'required' => true),
        'filler5' => array(
            'tamanho' => 1,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true),
        'especie_titulo' => array(
            'tamanho' => 2,
            'default' => '2',
            'tipo' => 'int',
            'required' => true),
        'aceite' => array(
            'tamanho' => 1,
            'default' => 'N',
            'tipo' => 'alfa',
            'required' => true),
        'data_emissao' => array(
            'tamanho' => 8,
            'default' => '',
            'tipo' => 'date',
            'required' => true),
        /**
         * Códigos dos juros de mora
         * 1 = Valor por dia - Informar no campo o valor/dia a mora a ser cobrada.
         * 2 = Taxa Mensal - Informar no campo taxa mensal o percentual a ser aplicado sobre valor do titulo que será calculado por dia de atraso.
         * 3 = Isento
         * 4 = Utilizar comissão permanência do Banco por dia de atraso
         * 5 = Tolerância valor por dia (cobrar juros a partir de)
         * 6 = Tolerância taxa mensal (cobrar juros a partir de)
         * Para o código igual 4, o campo “taxa mensal” não deverá conter informação.
         */
        'codigo_juros' => array(
            'tamanho' => 1,
            'default' => '0',
            'tipo' => 'int',
            'required' => true),
        'data_juros' => array(
            'tamanho' => 8,
            'default' => '0',
            'tipo' => 'date',
            'required' => true),
        'vlr_juros' => array(
            'tamanho' => 13,
            'default' => '0',
            'tipo' => 'decimal',
            'precision' => 2,
            'required' => true),
        /**
         * 0 = ISENTO
         * 1 = Valor fixo ate a data informada – Informar o valor no campo “valor de desconto a ser concedido”.
         * 2 = Percentual ate a data informada – Informar o percentual no campo “percentual de desconto a ser concedido”
         * 3 = Valor por antecipação por dia corrido - Informar o valor no campo “valor de desconto a ser concedido”
         * 4 = Valor por antecipação dia útil - Informar o valor no campo “valor de desconto a ser concedido” Para os código 1 e 2 será obrigatório a informação da “data” NOTA: é possível informar até duas ocorrências de desconto, por ex.:
         *      Segmento P : Valor do titulo R$ 100,00 Vencimento 30/09/1998
         *      ( Desconto 1 R$ 10,00 p/ pagamento até 25/09/1998
         *      Segmento R: < Desconto 2 R$ 8,00 p/ pagamento até 20/09/1998
         */
        'codigo_desconto' => array(
            'tamanho' => 1,
            'default' => '0',
            'tipo' => 'int',
            'required' => true),
        'data_desconto' => array(
            'tamanho' => 8,
            'default' => '0',
            'tipo' => 'date',
            'required' => true),
        'vlr_desconto' => array(
            'tamanho' => 13,
            'default' => '0',
            'tipo' => 'decimal',
            'precision' => 2,
            'required' => true),
        'vlr_IOF' => array(
            'tamanho' => 13,
            'default' => '0',
            'tipo' => 'decimal',
            'precision' => 2,
            'required' => true),
        'vlr_abatimento' => array(
            'tamanho' => 13,
            'default' => '0',
            'tipo' => 'decimal',
            'precision' => 2,
            'required' => true),
        'seu_numero2' => array(
            'tamanho' => 25,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true),
        /**
         * 0 NAO PROTESTAR
         * 1 PROTESTAR DIAS CORRIDOS
         * 2 PROTESTAR DIAS UTEIS
         * 3 UTILIZAR PERFIL BENEFICIÁRIO
         * 9 CANCELAMENTO DE PROTESTO AUTOMATICO
         */
        'protestar' => array(
            'tamanho' => 1,
            'default' => '3',
            'tipo' => 'alfa',
            'required' => true),
        'prazo_protesto' => array(
            'tamanho' => 2,
            'default' => '0',
            'tipo' => 'int',
            'required' => true),
        /**
         * 1 BAIXAR / DEVOLVER
         * 2 NAO BAIXAR / NAO DEVOLVER
         * 3 UTILIZAR PERFIL BENEFICIÁRIO
         */
        'baixar' => array(
            'tamanho' => 1,
            'default' => '1',
            'tipo' => 'int',
            'required' => true),
        'filler6' => array(
            'tamanho' => 1,
            'default' => '0',
            'tipo' => 'int',
            'required' => true),
        'prazo_baixar' => array(
            'tamanho' => 2,
            'default' => '90',
            'tipo' => 'int',
            'required' => true),
        'codigo_moeda' => array(
            'tamanho' => 2,
            'default' => '00',
            'tipo' => 'int',
            'required' => true),
        'filler7' => array(
            'tamanho' => 11,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true),
    );

    public function __construct($data = null) {
        if (empty($this->data))
            parent::__construct($data);
        $this->inserirDetalhe($data);
    }

    public function inserirDetalhe($data) {
        $class = 'CnabPHP\resources\\B' . RemessaAbstract::$banco . '\remessa\\' . RemessaAbstract::$layout . '\Registro3Q';
        $this->children[] = new $class($data);
        if (isset($data['codigo_desconto2']) ||
                isset($data['codigo_desconto3']) ||
                isset($data['vlr_multa']) ||
                isset($data['informacao_pagador'])) {
            $class = 'CnabPHP\resources\\B' . RemessaAbstract::$banco . '\remessa\\' . RemessaAbstract::$layout . '\Registro3R';
            $this->children[] = new $class($data);
        }
    }

}

?>
