<?php

namespace CnabPHP\resources\B336\remessa\cnab400;

use CnabPHP\RemessaAbstract;
use CnabPHP\resources\generico\remessa\cnab400\Generico1;

class Registro1 extends Generico1
{
    protected $meta = array(
        'tipo_registro' => array( //1/1T1
            'tamanho' => 1,
            'default' => '1',
            'tipo' => 'int',
            'required' => true
        ),
        'tipo_inscricao_empresa' => array(//2/3T2
            'tamanho' => 2,
            'default' => '',
            'tipo' => 'int',
            'required' => true
        ),
        'numero_inscricao_empresa' => array(//4/17T14
            'tamanho' => 14,
            'default' => '',
            'tipo' => 'int',
            'required' => true
        ),
        'numero_documento' => array( //18/29T12
            'tamanho' => 12,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true
        ),
        'filler1' => array( //30/37T8
            'tamanho' => 8,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true
        ),
        'agencia' => array(//Uso da Empresa 1de5: 38/62T25
            'tamanho' => 4,
            'default' => '',
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
            'default' => '',
            'tipo' => 'int',
            'required' => true
        ),
        'conta_dv' => array(//Uso da Empresa 4de5: 38/62T25
            'tamanho' => 1,
            'default' => '',
            'tipo' => 'int',
            'required' => true
        ),
        'filler2' => array(//Uso da Empresa 5de5: 38/62T25
            'tamanho' => 11,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true
        ),
        'nosso_numero' => array(  //63/74T12
            'tamanho' => 11,
            'default' => '',
            'tipo' => 'int',
            'required' => true
        ),
        'nosso_numero_dv' => array(
            'tamanho' => 1,
            'default' => '0',
            'tipo' => 'alfa',
            'required' => true),
        'filler3' => array(
            'tamanho' => 8,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true
        ),
        'prefixo_titulo' => array(
            'tamanho' => 3,
            'default' => '336',
            'tipo' => 'alfa',
            'required' => true
        ),
        'filler4' => array(
            'tamanho' => 21,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true
        ),
        'codigo_carteira' => array(      //13.3P
            'tamanho' => 2,
            'default' => '20',
            'tipo' => 'int',
            'required' => true
        ),
        'codigo_movimento' => array(      // codigo da ocorrencia no manual
            'tamanho' => 2,
            'default' => '01', // entrada de titulo
            'tipo' => 'int',
            'required' => true
        ),
        'seu_numero' => array(      //111/120T10 Numero do documento/Seu numero
            'tamanho' => 10,
            'default' => ' ', // entrada de titulo
            'tipo' => 'alfa',
            'required' => true
        ),
        'data_vencimento' => array(    //121/126T6
            'tamanho' => 6,
            'default' => '',
            'tipo' => 'date',
            'required' => true
        ),
        'valor' => array(              //127/139T13
            'tamanho' => 11,
            'default' => '',
            'tipo' => 'decimal',
            'precision' => 2,
            'required' => true
        ),
        'filler5' => array(           //140/147T8 EM BRANCO
            'tamanho' => 8,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true
        ),
        'especie_titulo' => array(    //148/149T2
            'tamanho' => 2,
            'default' => '1',
            'tipo' => 'int',
            'required' => true
        ),
        'aceite' => array(            //150/150T1
            'tamanho' => 1,
            'default' => '0',
            'tipo' => 'int',
            'required' => true
        ),
        'data_emissao' => array(      //151/156T6
            'tamanho' => 6,
            'default' => '',
            'tipo' => 'date',
            'required' => true
        ),
        'cod_instrucao1' => array(    //157/158T2
            'tamanho' => 2,
            'default' => '0',
            'tipo' => 'int',
            'required' => true
        ),
        'cod_instrucao2' => array(    //159/160T2
            'tamanho' => 2,
            'default' => '0',
            'tipo' => 'int',
            'required' => true
        ),
        'vlr_juros' => array(        //161/173T13
            'tamanho' => 11,
            'default' => '0',
            'tipo' => 'decimal',
            'precision' => 2,
            'required' => true
        ),
        'data_desconto' => array(     //174/179T6
            'tamanho' => 6,
            'default' => '0',
            'tipo' => 'date',
            'required' => true
        ),
        'vlr_desconto' => array(      //180/192T13
            'tamanho' => 11,
            'default' => '0',
            'tipo' => 'decimal',
            'precision' => 2,
            'required' => true
        ),
        'data_multa' => array(       //193/198T6
            'tamanho' => 6,
            'default' => '0',
            'tipo' => 'date',
            'required' => true
        ),
        'filler6' => array(            //199/205T7
            'tamanho' => 7,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true
        ),
        'vlr_abatimento' => array(     //206/218
            'tamanho' => 11,
            'default' => '0',
            'tipo' => 'decimal',
            'precision' => 2,
            'required' => true
        ),
        'tipo_inscricao' => array(     //219/220T2
            'tamanho' => 2,
            'default' => '',
            'tipo' => 'int',
            'required' => true
        ),
        'numero_inscricao' => array(  //221/234T4
            'tamanho' => 14,
            'default' => '',
            'tipo' => 'int',
            'required' => true
        ),
        'nome_pagador' => array(      //235/264T40
            'tamanho' => 40,
            'default' => '',
            'tipo' => 'alfa',
            'required' => true
        ),
        'endereco_pagador' => array(  //275/314T40
            'tamanho' => 40,
            'default' => '',
            'tipo' => 'alfa',
            'required' => true
        ),
        'bairro_pagador' => array(    //315/326T12
            'tamanho' => 12,
            'default' => '',
            'tipo' => 'alfa',
            'required' => true
        ),
        'cep_pagador' => array(      //327/334T8
            'tamanho' => 8,
            'default' => '',
            'tipo' => 'int',
            'required' => true
        ),
        'cidade_pagador' => array(   //335/349T15
            'tamanho' => 15,
            'default' => '',
            'tipo' => 'alfa',
            'required' => true
        ),
        'uf_pagador' => array(      //350/351T2
            'tamanho' => 2,
            'default' => '',        // combrança com registro
            'tipo' => 'alfa',
            'required' => true
        ),
        'nome_avalista_mensagem' => array(  //352/381T30
            'tamanho' => 30,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true
        ),
        'tipo_multa' => array(    //382/382T1
            'tamanho' => 1,
            'default' => '2',
            'tipo' => 'int',
            'required' => true
        ),
        'taxa_multa' => array(    //383/384T2
            'tamanho' => 2,
            'default' => '0',
            'tipo' => 'decimal',
            'precision' => 0,
            'required' => true
        ),
        'filler7' => array(       //385/385T1 - USO DO BANCO - Deixar em branco
            'tamanho' => 1,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true
        ),
        'data_juros' => array(  //386/391T6
            'tamanho' => 6,
            'default' => '0',
            'tipo' => 'date',
            'required' => true
        ),
        'prazo_protesto' => array(//392/393T2
            'tamanho' => 2,
            'default' => '0',
            'tipo' => 'int',
            'required' => true
        ),
        'filler8' => array(       //394/394T1 - USO DO BANCO - Deixar em branco
            'tamanho' => 1,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true
        ),
        'numero_registro' => array( // 395/400T6
            'tamanho' => 6,
            'default' => '0',
            'tipo' => 'int',
            'required' => true
        ),
    );

    protected function set_nosso_numero_dv($value)
    {
        //Seguindo manual C6 pagina 34
        $carteira       = RemessaAbstract::$entryData['carteira'] = '' ? '20' : RemessaAbstract::$entryData['carteira'];
        $newNossoNumero = '0'.$carteira.str_pad($this->data['nosso_numero'], 10, 0, STR_PAD_LEFT);
        $result         = self::modulo11WithBase($newNossoNumero, 7);
        switch ($result['resto']) {
            case 1 :
                $this->data['nosso_numero_dv'] = 'P';
                break;
            default:
                $this->data['nosso_numero_dv'] = $result['digito'];
        }
    }

    protected function set_agencia_cobradora($value)
    {
        $this->data['agencia_cobradora'] = $value != '' ? $value : RemessaAbstract::$entryData['agencia'];
    }

    protected function set_agencia_cobradora_dv($value)
    {
        $this->data['agencia_cobradora_dv'] = $value != '' ? $value : RemessaAbstract::$entryData['agencia_dv'];
    }

    /**
     * Calcula e retorna o dígito verificador usando o algoritmo Modulo 11
     *
     * @param string $num
     * @param int    $base
     * @return array Retorna um array com as chaves 'digito' e 'resto'
     */
    protected static function mod11($num)
    {
        $codigo_beneficiario = RemessaAbstract::$entryData['codigo_beneficiario'] . RemessaAbstract::$entryData['codigo_beneficiario_dv']; // NÃºmero do contrato: Ã o mesmo nÃºmero da conta
        $agencia = RemessaAbstract::$entryData['agencia']; // NÃºmero do contrato: Ã o mesmo nÃºmero da conta

        $NossoNumero = str_pad($num, 7, 0, STR_PAD_LEFT); // Até 7 dígitos, nÃºmero sequencial iniciado em 1 (Ex.: 1, 2...)
        $qtde_nosso_numero = strlen($NossoNumero);
        $sequencia = str_pad($agencia, 4, STR_PAD_LEFT) . str_pad($codigo_beneficiario, 10, 0, STR_PAD_LEFT) . str_pad($NossoNumero, 7, 0, STR_PAD_LEFT);
        $cont = 0;
        $calculoDv = 0;
        for ($num = 0; $num < 21; $num++) {
            $cont++;
            if ($cont == 1) {
                $constante = 3;
            }
            if ($cont == 2) {
                $constante = 1;
            }
            if ($cont == 3) {
                $constante = 9;
            }
            if ($cont == 4) {
                $constante = 7;
                $cont = 0;
            }
            $calculoDv = $calculoDv + (substr($sequencia, $num, 1) * $constante);
        }

        $Resto = $calculoDv % 11;
        if ($Resto == 0 || $Resto == 1) {
            $Dv = 0;
        } else {
            $Dv = 11 - $Resto;
        }

        $result["nosso_numero"] = $NossoNumero;
        $result["digito"] = $Dv;
        return $result;
    }

    /**
     * @param     $num
     * @param int $base
     * @return array
     */
    protected static function modulo11WithBase($num, $base = 7)
    {
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
