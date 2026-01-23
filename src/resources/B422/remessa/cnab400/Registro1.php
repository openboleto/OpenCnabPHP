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

namespace CnabPHP\resources\B422\remessa\cnab400;

use CnabPHP\RegistroRemAbstract;
use CnabPHP\RemessaAbstract;
use CnabPHP\resources\generico\remessa\cnab400\Generico1;

/**
 * Classe Registro1 - Detalhe do título CNAB 400 do Banco Safra (422)
 *
 * Layout baseado na documentação oficial do Banco Safra
 */
class Registro1 extends Generico1
{
    protected $meta = array(
        'tipo_registro' => array(
            'tamanho' => 1,
            'default' => '1',
            'tipo' => 'int',
            'required' => true
        ),
        'agencia_debito' => array(
            'tamanho' => 5,
            'default' => '0',
            'tipo' => 'int',
            'required' => true
        ),
        'digito_agencia_debito' => array(
            'tamanho' => 1,
            'default' => '0',
            'tipo' => 'int',
            'required' => true
        ),
        'razao_conta_corrente_pagador' => array(
            'tamanho' => 5,
            'default' => '0',
            'tipo' => 'int',
            'required' => true
        ),
        'conta_corrente_pagador' => array(
            'tamanho' => 7,
            'default' => '0',
            'tipo' => 'int',
            'required' => true
        ),
        'digito_conta_corrente_pagador' => array(
            'tamanho' => 1,
            'default' => '0',
            'tipo' => 'int',
            'required' => true
        ),
        'filler0' => array(
            'tamanho' => 1,
            'default' => '0',
            'tipo' => 'int',
            'required' => false
        ),
        'carteira' => array(
            'tamanho' => 3,
            'default' => '001',
            'tipo' => 'int',
            'required' => true
        ),
        'agencia' => array(
            'tamanho' => 5,
            'default' => '0',
            'tipo' => 'int',
            'required' => true
        ),
        'conta' => array(
            'tamanho' => 7,
            'default' => '0',
            'tipo' => 'int',
            'required' => true
        ),
        'conta_dv' => array(
            'tamanho' => 1,
            'default' => '0',
            'tipo' => 'int',
            'required' => true
        ),
        'seu_numero' => array(
            'tamanho' => 25,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true
        ),
        'codigo_banco_debito' => array(
            'tamanho' => 3,
            'default' => '0',
            'tipo' => 'int',
            'required' => true
        ),
        'codigo_multa' => array(
            'tamanho' => 1,
            'default' => '0',
            'tipo' => 'int',
            'required' => true
        ),
        'percentual_multa' => array(
            'tamanho' => 4,
            'default' => '0',
            'tipo' => 'decimal',
            'precision' => 2,
            'required' => true
        ),
        'nosso_numero' => array(
            'tamanho' => 9,
            'default' => '0',
            'tipo' => 'int',
            'required' => true
        ),
        'filler1' => array(
            'tamanho' => 10,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true
        ),
        'emissao_boleto' => array(
            'tamanho' => 1,
            'default' => '2',
            'tipo' => 'int',
            'required' => true
        ),
        'debito_automatico' => array(
            'tamanho' => 1,
            'default' => 'N',
            'tipo' => 'alfa',
            'required' => true
        ),
        'filler2' => array(
            'tamanho' => 13,
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
        'numero_documento' => array(
            'tamanho' => 10,
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
            'tamanho' => 13,
            'default' => '',
            'tipo' => 'decimal',
            'precision' => 2,
            'required' => true
        ),
        'banco_cobrador' => array(
            'tamanho' => 3,
            'default' => '422',
            'tipo' => 'int',
            'required' => true
        ),
        'agencia_cobradora' => array(
            'tamanho' => 5,
            'default' => '0',
            'tipo' => 'int',
            'required' => true
        ),
        'especie' => array(
            'tamanho' => 2,
            'default' => '01',
            'tipo' => 'int',
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
            'default' => '',
            'tipo' => 'date',
            'required' => true
        ),
        'instrucao1' => array(
            'tamanho' => 2,
            'default' => '00',
            'tipo' => 'int',
            'required' => true
        ),
        'instrucao2' => array(
            'tamanho' => 2,
            'default' => '00',
            'tipo' => 'int',
            'required' => true
        ),
        'vlr_juros' => array(
            'tamanho' => 13,
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
        'vlr_desconto' => array(
            'tamanho' => 13,
            'default' => '0',
            'tipo' => 'decimal',
            'precision' => 2,
            'required' => true
        ),
        'vlr_iof' => array(
            'tamanho' => 13,
            'default' => '0',
            'tipo' => 'decimal',
            'precision' => 2,
            'required' => true
        ),
        'vlr_abatimento' => array(
            'tamanho' => 13,
            'default' => '0',
            'tipo' => 'decimal',
            'precision' => 2,
            'required' => true
        ),
        'tipo_inscricao_pagador' => array(
            'tamanho' => 2,
            'default' => '',
            'tipo' => 'int',
            'required' => true
        ),
        'numero_inscricao_pagador' => array(
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
        'bairro_pagador' => array(
            'tamanho' => 12,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true
        ),
        'cep_pagador' => array(
            'tamanho' => 8,
            'default' => '',
            'tipo' => 'int',
            'required' => true
        ),
        'cidade_pagador' => array(
            'tamanho' => 15,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true
        ),
        'uf_pagador' => array(
            'tamanho' => 2,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true
        ),
        'mensagem' => array(
            'tamanho' => 40,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true
        ),
        'dias_protesto' => array(
            'tamanho' => 2,
            'default' => '00',
            'tipo' => 'int',
            'required' => true
        ),
        'filler3' => array(
            'tamanho' => 1,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true
        ),
        'numero_sequencial' => array(
            'tamanho' => 6,
            'default' => '0',
            'tipo' => 'int',
            'required' => true
        ),
    );

    public function __construct($data = null)
    {
        if (empty($this->data)) {
            parent::__construct($data);
        }
        $this->inserirMensagem($data);
    }

    public function inserirMensagem($data)
    {
        if (!empty($data['mensagem'])) {
            $class = 'CnabPHP\resources\\B' . RemessaAbstract::$banco . '\remessa\\' . RemessaAbstract::$layout . '\Registro2';
            if (class_exists($class)) {
                $this->children[] = new $class($data);
            }
        }
    }

    protected function set_endereco_pagador($value)
    {
        $this->data['endereco_pagador'] = $value . " " . ($this->entryData['bairro_pagador'] ?? '');
    }

    protected function set_percentual_multa($value)
    {
        $this->data['percentual_multa'] = $value;
        $this->data['codigo_multa'] = ($value > 0) ? 1 : 0;
    }
}
