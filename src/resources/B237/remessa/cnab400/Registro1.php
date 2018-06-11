<?php

namespace CnabPHP\resources\B237\remessa\cnab400;

use CnabPHP\RegistroRemAbstract;
use CnabPHP\RemessaAbstract;
use CnabPHP\resources\generico\remessa\cnab400\Generico1;

class Registro1 extends Generico1 {

    protected $meta = array(
        'tipo_registro' => array(
            'tamanho' => 1,
            'default' => '1',
            'tipo' => 'int',
            'required' => true),
        'agencia_debito' => array(
            'tamanho' => 5,
            'default' => '0',
            'tipo' => 'int',
            'required' => true),
        'digito_agencia_debito' => array(
            'tamanho' => 1,
            'default' => '0',
            'tipo' => 'int',
            'required' => true),
        'razao_conta_corrente_pagador' => array(
            'tamanho' => 5,
            'default' => '0',
            'tipo' => 'int',
            'required' => true),
        'conta_corrente_pagador' => array(
            'tamanho' => 7,
            'default' => '0',
            'tipo' => 'int',
            'required' => true),
        'digito_conta_corrente_pagador' => array(
            'tamanho' => 1,
            'default' => '0',
            'tipo' => 'int',
            'required' => true),
        'filler0' => array(
            'tamanho' => 1,
            'default' => '0',
            'tipo' => 'int',
            'required' => false),
        'carteira_banco' => array(
            'tamanho' => 3,
            'default' => '0',
            'tipo' => 'int',
            'required' => true),
        'agencia' => array(
            'tamanho' => 5,
            'default' => '0',
            'tipo' => 'int',
            'required' => true),
        'conta' => array(
            'tamanho' => 7,
            'default' => '0',
            'tipo' => 'int',
            'required' => true),
        'conta_dv' => array(
            'tamanho' => 1,
            'default' => '0',
            'tipo' => 'int',
            'required' => true),
        'seu_numero' => array(
            'tamanho' => 25,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true),
        'codigo_banco_debito' => array(
            'tamanho' => 3,
            'default' => '0',
            'tipo' => 'int',
            'required' => true),
        'codigo_multa' => array(
            'tamanho' => 1,
            'default' => '0',
            'tipo' => 'int',
            'required' => true),
        'taxa_multa' => array(
            'tamanho' => 2,
            'default' => '0',
            'tipo' => 'decimal',
            'precision' => 2,
            'required' => true),
        'nosso_numero' => array(
            'tamanho' => 11,
            'default' => '0',
            'tipo' => 'int',
            'required' => true),
        'nosso_numero_dv' => array(
            'tamanho' => 1,
            'default' => '0',
            'tipo' => 'alfa',
            'required' => true),
        'vlr_bonificacao_dia' => array(
            'tamanho' => 8,
            'default' => '0',
            'tipo' => 'decimal',
            'precision' => 2,
            'required' => true),
        'emissao_boleto' => array(
            'tamanho' => 1,
            'default' => '2',
            'tipo' => 'int',
            'required' => true),
        'debito_automatico' => array(
            'tamanho' => 1,
            'default' => 'N',
            'tipo' => 'alfa',
            'required' => true),
        'filler6' => array(
            'tamanho' => 10,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true),
        'indicador_rateio' => array(
            'tamanho' => 1,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true),
        'endereco_aviso_debito' => array(// 2 = ignora
            'tamanho' => 1,
            'default' => '2',
            'tipo' => 'int',
            'required' => true),
        'filler7' => array(
            'tamanho' => 2,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true),
        'codigo_movimento' => array(
            'tamanho' => 2,
            'default' => 1,
            'tipo' => 'int',
            'required' => true),
        'numero_documento' => array(
            'tamanho' => 10,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true),
        'data_vencimento' => array(
            'tamanho' => 6,
            'default' => '',
            'tipo' => 'date',
            'required' => true),
        'valor' => array(
            'tamanho' => 11,
            'default' => '',
            'tipo' => 'decimal',
            'precision' => 2,
            'required' => true),
        'banco_cobrador' => array(
            'tamanho' => 3,
            'default' => '0',
            'tipo' => 'int',
            'required' => true),
        'agencia_cobradora' => array(
            'tamanho' => 5,
            'default' => '0',
            'tipo' => 'int',
            'required' => true),
        'especie_titulo' => array(
            'tamanho' => 2,
            'default' => '1',
            'tipo' => 'int',
            'required' => true),
        'aceite' => array(
            'tamanho' => 1,
            'default' => 'N',
            'tipo' => 'alfa',
            'required' => true),
        'data_emissao' => array(
            'tamanho' => 6,
            'default' => '',
            'tipo' => 'date',
            'required' => true),
        'cod_instrucao1' => array(
            'tamanho' => 2,
            'default' => '0',
            'tipo' => 'int',
            'required' => true),
        'cod_instrucao2' => array(
            'tamanho' => 2,
            'default' => '0',
            'tipo' => 'int',
            'required' => true),
        'vlr_juros' => array(
            'tamanho' => 11,
            'default' => '0',
            'tipo' => 'decimal',
            'precision' => 2,
            'required' => true),
        'data_desconto' => array(
            'tamanho' => 6,
            'default' => '0',
            'tipo' => 'date',
            'required' => true),
        'vlr_desconto' => array(
            'tamanho' => 11,
            'default' => '0',
            'tipo' => 'decimal',
            'precision' => 2,
            'required' => true),
        'vlr_IOF' => array(
            'tamanho' => 11,
            'default' => '0',
            'tipo' => 'decimal',
            'precision' => 2,
            'required' => true),
        'vlr_abatimento' => array(
            'tamanho' => 11,
            'default' => '0',
            'tipo' => 'decimal',
            'precision' => 2,
            'required' => true),
        'tipo_inscricao' => array(
            'tamanho' => 2,
            'default' => '',
            'tipo' => 'int',
            'required' => true),
        'numero_inscricao' => array(
            'tamanho' => 14,
            'default' => '',
            'tipo' => 'int',
            'required' => true),
        'nome_pagador' => array(
            'tamanho' => 40,
            'default' => '',
            'tipo' => 'alfa',
            'required' => true),
        'endereco_pagador' => array(
            'tamanho' => 40,
            'default' => '',
            'tipo' => 'alfa',
            'required' => true),
        '1_mensagem' => array(
            'tamanho' => 12,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true),
        'cep_pagador' => array(
            'tamanho' => 8,
            'default' => '',
            'tipo' => 'int',
            'required' => true),
        '2_mensagem' => array(
            'tamanho' => 60,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true),
        'numero_registro' => array(
            'tamanho' => 6,
            'default' => '0',
            'tipo' => 'int',
            'required' => true),
    );

    public function __construct($data = null) {
        if (empty($this->data))
            parent::__construct($data);
        $this->inserirMensagem($data);
    }

    public function inserirMensagem($data) {
        if (!empty($data['mensagem'])) {
            $class = 'CnabPHP\resources\\B' . RemessaAbstract::$banco . '\remessa\\' . RemessaAbstract::$layout . '\Registro2';
            $this->children[] = new $class($data);
        }
    }

    protected function set_endereco_pagador($value){
       $this->data['endereco_pagador']  = $value." ".$this->entryData['bairro_pagador'];
    }

    protected function set_taxa_multa($value) {
        $this->data['taxa_multa'] = $value;
        $this->data['codigo_multa'] = ($value > 0) ? 2 : 0;
    }

    protected function set_nosso_numero_dv($value) {
        $modulo11 = self::modulo11(str_pad($this->entryData['carteira_banco'], 2, 0, STR_PAD_LEFT) . str_pad($this->data['nosso_numero'], 11, 0, STR_PAD_LEFT), 7);
        switch ($modulo11['resto']) {
            case 1 :
                $this->data['nosso_numero_dv'] = 'P';
                break;
            case 0 :
                $this->data['nosso_numero_dv'] = " 0";
                break;
            default:
                $this->data['nosso_numero_dv'] = $modulo11['digito'];
        }
    }

    protected static function modulo11($num, $base = 9) {
        $fator = 2;

        $soma = 0;
// Separacao dos numeros.
        for ($i = strlen($num); $i > 0; $i--) {
//  Pega cada numero isoladamente.
            $numeros[$i] = substr($num, $i - 1, 1);
//  Efetua multiplicacao do numero pelo falor.
            $parcial[$i] = $numeros[$i] * $fator;
//  Soma dos digitos.
            $soma += $parcial[$i];
            if ($fator == $base) {
//  Restaura fator de multiplicacao para 2.
                $fator = 1;
            }
            $fator++;
        }
        $result = array(
            'digito' => ($soma * 10) % 11,
            // Remainder.
            'resto' => $soma % 11,
        );
        if ($result['digito'] == 10) {
            $result['digito'] = 0;
        }
        return $result;
    }

}
