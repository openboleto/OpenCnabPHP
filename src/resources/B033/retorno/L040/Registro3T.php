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
namespace CnabPHP\resources\B033\retorno\L040;

use CnabPHP\resources\generico\retorno\L040\Generico3;
use CnabPHP\RetornoAbstract;
use CnabPHP\DetalhaMovimentoRetorno;

class Registro3T extends Generico3
{

    /**
     * Descrição dos comandos
     *      Banco Santander (033)
     *          Os códigos 03, 26 e 30 estão relacionados com a nota 40-a
     *          Os códigos 06, 09 e 17 estão relacionados com a nota 40-c
     * @var type
     */
    protected $descricaoMovimento = array(
        '033' => array(
            '02' => 'Entrada confirmada',
            '03' => 'Entrada rejeitada',
            '04' => 'Transferência de carteira/entrada',
            '05' => 'Transferência de carteira/baixa',
            '06' => 'Liquidação',
            '09' => 'Baixa',
            '11' => 'Títulos em carteira ( em ser)',
            '12' => 'Confirmação recebimento instrução de abatimento',
            '13' => 'Confirmação recebimento instrução de cancelamento abatimento',
            '14' => 'Confirmação recebimento instrução alteração de vencimento',
            '17' => 'Liquidação após baixa ou liquidação título não registrado',
            '19' => 'Confirmação recebimento instrução de protesto',
            '20' => 'Confirmação recebimento instrução de sustação/Não Protestar',
            '23' => 'Remessa a cartorio ( aponte em cartorio)',
            '24' => 'Retirada de cartorio e manutenção em carteira',
            '25' => 'Protestado e baixado ( baixa por ter sido protestado)',
            '26' => 'Instrução rejeitada',
            '27' => 'Confirmação do pedido de alteração de outros dados',
            '28' => 'Débito de tarifas/custas',
            '29' => 'Ocorrências do Pagador',
            '30' => 'Alteração de dados rejeitada',
            '32' => 'Código de IOF inválido',
            '51' => 'Título DDA reconhecido pelo Pagador',
            '52' => 'Título DDA não reconhecido pelo Pagador',
            '53' => 'Título DDA recusado pela CIP',
            'A4' => 'Pagador DDA'
        )
    );

    /**
     * Detalhes da descrição do comando de retorno
     *      Banco Santander (033) Códigos de rejeições de 01 a 64 associados ao códigos de movimento 03, 26 e 30 (nota 40)
     *
     * @var array
     */
    protected $detalheDescricaoMovimento1 = array(
        '033' => array(
            '01' => 'Código do banco invalido',
            '02' => 'Código do registro detalhe inválido',
            '03' => 'Código do segmento invalido',
            '04' => 'Código do movimento não permitido para carteira',
            '05' => 'Código de movimento invalido',
            '06' => 'Tipo/número de inscrição do Beneficiário inválidos',
            '07' => 'Agencia/conta/DV invalido',
            '08' => 'Nosso numero invalido',
            '09' => 'Nosso numero duplicado',
            '10' => 'Carteira invalida',
            '11' => 'Forma de cadastramento do titulo invalida Se desconto, titulo rejeitado - operação de desconto / horário limite.',
            '12' => 'Tipo de documento invalido',
            '13' => 'Identificação da emissão do Boleto invalida',
            '14' => 'Identificação da distribuição do Boleto invalida',
            '15' => 'Características da cobrança incompatíveis',
            '16' => 'Data de vencimento invalida',
            '17' => 'Data de vencimento anterior a data de emissão',
            '18' => 'Vencimento fora do prazo de operação',
            '19' => 'Titulo a cargo de bancos correspondentes com vencimento inferior a xx dias',
            '20' => 'Valor do título invalido',
            '21' => 'Espécie do titulo invalida',
            '22' => 'Espécie não permitida para a carteira',
            '23' => 'Aceite invalido',
            '24' => 'Data de emissão inválida',
            '25' => 'Data de emissão posterior a data de entrada',
            '26' => 'Código de juros de mora inválido',
            '27' => 'Valor/Taxa de juros de mora inválido',
            '28' => 'Código de desconto inválido',
            '29' => 'Valor do desconto maior ou igual ao valor do título',
            '30' => 'Desconto a conceder não confere',
            '31' => 'Concessão de desconto - já existe desconto anterior',
            '32' => 'Valor do IOF',
            '33' => 'Valor do abatimento inválido',
            '34' => 'Valor do abatimento maior ou igual ao valor do título',
            '35' => 'Abatimento a conceder não confere',
            '36' => 'Concessão de abatimento - já existe abatimento anterior',
            '37' => 'Código para protesto inválido',
            '38' => 'Prazo para protesto inválido',
            '39' => 'Pedido de protesto não permitido para o título',
            '40' => 'Título com ordem de protesto emitida',
            '41' => 'Pedido de cancelamento/sustação para títulos sem instrução de protesto',
            '42' => 'Código para baixa/devolução inválido',
            '43' => 'Prazo para baixa/devolução inválido',
            '44' => 'Código de moeda inválido',
            '45' => 'Nome do Pagador não informado',
            '46' => 'Tipo /Número de inscrição do Pagador inválidos',
            '47' => 'Endereço do Pagador não informado',
            '48' => 'CEP inválido',
            '49' => 'CEP sem praça de cobrança (não localizado)',
            '50' => 'CEP referente a um Banco Correspondente',
            '51' => 'CEP incompatível com a unidade de federação',
            '52' => 'Unidade de federação inválida',
            '53' => 'Tipo/Número de inscrição do sacador/avalista inválidos',
            '54' => 'Sacador/Avalista não informado',
            '55' => 'Nosso número no Banco Correspondente não informado',
            '56' => 'Código do Banco Correspondente não informado',
            '57' => 'Código da multa inválido',
            '58' => 'Data da multa inválida',
            '59' => 'Valor/Percentual da multa inválido',
            '60' => 'Movimento para título não cadastrado',
            '61' => 'Alteração de agência cobradora/dv inválida',
            '62' => 'Tipo de impressão inválido',
            '63' => 'Entrada para título já cadastrado',
            '64' => 'Número da linha inválido',
            '65' => 'A espécie de título não permite a instrução',
            '72' => 'Entrada de título Sem Registro',
            '90' => 'Identificador/Quantidade de Parcelas de carnê invalido'
        )
    );

    /**
     * Detalhes da descrição do comando de retorno
     *      Banco Santander (033) Códigos de rejeições de 01 a 64 associados ao códigos de movimento 03, 26 e 30 (nota 40)
     *
     * @var array
     */
    protected $detalheDescricaoMovimento2 = array(
        '033' => array(
            '01' => 'Por saldo',
            '02' => 'Por conta',
            '03' => 'No próprio banco',
            '04' => 'Compensação eletrônica',
            '05' => 'Compensação convencional',
            '06' => 'Arquivo magnético',
            '07' => 'Após feriado local',
            '08' => 'Em cartório',
            '09' => 'Comandada banco',
            '10' => 'Comandada cliente arquivo',
            '11' => 'Comandada cliente on-line',
            '12' => 'Decurso prazo – cliente',
            '13' => 'Decurso prazo – banco',
        )
    );

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
            'default' => '3',
            'tipo' => 'int',
            'required' => true
		),
        'numero_registro' => array(
            'tamanho' => 5,
            'default' => '0',
            'tipo' => 'int',
            'required' => true
		),
        'seguimento' => array(
            'tamanho' => 1,
            'default' => 'T',
            'tipo' => 'alfa',
            'required' => true
		),
        'filler1' => array(
            'tamanho' => 1,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true
		),
        'codigo_movimento' => array(
            'tamanho' => 2,
            'default' => '01',
            'tipo' => 'int',
            'required' => true
		),
        // - ------------------ até aqui é igual para todo registro tipo 3
        'agencia' => array(
            'tamanho' => 4,
            'default' => '',
            'tipo' => 'int',
            'required' => true
		),
        'agencia_dv' => array(
            'tamanho' => 1,
            'default' => '',
            'tipo' => 'alfa',
            'required' => true
		),
        'conta' => array(
            'tamanho' => 9,
            'default' => '0',
            'tipo' => 'int',
            'required' => true
        ),
        'conta_dv' => array(
            'tamanho' => 1,
            'default' => '',
            'tipo' => 'int',
            'required' => true
        ),
        'filler2' => array(
            'tamanho' => 8,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true
		),
        'nosso_numero' => array(
            'tamanho' => 13,
            'default' => '',
            'tipo' => 'int',
            'required' => true
		),
        'carteira' => array(
            'tamanho' => 1,
            'default' => '0',
            'tipo' => 'int',
            'required' => true
		),
        'seu_numero' => array(
            'tamanho' => 15,
            'default' => '',
            'tipo' => 'int',
            'required' => true
		),
        'data_vencimento' => array(
            'tamanho' => 8,
            'default' => '',
            'tipo' => 'date',
            'required' => true
		),
        'vlr_nominal' => array(
            'tamanho' => 13,
            'default' => '0',
            'tipo' => 'decimal',
            'precision' => 2,
            'required' => true
		),
        'cod_banco_receb' => array(
            'tamanho' => 3,
            'default' => '0',
            'tipo' => 'int',
            'required' => true
        ),
        'agencia_recebedora' => array(
            'tamanho' => 4,
            'default' => ' ',
            'tipo' => 'int',
            'required' => true
		),
        'dv_agencia_receb' => array(
            'tamanho' => 1,
            'default' => '',
            'tipo' => 'int',
            'required' => true
		),
        'identificacao_titulo_empresa' => array(
            'tamanho' => 25,
            'default' => '',
            'tipo' => 'alfa',
            'required' => true
		),
        'codigo_moeda' => array(
            'tamanho' => 2,
            'default' => '',
            'tipo' => 'int',
            'required' => true
		),
        'tipo_inscricao' => array(
            'tamanho' => 1,
            'default' => '0',
            'tipo' => 'int',
            'required' => true
		),
        'numero_inscricao' => array(
            'tamanho' => 15,
            'default' => '0',
            'tipo' => 'int',
            'required' => true
		),
        'nome_pagador' => array(
            'tamanho' => 40,
            'default' => '',
            'tipo' => 'alfa',
            'required' => true
		),
        'conta_cobranca' => array(
            'tamanho' => 10,
            'default' => '',
            'tipo' => 'alfa',
            'required' => true
		),
        'vlr_tarifa' => array(
            'tamanho' => 13,
            'default' => '',
            'tipo' => 'decimal',
            'precision' => 2,
            'required' => true
		),
        'codigo_ocorrencia' => array(
            'tamanho' => 10,
            'default' => '0',
            'tipo' => 'alfa', // Manual diz int, mas usado como alfa para manter os zeros à esquerda
            'required' => true
		),
        'filler3' => array(
            'tamanho' => 22,
            'default' => '0',
            'tipo' => 'alfa',
            'required' => true
		),
    );

    public function __construct($data = null)
    {
        if (empty($this->data)) {
            parent::__construct($data);
        }
        $this->inserirDetalhe($data);
    }

    public function inserirDetalhe($data)
    {
        RetornoAbstract::$linesCounter++;
        if (isset(RetornoAbstract::$lines[RetornoAbstract::$linesCounter])) {
            $class = 'CnabPHP\resources\\B' . RetornoAbstract::$banco . '\retorno\\' . RetornoAbstract::$layout . '\Registro3U';
            $this->children[] = new $class(RetornoAbstract::$lines[RetornoAbstract::$linesCounter]);
            if (isset(RetornoAbstract::$lines[RetornoAbstract::$linesCounter + 1]) &&
                substr(RetornoAbstract::$lines[RetornoAbstract::$linesCounter + 1], 13, 1) == "Y") {
                RetornoAbstract::$linesCounter++;
                $class = 'CnabPHP\resources\\B' . RetornoAbstract::$banco . '\retorno\\' . RetornoAbstract::$layout . '\Registro3Y';
                $this->children[] = new $class(RetornoAbstract::$lines[RetornoAbstract::$linesCounter]);
            }
        }
    }

    public function get_data_ocorrencia()
    {
        $r3u = $this->R3U;
        return $r3u->___get('data_ocorrencia');
    }

    public function get_vlr_pago()
    {
        $r3u = $this->R3U;
        return $r3u->___get('vlr_pago');
    }

    public function get_codigo_movimento()
    {
        $r3u = $this->R3U;
        return $r3u->codigo_movimento;
    }

    /**
     * Retorna um array com a lista das descrições de comando e detalhes do
     * comando para o movimento
     * 
     * @return array
     */
    public function get_arrayOcorrencias(){
        $detalhes = new DetalhaMovimentoRetorno('033','240');

        $codigoMovimento = str_pad($this->data['codigo_movimento'], 2, 0, STR_PAD_LEFT);

        return $detalhes->getArrayTxtOcorrencias($codigoMovimento, $this->data['codigo_ocorrencia']);
    }
}
