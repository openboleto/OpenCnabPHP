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

namespace CnabPHP;

class DetalhaMovimentoRetorno {

    private $descricoes = array();
    private $banco;

    public function __construct($banco, $layout) {
        $this->banco = $banco;
        $stringMetodo = "preparaBanco" . $banco . "_" . $layout;
        $this->descricoes = $this->$stringMetodo();
    }

    public function preparaBanco033_240() {
        /**
         * Descrição dos comandos
         *      Banco Santander (033)
         *          Os códigos 03, 26 e 30 estão relacionados com a nota 40-a
         *          Os códigos 06, 09 e 17 estão relacionados com a nota 40-c
         */
        $descricaoMovimento = array(
            '02' => array('txt' => 'Entrada confirmada'),
            '03' => array('txt' => 'Entrada rejeitada'),
            '04' => array('txt' => 'Transferência de carteira/entrada'),
            '05' => array('txt' => 'Transferência de carteira/baixa'),
            '06' => array('txt' => 'Liquidação'),
            '09' => array('txt' => 'Baixa'),
            '11' => array('txt' => 'Títulos em carteira ( em ser)'),
            '12' => array('txt' => 'Confirmação recebimento instrução de abatimento'),
            '13' => array('txt' => 'Confirmação recebimento instrução de cancelamento abatimento'),
            '14' => array('txt' => 'Confirmação recebimento instrução alteração de vencimento'),
            '17' => array('txt' => 'Liquidação após baixa ou liquidação título não registrado'),
            '19' => array('txt' => 'Confirmação recebimento instrução de protesto'),
            '20' => array('txt' => 'Confirmação recebimento instrução de sustação/Não Protestar'),
            '23' => array('txt' => 'Remessa a cartorio ( aponte em cartorio)'),
            '24' => array('txt' => 'Retirada de cartorio e manutenção em carteira'),
            '25' => array('txt' => 'Protestado e baixado ( baixa por ter sido protestado)'),
            '26' => array('txt' => 'Instrução rejeitada'),
            '27' => array('txt' => 'Confirmação do pedido de alteração de outros dados'),
            '28' => array('txt' => 'Débito de tarifas/custas'),
            '29' => array('txt' => 'Ocorrências do Pagador'),
            '30' => array('txt' => 'Alteração de dados rejeitada'),
            '32' => array('txt' => 'Código de IOF inválido'),
            '51' => array('txt' => 'Título DDA reconhecido pelo Pagador'),
            '52' => array('txt' => 'Título DDA não reconhecido pelo Pagador'),
            '53' => array('txt' => 'Título DDA recusado pela CIP'),
            'A4' => array('txt' => 'Pagador DDA')
        );
        /**
         * Detalhes da descrição do comando de retorno
         *      Banco Santander (033) Códigos de rejeições de 01 a 64 associados ao códigos de movimento 03, 26 e 30 (nota 40)
         *
         */
        $detalheDescricaoMovimento1 = array(
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
        );
        /**
         * Detalhes da descrição do comando de retorno
         *      Banco Santander (033) Códigos de rejeições de 01 a 64 associados ao códigos de movimento 03, 26 e 30 (nota 40)
         *
         * @var array
         */
        $detalheDescricaoMovimento2 = array(
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
        );
        // insere os detalhes nos moviemtnos com detalhes segunda a docuemtação do banco
        $descricaoMovimento['03']['detalhes'] = $detalheDescricaoMovimento1;
        $descricaoMovimento['26']['detalhes'] = $detalheDescricaoMovimento1;
        $descricaoMovimento['30']['detalhes'] = $detalheDescricaoMovimento1;

        $descricaoMovimento['06']['detalhes'] = $detalheDescricaoMovimento2;
        $descricaoMovimento['09']['detalhes'] = $detalheDescricaoMovimento2;
        $descricaoMovimento['17']['detalhes'] = $detalheDescricaoMovimento2;

        return $descricaoMovimento;
    }

    public function getBanco() {
        return $this->banco;
    }

    public function getArrayTxtOcorrencias($codigoMovimento, $srtCodDetalhes) {
        $arrayCodDetalhes = str_split($srtCodDetalhes, 2);
        $arrayDescricoes = array();

        $arrayDescricoes[] = (empty($this->descricoes[$codigoMovimento])) ?
            "Código de Movimento n° {$codigoMovimento} não identificado!" :
            $this->descricoes[$codigoMovimento]['txt'];

        foreach ($arrayCodDetalhes as $key) {
            if ($key !== '00') {
                $arrayDescricoes[] = (array_key_exists($key, $this->descricoes[$codigoMovimento]['detalhes'])) ?
                    $this->descricoes[$codigoMovimento]['detalhes'][$key] :
                    "Detalhes do Movimento n° {$key} não identificado!";
            }
        }

        return $arrayDescricoes;
    }
}
