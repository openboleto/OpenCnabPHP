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
namespace CnabPHP\resources\B136\retorno\L400;

use CnabPHP\resources\generico\retorno\L400\Generico1;
use CnabPHP\RetornoAbstract;

class Registro1 extends Generico1
{
    public $trailler;

    /**
     * Posição 109 a 110 Códigos de Movimento:
     */
    private $listaDescricaoMovimento = array(
        '01' => 'Pago (Título protestado pago em cartório)',
        '02' => 'Instrução Confirmada',
        '03' => 'Instrução Rejeitada',
        '04' => 'Sustado Judicial (Título protestado sustado judicialmente)',
        '06' => 'Liquidação Normal',
        '07' => 'Liquidação em Condicional (Título liquidado em cartório com cheque do próprio devedor)',
        '08' => 'Sustado Definitivo (Título protestado sustado judicialmente)',
    );
    /**
     * Posição 319 a 326 Códigos de Complemento do Movimento:
     */
    private $listaComplementoMovimento = array(
        '00' => 'Sem Complemento a informar.',
        '01' => 'Código do Banco Inválido.',
        '04' => 'Código de Movimento não permitido para a carteira.',
        '05' => 'Código de Movimento Inválido.',
        '06' => 'Número de Inscrição do Beneficiário Inválido.',
        '07' => 'Agência - Conta Inválida.',
        '08' => 'Nosso Número Inválido.',
        '09' => 'Nosso Número Duplicado.',
        '10' => 'Carteira inválida.',
        '12' => 'Tipo de Documento Inválido.',
        '15' => 'Data de Vencimento inferior a 5 dias uteis para remessa gráfica.',
        '16' => 'Data de Vencimento Inválida.',
        '17' => 'Data de Vencimento Anterior à Data de Emissão.',
        '18' => 'Vencimento fora do Prazo de Operação.',
        '20' => 'Valor do Título Inválido.',
        '24' => 'Data de Emissão Inválida.',
        '25' => 'Data de Emissão Posterior à data de Entrega.',
        '26' => 'Código de juros inválido.',
        '27' => 'Valor de juros inválido.',
        '28' => 'Código de Desconto inválido.',
        '29' => 'Valor de Desconto inválido.',
        '30' => 'Alteração de Dados Rejeitada.',
        '33' => 'Valor de Abatimento Inválido.',
        '34' => 'Valor do Abatimento Maior ou Igual ao Valor do título.',
        '37' => 'Código para Protesto Inválido.',
        '38' => 'Prazo para Protesto Inválido.',
        '39' => 'Pedido de Protesto Não Permitido para o Título.',
        '40' => 'Título com Ordem de Protesto Emitida.',
        '41' => 'Pedido de Cancelamento/Sustação para Títulos sem Instrução de Protesto.',
        '45' => 'Nome do Pagador não informado.',
        '46' => 'Número de Inscrição do Pagador Inválido.',
        '47' => 'Endereço do Pagador Não Informado.',
        '48' => 'CEP Inválido.',
        '52' => 'Unidade Federativa Inválida.',
        '57' => 'Código de Multa inválido.',
        '58' => 'Data de Multa inválido.',
        '59' => 'Valor / percentual de Multa inválido.',
        '60' => 'Movimento para Título não Cadastrado.',
        '63' => 'Entrada para Título já Cadastrado.',
        '79' => 'Data de Juros inválida.',
        '80' => 'Data de Desconto inválida.',
        '86' => 'Seu Número Inválido.',
        'A5' => 'Título Liquidado.',
        'A8' => 'Valor do Abatimento Inválido para Cancelamento.',
        'C0' => 'Sistema Intermitente - Entre em contato com sua Cooperativa.',
        'C1' => 'Situação do título Aberto.',
        'C3' => 'Status do Borderô Inválido.',
        'C4' => 'Nome do Beneficiário Inválido.',
        'C5' => 'Documento Inválido.',
        'C6' => 'Instrução não Atualiza Cadastro do Título.',
        'C7' => 'Título não registrado na CIP.',
        'C8' => 'Situação do Borderô inválida.',
        'C9' => 'Título inválido conforme situação CIP.',
        'E0' => 'CEP indicado para o endereço do Pagador não compatível com os Correios.',
        'E1' => 'Logradouro para o endereço do Pagador não compatível com os Correios, para o CEP indicado.',
        'E2' => 'Tipo de logradouro para o endereço do Pagador não compatível com os Correios, para o CEP indicado.',
        'E3' => 'Bairro para o endereço do Pagador não compatível com os Correios, para o CEP indicado.',
        'E4' => 'Cidade para o endereço do Pagador não compatível com os Correios, para o CEP indicado.',
        'E5' => 'UF para o endereço do Pagador não compatível com os Correios, para o CEP indicado.',
        'E6' => 'Dados do segmento/registro opcional de endereço do pagador, incompletos no arquivo remessa.'
    );

    /**
     * Códigos de Complemento do Movimento, relacionados a Protesto de título:
     */
    private $listaComplementoMovimentoProtesto = array(
        '101' => 'Data da apresentação inferior à data de vencimento.',
        '102' => 'Falta de comprovante da prestação de serviço.',
        '103' => 'Nome do sacado incompleto/incorreto.',
        '104' => 'Nome do cedente incompleto/incorreto.',
        '105' => 'Nome do sacador incompleto/incorreto.',
        '106' => 'Endereço do sacado insuficiente.',
        '107' => 'CNPJ/CPF do sacado inválido/incorreto.',
        '108' => 'CNPJ/CPF incompatível c/ o nome do sacado/sacador/avalista.',
        '109' => 'CNPJ/CPF do sacado incompatível com o tipo de documento.',
        '110' => 'CNPJ/CPF do sacador incompatível com a espécie.',
        '111' => 'Título aceito sem a assinatura do sacado.',
        '112' => 'Título aceito rasurado ou rasgado.',
        '113' => 'Título aceito – falta título (ag ced: enviar).',
        '114' => 'CEP incorreto.',
        '115' => 'Praça de pagamento incompatível com endereço.',
        '116' => 'Falta número do título.',
        '117' => 'Título sem endosso do cedente ou irregular.',
        '118' => 'Falta data de emissão do título.',
        '119' => 'Título aceito: valor por extenso diferente do valor por numérico.',
        '120' => 'Data de emissão posterior ao vencimento.',
        '121' => 'Espécie inválida para protesto.',
        '122' => 'CEP do sacado incompatível com a praça de protesto.',
        '123' => 'Falta espécie do título.',
        '124' => 'Saldo maior que o valor do título.',
        '125' => 'Tipo de endosso inválido.',
        '126' => 'Devolvido por ordem judicial.',
        '127' => 'Dados do título não conferem com disquete.',
        '128' => 'Sacado e Sacador/Avalista são a mesma pessoa.',
        '129' => 'Corrigir a espécie do título.',
        '130' => 'Aguardar um dia útil após o vencimento para protestar.',
        '131' => 'Data do vencimento rasurada.',
        '132' => 'Vencimento – extenso não confere com número.',
        '133' => 'Falta data de vencimento no título.',
        '134' => 'DM/DMI sem comprovante autenticado ou declaração.',
        '135' => 'Comprovante ilegível para conferência e microfilmagem.',
        '136' => 'Nome solicitado não confere com emitente ou sacado.',
        '137' => 'Confirmar se são 2 emitentes. Se sim, indicar os dados dos 2.',
        '138' => 'Endereço do sacado igual ao do sacador ou do portador.',
        '139' => 'Endereço do apresentante incompleto ou não informado.',
        '140' => 'Rua / Número inexistente no endereço.',
        '141' => 'Informar a qualidade do endosso (M ou T).',
        '142' => 'Falta endosso do favorecido para o apresentante.',
        '143' => 'Data da emissão rasurada.',
        '144' => 'Protesto de cheque proibido – motivo 20/25/28/30 ou 35.',
        '145' => 'Falta assinatura do emitente no cheque.',
        '146' => 'Endereço do emitente no cheque igual ao do banco sacado.',
        '147' => 'Falta o motivo da devolução no cheque ou motivo ilegível.',
        '148' => 'Falta assinatura do sacador no título.',
        '149' => 'Nome do apresentante não informado/incompleto/incorreto.',
        '150' => 'Erro de preenchimento do título.',
        '151' => 'Título com direito de regresso vencido.',
        '152' => 'Título apresentado em duplicidade.',
        '153' => 'Título já protestado.',
        '154' => 'Letra de Câmbio vencida – falta aceite do sacado.',
        '155' => 'Título – falta tradução por tradutor público.',
        '156' => 'Falta declaração de saldo assinada no título.',
        '157' => 'Contrato de Câmbio – falta conta gráfica.',
        '158' => 'Ausência do Documento Físico.',
        '159' => 'Sacado Falecido.',
        '160' => 'Sacado Apresentou Quitação do Título.',
        '161' => 'Título de outra jurisdição territorial.',
        '162' => 'Título com emissão anterior à concordata do sacado.',
        '163' => 'Sacado consta na lista de falência.',
        '164' => 'Apresentante não aceita publicação de edital.',
        '165' => 'Dados do sacador em branco ou inválido.',
        '166' => 'Título sem autorização para protesto por edital.',
        '167' => 'Valor divergente entre título e comprovante.',
        '168' => 'Condomínio não pode ser protestado para fins falimentares.',
        '169' => 'Vedada a intimação por edital para protesto falimentar.',
        '170' => 'Dados do Cedente em branco ou inválido.',
    );

    /**
     * Posição 327 a 328 Códigos de Tipo de Instrução Origem
     */
    private $listaTipoTipoInstrucaoOrigem = [
        '01' => 'Remessa',
        '02' => 'Pedido de Baixa',
        '04' => 'Concessão de Abatimento',
        '05' => 'Cancelamento de Abatimento',
        '06' => 'Alteração de vencimento',
        '08' => 'Alteração de Seu Número',
        '09' => 'Protestar',
        '10' => 'Baixa por Decurso de Prazo - Solicitação CIP',
        '11' => 'Sustar Protesto e Manter em Carteira',
    ];

    protected $meta = array(
        'tipo_registro' => array(
            'tamanho' => 1,
            'default' => 1,
            'tipo' => 'int',
            'required' => true
        ),
        'tipo_inscricao_empresa' => array(
            'tamanho' => 2,
            'default' => '',
            'tipo' => 'int',
            'required' => true
        ),
        'numero_inscricao_empresa' => array(
            'tamanho' => 14,
            'default' => '',
            'tipo' => 'int',
            'required' => true
        ),
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
            'tamanho' => 8,
            'default' => '',
            'tipo' => 'int',
            'required' => true
        ),
        'conta_dv' => array(
            'tamanho' => 1,
            'default' => '',
            'tipo' => 'alfa',
            'required' => true
        ),
        'codigo_beneficiario' => array(
            'tamanho' => 14,
            'default' => ' ',
            'tipo' => 'int',
            'required' => true
        ),
        'nosso_numero' => array(
            'tamanho' => 17,
            'default' => '',
            'tipo' => 'int',
            'required' => true
        ),
        'brancos1' => array(
            'tamanho' => 11,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true
        ),
        'zeros1' => array(
            'tamanho' => 1,
            'default' => '0',
            'tipo' => 'int',
            'required' => true
        ),
        'fixo1' => array(
            'tamanho' => 1,
            'default' => 1, // 1 - SIMPLES
            'tipo' => 'int',
            'required' => true
        ),
        'brancos2' => array(
            'tamanho' => 10,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true
        ),
        'fixo2' => array(
            'tamanho' => 3,
            'default' => '019',
            'tipo' => 'alfa',
            'required' => true
        ),
        'zeros2' => array(
            'tamanho' => 18,
            'default' => '000000000000000000',
            'tipo' => 'int',
            'required' => true
        ),
        'fixo3' => array(
            'tamanho' => 2,
            'default' => 18,
            'tipo' => 'int',
            'required' => true
        ),
        'codigo_movimento' => array(
            'tamanho' => 2,
            'default' => '02',
            'tipo' => 'int',
            'required' => true
        ),
        'data_liquidacao' => array(
            'tamanho' => 6,
            'default' => '0',
            'tipo' => 'date',
            'required' => true
        ),
        'brancos3' => array(
            'tamanho' => 30,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true
        ),
        'data_vencimento' => array(
            'tamanho' => 6,
            'default' => '',
            'tipo' => 'date',
            'required' => true
        ),
        'valor' => array(
            'tamanho' => 11,
            'default' => '',
            'tipo' => 'decimal',
            'precision' => 2,
            'required' => true
        ),
        'codigo_banco' => array(
            'tamanho' => 3,
            'default' => '136',
            'tipo' => 'alfa',
            'required' => true
        ),
        'agencia_cobradora' => array(
            'tamanho' => 4,
            'default' => '0',
            'tipo' => 'alfa',
            'required' => true
        ),
        'agencia_cobradora_dv' => array(
            'tamanho' => 1,
            'default' => '0',
            'tipo' => 'alfa',
            'required' => true
        ),
        'brancos4' => array(
            'tamanho' => 2,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true
        ),
        'data_credito' => array(
            'tamanho' => 6,
            'default' => '',
            'tipo' => 'date',
            'required' => true
        ),
        'vlr_tarifa' => array(
            'tamanho' => 5,
            'default' => '',
            'tipo' => 'decimal',
            'precision' => 2,
            'required' => true
        ),
        'brancos5' => array(
            'tamanho' => 39,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true
        ),
        'vlr_abatimento' => array(
            'tamanho' => 11,
            'default' => '',
            'tipo' => 'decimal',
            'precision' => 2,
            'required' => true
        ),
        'vlr_desconto' => array(
            'tamanho' => 11,
            'default' => '',
            'tipo' => 'decimal',
            'precision' => 2,
            'required' => true
        ),
        'vlr_pago' => array(
            'tamanho' => 11,
            'default' => '',
            'tipo' => 'decimal',
            'precision' => 2,
            'required' => true
        ),
        'vlr_juros' => array(
            'tamanho' => 11,
            'default' => '',
            'tipo' => 'decimal',
            'precision' => 2,
            'required' => true
        ),
        'seu_numero' => array(
            'tamanho' => 26,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true
        ),
        'vlr_liquido' => array(
            'tamanho' => 11,
            'default' => '',
            'tipo' => 'decimal',
            'precision' => 2,
            'required' => true
        ),
        'complemento_movimento' => array(
            'tamanho' => 8,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true
        ),
        'tipo_instrucao_origem' => array(
            'tamanho' => 2,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true
        ),
        'brancos6' => array(
            'tamanho' => 66,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true
        ),
        'numero_registro' => array(
            'tamanho' => 6,
            'default' => '0',
            'tipo' => 'int',
            'required' => true
        ),
    );

    public function __construct($linhaTxt)
    {
        parent::__construct($linhaTxt);

        RetornoAbstract::$linesCounter++;
    }

    /**
     * Retorna um array contendo as descrições das ocorrências encontradas no layout
     * @return type
     */
    public function get_arrayOcorrencias()
    {
        $codMovimento = str_pad($this->__get('codigo_movimento'), 2, 0, STR_PAD_LEFT);
        return [
            'codigo_movimento' => (empty($this->listaDescricaoMovimento[$this->__get('codigo_movimento')])) ?
                '' :
                'Cód. Movimento: ' . $codMovimento . ' ' . $this->listaDescricaoMovimento[$codMovimento],

            'complemento_movimento' => empty($this->listaComplementoMovimento[$this->__get('complemento_movimento')]) ?
                '' :
                'Complemento Movimento: ' . $this->__get('complemento_movimento') . ' ' . $this->listaComplementoMovimento[$this->__get('complemento_movimento')],

            'tipo_instrucao_origem' => empty($this->listaTipoTipoInstrucaoOrigem[$this->__get('tipo_instrucao_origem')]) ?
                '' :
                'Instrução Origem: ' . $this->__get('tipo_instrucao_origem') . ' ' . $this->listaTipoTipoInstrucaoOrigem[$this->__get('tipo_instrucao_origem')],
        ];
    }
}
