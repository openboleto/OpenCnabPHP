<?php

namespace CnabPHP\resources\B748\remessa\cnab400;

use CnabPHP\RegistroRemAbstract;
use CnabPHP\RemessaAbstract;
use CnabPHP\resources\generico\remessa\cnab400\Generico1;

class Registro1 extends Generico1 {

    protected $meta = array(
        'tipo_registro' => array(
            'tamanho' => 1,
            'default' => '1',
            'tipo' => 'int',
            'required' => true
        ),
        'tipo_servico' => array(
            'tamanho' => 1,
            'default' => 'A',
            'tipo' => 'alfa',
            'required' => true
        ),
        'tipo_carteira' => array( // nomeado assim por ser uma constante para arquivos com registro, e o declinio de sem registro e impressão pelo banco
            'tamanho' => 1,
            'default' => 'A',
            'tipo' => 'alfa',
            'required' => true
        ),
        'tipo_impressao' => array( // fixo 'A' para impressão normal, aparentemente só usado se for impressão pelo banco
            'tamanho' => 1,
            'default' => 'A',
            'tipo' => 'alfa',
            'required' => true
        ),
        'filler0' => array(
            'tamanho' => 12,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true
        ),
        'tipo_moeda' => array(
            'tamanho' => 1,
            'default' => 'A',
            'tipo' => 'alfa',
            'required' => true
        ),
        'tipo_desconto' => array( // fixo 'B' por percentual, se quizer mudar inclua no array inserirDetalhe com a instrução 'A'
            'tamanho' => 1,
            'default' => 'B',
            'tipo' => 'alfa',
            'required' => false
        ),
        'tipo_juros' => array( // fixo 'B' por percentual, se quizer mudar inclua no array inserirDetalhe com a instrução 'A'
            'tamanho' => 1,
            'default' => 'B',
            'tipo' => 'alfa',
            'required' => true
        ),
        'filler01' => array(
            'tamanho' => 28,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true
        ),
        'nosso_numero' => array(
            'tamanho' => 9,
            'default' => '0',
            'tipo' => 'alfa',
            'required' => true
        ),
        'filler02' => array(
            'tamanho' => 6,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true
        ),
        'data_instrucao' => array(
            'tamanho' => 8,
            'default' => '',
            'tipo' => 'dateReverse',
            'required' => true
        ),
        'campo_alterado' => array(
            'tamanho' => 1,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true
        ),
        'postagem_titulo' => array(
            'tamanho' => 1,
            'default' => 'N',
            'tipo' => 'alfa',
            'required' => true
        ),
        'filler03' => array(
            'tamanho' => 1,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true
        ),
        'emissao_boleto' => array( // impressão do boleto pelo cliente
            'tamanho' => 1,
            'default' => 'B',
            'tipo' => 'alfa',
            'required' => true
        ),
        'parcela' => array(
            'tamanho' => 2,
            'default' => '0',
            'tipo' => 'int',
            'required' => true
        ),
        'total_parcela' => array(
            'tamanho' => 2,
            'default' => '0',
            'tipo' => 'int',
            'required' => true
        ),
        'filler04' => array(
            'tamanho' => 4,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true
        ),
        'valor_desconto_dia' => array(
            'tamanho' => 8,
            'default' => '0',
            'tipo' => 'decimal',
            'precision' => 2,
            'required' => true
        ),
        'taxa_multa' => array(
            'tamanho' => 2,
            'default' => '0',
            'tipo' => 'decimal',
            'precision' => 2,
            'required' => true
        ),
        'filler05' => array(
            'tamanho' => 12,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true
        ),
        'codigo_movimento' => array( // 2 = ignora
            'tamanho' => 2,
            'default' => '1',
            'tipo' => 'int',
            'required' => true
        ),
        'seu_numero' => array(
            'tamanho' => 10,
            'default' => ' ',
            'tipo' => 'int',
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
        'filler06' => array(
            'tamanho' => 9,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true
        ),
        'especie_titulo' => array(
            'tamanho' => 1,
            'default' => 'C',
            'tipo' => 'alfa',
            'required' => true
        ),
        'aceite' => array(
            'tamanho' => 1,
            'default' => 'N',
            'tipo' => 'alfa',
            'required' => true
        ),
        'data_emissao' => array(
            'tamanho' => 6,
            'default' => '0',
            'tipo' => 'date',
            'required' => true
        ),
        'protestar' => array(
            'tamanho' => 2,
            'default' => '0',
            'tipo' => 'int',
            'required' => true
        ),
        'prazo_protesto' => array(
            'tamanho' => 2,
            'default' => '0',
            'tipo' => 'int',
            'required' => true
        ),
        'taxa_juros' => array(
            'tamanho' => 11,
            'default' => '0',
            'tipo' => 'decimal',
            'precision' => 2,
            'required' => true
        ),
        'data_desconto' => array(
            'tamanho' => 6,
            'default' => '0',
            'tipo' => 'date',
            'required' => true
        ),
        'taxa_desconto' => array(
            'tamanho' => 11,
            'default' => '0',
            'tipo' => 'decimal',
            'precision' => 2,
            'required' => true
        ),
        'filler07' => array(
            'tamanho' => 13,
            'default' => '0',
            'tipo' => 'int',
            'required' => true
        ),
        'vlr_abatimento' => array(
            'tamanho' => 11,
            'default' => '0',
            'tipo' => 'decimal',
            'precision' => 2,
            'required' => true
        ),
        'tipo_inscricao' => array(
            'tamanho' => 1,
            'default' => '',
            'tipo' => 'int',
            'required' => true
        ),
        'filler08' => array(
            'tamanho' => 1,
            'default' => '0',
            'tipo' => 'int',
            'required' => true
        ),
        'numero_inscricao' => array(
            'tamanho' => 14,
            'default' => '',
            'tipo' => 'int',
            'required' => true
        ),
        'nome_pagador' => array(
            'tamanho' => 40,
            'default' => '',
            'tipo' => 'alfa',
            'required' => true
        ),
        'endereco_pagador' => array(
            'tamanho' => 40,
            'default' => '',
            'tipo' => 'alfa',
            'required' => true
        ),
        'codigo_pagador_banco' => array(
            'tamanho' => 5,
            'default' => '0',
            'tipo' => 'int',
            'required' => true
        ),
        'filler09' => array(
            'tamanho' => 6,
            'default' => '0',
            'tipo' => 'int',
            'required' => true
        ),
        'filler10' => array(
            'tamanho' => 1,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true
        ),
        'cep_pagador' => array(
            'tamanho' => 8,
            'default' => '',
            'tipo' => 'alfa',
            'required' => true
        ),
        'codigo_pagador' => array(
            'tamanho' => 5,
            'default' => '0',
            'tipo' => 'int',
            'required' => true
        ),
        'numero_inscricao_avalista' => array(
            'tamanho' => 14,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true
        ),
        'nome_avalista' => array(
            'tamanho' => 41,
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
   
    public function set_emissao_boleto($value) {
        $this->data['emissao_boleto'] = $value == 2 ? "B" : 'A';  // 1 igual A =  emissão pelo banco 2 igual B = emissão pelo cedente
    }

    public function set_protestar($value) {
        if ($value == 1) {
            $this->data['protestar'] = '06';
        } else {
            $this->data['protestar'] = '00';
        }
    }

    protected function set_data_instrucao() {
        $this->data['data_instrucao'] = date('Y-m-d');
    }

    protected function set_nosso_numero($value) {
        $modulo11 = self::modulo11(str_pad(RemessaAbstract::$entryData['agencia'], 4, 0, STR_PAD_LEFT)
                        . str_pad(RemessaAbstract::$entryData['posto'], 2, 0, STR_PAD_LEFT)
                        . str_pad(RemessaAbstract::$entryData['codigo_beneficiario'], 5, 0, STR_PAD_LEFT)
                        . str_pad(strftime("%y", strtotime($this->entryData['data_emissao'])), 2, 0, STR_PAD_LEFT)
                        . 2
                        . str_pad($value, 5, 0, STR_PAD_LEFT));
        $this->data['nosso_numero'] = strftime("%y", strtotime($this->entryData['data_emissao'])) . 2 . str_pad($value, 5, 0, STR_PAD_LEFT) . $modulo11['digito'];
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
