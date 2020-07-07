<?php

namespace CnabPHP\resources\B237\remessa\cnab400;

use CnabPHP\RemessaAbstract;
use CnabPHP\resources\generico\remessa\cnab400\Generico2;

class Registro2 extends Generico2 {

    protected $meta = array(
        'tipo_registro'   => array(
            'tamanho'  => 1,
            'default'  => '2',
            'tipo'     => 'int',
            'required' => true),
        'mensagem_1'      => array(
            'tamanho'  => 80,
            'default'  => ' ',
            'tipo'     => 'alfa',
            'required' => false),
        'mensagem_2'      => array(
            'tamanho'  => 80,
            'default'  => ' ',
            'tipo'     => 'alfa',
            'required' => false),
        'mensagem_3'      => array(
            'tamanho'  => 80,
            'default'  => ' ',
            'tipo'     => 'alfa',
            'required' => false),
        'mensagem_4'      => array(
            'tamanho'  => 80,
            'default'  => ' ',
            'tipo'     => 'alfa',
            'required' => false),
        'data_desconto'   => array(
            'tamanho'  => 6,
            'default'  => '0',
            'tipo'     => 'date',
            'required' => true),
        'vlr_desconto'    => array(
            'tamanho'   => 11,
            'default'   => '0',
            'tipo'      => 'decimal',
            'precision' => 2,
            'required'  => true),
        'data_desconto_2' => array(
            'tamanho'  => 6,
            'default'  => '0',
            'tipo'     => 'date',
            'required' => true),
        'vlr_desconto_2'  => array(
            'tamanho'   => 11,
            'default'   => '0',
            'tipo'      => 'decimal',
            'precision' => 2,
            'required'  => true),
        'filler'          => array(
            'tamanho'  => 7,
            'default'  => ' ',
            'tipo'     => 'alfa',
            'required' => false),
        'carteira_banco'  => array(
            'tamanho'  => 3,
            'default'  => '0',
            'tipo'     => 'int',
            'required' => true),
        'agencia'         => array(
            'tamanho'  => 5,
            'default'  => '0',
            'tipo'     => 'int',
            'required' => true),
        'conta'           => array(
            'tamanho'  => 7,
            'default'  => '0',
            'tipo'     => 'int',
            'required' => true),
        'conta_dv'        => array(
            'tamanho'  => 1,
            'default'  => '0',
            'tipo'     => 'int',
            'required' => true),
        'nosso_numero'    => array(
            'tamanho'  => 11,
            'default'  => '0',
            'tipo'     => 'int',
            'required' => true),
        'nosso_numero_dv' => array(
            'tamanho'  => 1,
            'default'  => '0',
            'tipo'     => 'alfa',
            'required' => true),
        'numero_registro' => array(
            'tamanho'  => 6,
            'default'  => '0',
            'tipo'     => 'int',
            'required' => true),
    );

    public function __construct($data = null) {
        if (empty($this->data))
            parent::__construct($data);
    }

    protected function set_mensagem_1($value) {
        $mensagem                 = (!empty($this->entryData['mensagem'])) ? explode(PHP_EOL, $this->entryData['mensagem']) : array();
        $this->data['mensagem_1'] = count($mensagem) >= 1 ? $mensagem[0] : ' ';
    }

    protected function set_mensagem_2($value) {
        $mensagem                 = (!empty($this->entryData['mensagem'])) ? explode(PHP_EOL, $this->entryData['mensagem']) : array();
        $this->data['mensagem_2'] = count($mensagem) >= 2 ? $mensagem[1] : ' ';
    }

    protected function set_mensagem_3($value) {
        $mensagem                 = (!empty($this->entryData['mensagem'])) ? explode(PHP_EOL, $this->entryData['mensagem']) : array();
        $this->data['mensagem_3'] = count($mensagem) >= 3 ? $mensagem[2] : ' ';
    }

    protected function set_mensagem_4($value) {
        $mensagem                 = (!empty($this->entryData['mensagem'])) ? explode(PHP_EOL, $this->entryData['mensagem']) : array();
        $this->data['mensagem_4'] = count($mensagem) >= 4 ? $mensagem[3] : ' ';
    }

    protected function set_nosso_numero_dv($value) {
        $modulo11                      = self::modulo11(str_pad($this->entryData['carteira_banco'], 2, 0, STR_PAD_LEFT) . str_pad($this->data['nosso_numero'], 11, 0, STR_PAD_LEFT), 7);
        $this->data['nosso_numero_dv'] = $modulo11['resto'] != 1 ? $modulo11['digito'] : 'P';
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
            $soma        += $parcial[$i];
            if ($fator == $base) {
                //  Restaura fator de multiplicacao para 2.
                $fator = 1;
            }
            $fator++;
        }
        $result = array(
            'digito' => ($soma * 10) % 11,
            // Remainder.
            'resto'  => $soma % 11,
        );
        if ($result['digito'] == 10) {
            $result['digito'] = 0;
        }
        return $result;
    }

}
