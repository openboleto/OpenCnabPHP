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

namespace CnabPHP\resources\B104\remessa\cnab240_transf;

use CnabPHP\resources\generico\remessa\cnab240\Generico3;
use CnabPHP\RegistroRemAbstract;
use CnabPHP\RemessaAbstract;
use Exception;

class Registro3A extends Generico3 {

    protected $meta = array(
        'codigo_banco' => array(// 1.3A
            'tamanho' => 3,
            'default' => '104',
            'tipo' => 'int',
            'required' => true),
        'codigo_lote' => array(// 2.3A
            'tamanho' => 4,
            'default' => 1,
            'tipo' => 'int',
            'required' => true),
        'tipo_registro' => array(// 3.3A
            'tamanho' => 1,
            'default' => '3',
            'tipo' => 'int',
            'required' => true),
        'numero_registro' => array(// 4.3A
            'tamanho' => 5,
            'default' => '0',
            'tipo' => 'int',
            'required' => true),
        'seguimento' => array(// 5.3A
            'tamanho' => 1,
            'default' => 'A',
            'tipo' => 'alfa',
            'required' => true),
        'tipo_movimento' => array(// 6.3A
            'tamanho' => 1,
            'default' => '0',  //0 indica inclusão - 3 indica estorno (somente para retorno) - 5 indica alteração - 9 indica exclusão 
            'tipo' => 'alfa',
            'required' => true),
        'codigo_movimento' => array(// 7.3A
            'tamanho' => 2,
            'default' => '00', // Inclusao de Registro Detalhe Liberado 
            'tipo' => 'int',
            'required' => true),
        'codigo_camera' => array(// 8.3A
            'tamanho' => 3,
            'default' => '', // 018 TED - 700 DOC/OP - 000 Credito em Conta - 888 Boleted/ISPB 
            'tipo' => 'int',
            'required' => true),
        'cod_banco_fav' => array(// 9.3A
            'tamanho' => 3,
            'default' => '',
            'tipo' => 'int',
            'required' => true),
        'agen_cta_favor'=>array(// 10.3A
			'tamanho'=> 5,
			'default'=>'',
			'tipo'=>'int',
			'required'=>true),
		'dig_ver_agen'=>array(// 11.3A
			'tamanho'=>1,
			'default'=>'',
			'tipo'=>'alfa',
			'required'=>true),
		'conta_corrente_fav'=>array(// 12.3A
			'tamanho'=>12,
			'default'=>'',
			'tipo'=>'int',
			'required'=>true),
        'dig_conta_fav' => array(// 13.3A
            'tamanho' => 1,
            'default' => '',
            'tipo' => 'alfa',
            'required' => true),
        'filler1' => array(//14.3A
            'tamanho' => 1,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true),
        'nome_fav' => array(//15.3A
            'tamanho' => 30,
            'default' => '',
            'tipo' => 'alfa',
            'required' => true),
        'num_atribuido_empresa' => array(//16.3A
            'tamanho' => 6,
            'default' => '',
            'tipo' => 'int',
            'required' => true),
        'filler2' => array(//16.3A
            'tamanho' => 13,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true),
        'tipo_conta_ted' => array(//16.3A
            'tamanho' => 1,
            'default' => ' ', // 1 – Conta corrente; 2 – Poupança;
            'tipo' => 'int',
            'required' => true),
        'data_pagamento' => array(// 17.3
            'tamanho' => 8,
            'default' => '',
            'tipo' => 'date',
            'required' => true),
        'tipo_moeda' => array(//18.3A
            'tamanho' => 3,
            'default' => 'BRL',
            'tipo' => 'alfa',
            'required' => true),
        'qtd_moeda' => array(//19.3A  
            'tamanho' => 10,
            'default' => '0',
            'tipo' => 'decimal',
            'precision' => 5,
            'required' => true),
        'valor_pagamento' => array(//20.3
            'tamanho' => 13,
            'default' => '0',
            'tipo' => 'decimal',
            'precision' => 2,
            'required' => true),
        'filler3' => array(//21.3A
            'tamanho' => 9,
            'default' => '0',
            'tipo' => 'int',
            'required' => true),
        'filler4' => array(//21.3A
            'tamanho' => 3,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true),
        'qtd_parcelas' => array(//21.3A
            'tamanho' => 2,
            'default' => '01',
            'tipo' => 'int',
            'required' => true),
        'indicador_bloqueio' => array(//21.3A
            'tamanho' => 1,
            'default' => 'N',
            'tipo' => 'alfa',
            'required' => true),
        'indicador_parcelamento' => array(//21.3A
            'tamanho' => 1,
            'default' => '1',
            'tipo' => 'int',
            'required' => true),
        'dia_vencimento' => array(//21.3A
            'tamanho' => 2,
            'default' => '0',
            'tipo' => 'int',
            'required' => true),
        'numero_parcela' => array(//21.3A
            'tamanho' => 2,
            'default' => '00',
            'tipo' => 'int',
            'required' => true),
        'data_real' => array(//22.3A
            'tamanho' => 8,
            'default' => '0',
            'tipo' => 'date',
            'required' => true),
        'valor_real' => array(//23.3A
            'tamanho' => 13,
            'default' => '0',
            'tipo' => 'decimal',
            'precision' => 2,
            'required' => true),
        'informacao2' => array(//24.3A
            'tamanho' => 40,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true),
        'cod_finalidade_doc' => array(//25.3A
            'tamanho' => 2,
            'default' => '00',
            'tipo' => 'alfa',
            'required' => true),
        'filler5' => array(//28.3A
            'tamanho' => 10,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true),
        'aviso' => array(//29.3A
            'tamanho' => 1,
            'default' => '0',
            'tipo' => 'int',
            'required' => true),
        'ocorrencias' => array(//29.3A
            'tamanho' => 10,
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
        $class = 'CnabPHP\resources\\B' . RemessaAbstract::$banco . '\remessa\\' . RemessaAbstract::$layout . '\Registro3B';
        $this->children[] = new $class($data);
    }
    
    /**
     * Cálculo do módulo 11
     * @param int $index
     * @return int
     */
    protected static function modulo11($num, $base=9, $r=0)
    {
        $soma = 0;
        $fator = 2;

        // Separacao dos numeros
        for ($i = strlen($num); $i > 0; $i--) {
            // pega cada numero isoladamente
            $numeros[$i] = substr($num,$i-1,1);
            // Efetua multiplicacao do numero pelo falor
            $parcial[$i] = $numeros[$i] * $fator;
            // Soma dos digitos
            $soma += $parcial[$i];
            if ($fator == $base) {
                // restaura fator de multiplicacao para 2
                $fator = 1;
            }
            $fator++;
        }

        // Calculo do modulo 11
        if ($r == 0) {
            $soma *= 10;
            $digito = $soma % 11;
            if ($digito == 10) {
                $digito = 0;
            }
            return $digito;
        } elseif ($r == 1){
            $resto = $soma % 11;
            return $resto;
        }
    }	
	
}

?>