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

namespace CnabPHP\resources\B336\retorno\L400;

use CnabPHP\resources\generico\retorno\L400\Generico1;
use CnabPHP\RetornoAbstract;

class Registro1 extends Generico1 {

    public $trailler;
    protected $meta = array(
        'tipo_registro' => array( //Tipo de Registro: 1/1T1
            'tamanho' => 1,
            'default' => '1',
            'tipo' => 'int',
            'required' => true),
        'tipo_inscricao_empresa' => array(//Tipo Inscrição Empresa: 2/3T2
            'tamanho' => 2,
            'default' => '',
            'tipo' => 'int',
            'required' => true),
        'numero_inscricao' => array(//CNPJ da Empresa: 4/17T14
            'tamanho' => 14,
            'default' => '',
            'tipo' => 'alfa',
            'required' => true),
        'codigo_empresa' => array(// Código da Empresa: 18/29T12
            'tamanho' => 12,
            'default' => '0',
            'tipo' => 'alfa',
            'required' => true),
        'filler1' => array(//Uso do Banco 30/37T8
            'tamanho' => 8,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true),
        //Uso da empresa vai de 38 a 62 compoe na remessa agencia +dv +conta+dv+branco com 11 caracteres
        'agencia' => array(//Uso da Empresa 1de5: 38/62T25
            'tamanho' => 4,
            'default' => '0',
            'tipo' => 'int',
            'required' => true
        ),
        'agencia_dv' => array(//Uso da Empresa 2de5: 38/62T25
            'tamanho' => 1,
            'default' => '0',
            'tipo' => 'int',
            'required' => true
        ),
        'conta' => array(//Uso da Empresa 3de5: 38/62T25
            'tamanho' => 8,
            'default' => '0',
            'tipo' => 'int',
            'required' => true
        ),
        'conta_dv' => array(//Uso da Empresa 4de5: 38/62T25
            'tamanho' => 1,
            'default' => '0',
            'tipo' => 'int',
            'required' => true
        ),
        'filler2' => array(//Uso da Empresa 5de5: 38/62T25
            'tamanho' => 11,
            'default' => '0',
            'tipo' => 'alfa',
            'required' => true
        ),
        'nosso_numero_completo' => array(//Nosso Numero 1de2: 63/74T12
            'tamanho' => 12,
            'default' => '0',
            'tipo' => 'alfa',
            'required' => true),
        'nosso_numero_complementar' => array(//Nosso Numero complementar: 75/86T12
            'tamanho' => 12,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true),
        'filler3' => array(//Uso do Banco: 87/106T20
            'tamanho' =>20,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true
        ),
        'carteira' => array(//Codigo da Carteira: 107/108T2
            'tamanho' => 2,
            'default' => '',
            'tipo' => 'int',
            'required' => true),
        'codigo_movimento' => array(// Codigo da Ocorrencia: 109/110T2
            'tamanho' => 2,
            'default' => '01', // entrada de titulo
            'tipo' => 'alfa',
            'required' => true),
        'data_ocorrencia' => array(// Data da Ocorrencia: 111/116T6
            'tamanho' => 6,
            'default' => '', // entrada de titulo
            'tipo' => 'date',
            'required' => true),
        'seu_numero' => array( //Seu Numero: 117/126T10
            'tamanho' => 10,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true),
        'filler4' => array(//Uso do Banco: 127/146T20
            'tamanho' =>20,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true
        ),
        'data_vencimento' => array(//Data Vencimento: 147/152T6
            'tamanho' => 6,
            'default' => '',
            'tipo' => 'date',
            'required' => true),
        'valor' => array(          //Valor do Titulo: 153/165T13
            'tamanho' => 11,
            'default' => '',
            'tipo' => 'decimal',
            'precision' => 2,
            'required' => true),
        'codigo_banco_cobrador' => array(  //Banco Cobrador: 166/168T3
            'tamanho' => 3,
            'default' => '237',
            'tipo' => 'int',
            'required' => true),
        'agencia_cobradora' => array(//Agencia Cobradora: 169/173T5
            'tamanho' => 5,
            'default' => '0',
            'tipo' => 'alfa',
            'required' => true),
        'filler5' => array(  //Uso do Banco: 174/175T2
            'tamanho' => 2,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true),
        'vlr_despesas_cobranca' => array(//Valor Tarifa e Custas Cobrança: 176/188T13
            'tamanho' => 11,
            'default' => '',
            'tipo' => 'decimal',
            'precision' => 2,
            'required' => true),
        'filler6' => array(  //Uso do Banco: 189/227T39
            'tamanho' => 39,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true),
        'vlr_abatimento' => array(//Valor Abatimento: 228/240T13
            'tamanho' => 11,
            'default' => '',
            'tipo' => 'decimal',
            'precision' => 2,
            'required' => true),
        'vlr_desconto' => array(//Valor Descont: 241/253T13
            'tamanho' => 11,
            'default' => '',
            'tipo' => 'decimal',
            'precision' => 2,
            'required' => true),
        'vlr_pago' => array(//Valor Principal: 254/266T13
            'tamanho' => 11,
            'default' => '',
            'tipo' => 'decimal',
            'precision' => 2,
            'required' => true),
        'vlr_juros_multa' => array(//Valor Juros: 267/279T13
            'tamanho' => 11,
            'default' => '',
            'tipo' => 'decimal',
            'precision' => 2,
            'required' => true),
        'vlr_outros' => array(// Valor Outros Acréscimos: 280/292T13
            'tamanho' => 11,
            'default' => '',
            'tipo' => 'decimal',
            'precision' => 2,
            'required' => true),
        'filler7' => array(  //Brancos: 293/2947T2
            'tamanho' => 2,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true),
        'filler8' => array(  //Uso do Banco: 295/295T1
            'tamanho' => 1,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true),
        'data_credito' => array(//Data Crédito: 296/301T6
            'tamanho' => 6,
            'default' => '',
            'tipo' => 'date',
            'required' => true),
        'filler9' => array(  //Uso do Banco: 302/265T64
            'tamanho' => 64,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true),
        'motivo_rejeicao' => array(//Posição Campos Inválidos: 366/377T12
            'tamanho' => 12,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true),
        'codigo_erro' => array(//Posição Campos Inválidos: 378/393T16
            'tamanho' => 16,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true),
        'filler10' => array(  //Uso do Banco: 302/265T64
            'tamanho' => 64,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true),
        'numero_registro' => array(//Sequencial: 395/400T6
            'tamanho' => 6,
            'default' => '0',
            'tipo' => 'int',
            'required' => true),
    );

    public function __construct($linhaTxt) {
        parent::__construct($linhaTxt);

        RetornoAbstract::$linesCounter++;
    }

    /*
      metodo get_R3U
      metodo que expõe esse registro como se fosse o R3U da caixa
     */
    public function get_R3U() {
        return $this;
    }

    /*
      metodo get_vlr_liquido
      metodo que expõe esse vlr_liquido como se fosse o da caixa
    */
    public function get_vlr_liquido() {
        return $this->vlr_pago;
    }

    public function get_nosso_numero() {
        return substr($this->nosso_numero_completo, 0, -1);//Remove o digito verificador
    }

    public function get_nosso_numero_dv() {
        return substr($this->nosso_numero_completo, -1); //Extrai o digito verificador
    }

    /*
      metodo get_conta
      metodo que expõe o valor do campo uso da empresa ou do campo codigo empresa
    */
    public function get_conta() {
        //Prioriza o Codigo da empresa pois o conta_dv pode nao vim do campo uso da empresa no retorno
        if (trim($this->codigo_empresa) <> '') {
            return (int)substr($this->codigo_empresa, 0, -1);
        }

        return $this->conta;
    }

    /*
      metodo get_conta_dv
      metodo que expõe o valor do campo uso da empresa ou do campo codigo empresa
    */
    public function get_conta_dv() {
        //Prioriza o Codigo da empresa pois o conta_dv pode nao vim do campo uso da empresa no retorno
        if (trim($this->codigo_empresa) <> '') {
            return (int)substr($this->codigo_empresa, -1);
        }

        return $this->conta_dv;
    }

    /*
      metodo get_codigo_banco
      metodo retorna o codigo do banco com valor fixo 336 para manter a compatibilidade
    */
    public function get_codigo_banco() {
        return 336;
    }

    /*
      metodo get_nome_pagador
      metodo retorna o nome do pagador vazio pois CNAB400 nao retorna ele
    */
    public function get_nome_pagador() {
        return '';
    }

    /*
      metodo get_nome_pagador
      metodo retorna o vencimento nulo pois CNAB400 nao retorna ele
    */
    public function get_vencimento() {
        return null;
    }
}