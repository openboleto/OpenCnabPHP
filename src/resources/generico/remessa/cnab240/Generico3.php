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
namespace CnabPHP\resources\generico\remessa\cnab240;

use CnabPHP\RegistroRemAbstract;
use CnabPHP\RemessaAbstract;
use CnabPHP\Especie;
use Exception;

class Generico3 extends RegistroRemAbstract
{

    protected function set_codigo_lote($value)
    {
        //ArquivoAbstract::$loteCounter++;
        $this->data['codigo_lote'] = RemessaAbstract::$loteCounter;
    }

    protected function set_numero_registro($value)
    {
        $lote = RemessaAbstract::getLote(RemessaAbstract::$loteCounter);
        $this->data['numero_registro'] = $lote->get_counter();
    }

    protected function set_tipo_inscricao($value)
    {
        $this->data['tipo_inscricao'] = $value;
    }

    protected function set_numero_inscricao($value)
    {
        $this->data['numero_inscricao'] = str_ireplace(array('.', '/', '-'), array(''), $value);
    }

    protected function set_codigo_beneficiario($value)
    {
        $this->data['codigo_beneficiario'] = RemessaAbstract::$entryData['codigo_beneficiario'];
    }

    protected function set_codigo_beneficiario_dv($value)
    {
        $this->data['codigo_beneficiario_dv'] = RemessaAbstract::$entryData['codigo_beneficiario_dv'];
    }

    protected function set_agencia($value)
    {
        $this->data['agencia'] = RemessaAbstract::$entryData['agencia'];
    }

    protected function set_agencia_dv($value)
    {
        $this->data['agencia_dv'] = RemessaAbstract::$entryData['agencia_dv'];
    }

    protected function set_conta($value)
    {
        $this->data['conta'] = RemessaAbstract::$entryData['conta'];
    }

    protected function set_conta_dv($value)
    {
        $this->data['conta_dv'] = RemessaAbstract::$entryData['conta_dv'];
    }

    protected function set_codigo_convenio($value)
    {
        $this->data['codigo_convenio'] = RemessaAbstract::$entryData['codigo_beneficiario'];
    }

    protected function set_com_registro($value)
    {
        $lote = RemessaAbstract::getLote(RemessaAbstract::$loteCounter);
        $this->data['com_registro'] = $lote->tipo_servico;
    }

    protected function set_seu_numero($value)
    {
        if ($this->data['nosso_numero'] == 0 && $value == '') {
            throw new Exception('O campo "seu_numero" e obrigatorio, na sua falta usareio o nosso numero, porem esse tambem no foi inserido!!!');
        } else {
            $this->data['seu_numero'] = $value != ' ' ? $value : $this->data['nosso_numero'];
        }
    }

    protected function set_seu_numero2($value)
    {
        $this->data['seu_numero2'] = $value != ' ' ? $value : $this->data['nosso_numero'];
    }

    protected function set_identificacao_contrato($value)
    {
        $this->data['identificacao_contrato'] = $value != ' ' ? $value : $this->data['nosso_numero'];
    }

    protected function set_especie_titulo($value)
    {
        if (is_int($value)) {
            $this->data['especie_titulo'] = $value;
        } else {
            $especie = new Especie($this->data['codigo_banco']);
            $this->data['especie_titulo'] = $especie->getCodigo($value);
        }
    }

    protected function set_cep_sufixo($value)
    {
        $cep = $this->data['cep_pagador'];
        $cep_array = explode('-', $cep);
        $this->data['cep_pagador'] = $cep_array[0];
        $this->data['cep_sufixo'] = $cep_array[1];
    }

    protected function set_mensagem_3($value)
    {
        $mensagem = (isset($this->entryData['mensagem'])) ? explode(PHP_EOL, $this->entryData['mensagem']) : array();
        $this->data['mensagem_3'] = count($mensagem) >= 1 ? $mensagem[0] : ' ';
    }

    protected function set_mensagem_4($value)
    {
        $mensagem = (isset($this->entryData['mensagem'])) ? explode(PHP_EOL, $this->entryData['mensagem']) : array();
        $this->data['mensagem_4'] = count($mensagem) >= 2 ? $mensagem[1] : ' ';
    }

    protected function set_mensagem_5($value)
    {
        $mensagem = (isset($this->entryData['mensagem'])) ? explode(PHP_EOL, $this->entryData['mensagem']) : array();
        $this->data['mensagem_5'] = count($mensagem) >= 3 ? $mensagem[2] : ' ';
    }

    protected function set_mensagem_6($value)
    {
        $mensagem = (isset($this->entryData['mensagem'])) ? explode(PHP_EOL, $this->entryData['mensagem']) : array();
        $this->data['mensagem_6'] = count($mensagem) >= 4 ? $mensagem[3] : ' ';
    }

    protected function set_mensagem_7($value)
    {
        $mensagem = (isset($this->entryData['mensagem'])) ? explode(PHP_EOL, $this->entryData['mensagem']) : array();
        $this->data['mensagem_7'] = count($mensagem) >= 5 ? $mensagem[4] : ' ';
    }

    protected function set_mensagem_8($value)
    {
        $mensagem = (isset($this->entryData['mensagem'])) ? explode(PHP_EOL, $this->entryData['mensagem']) : array();
        $this->data['mensagem_8'] = count($mensagem) >= 6 ? $mensagem[5] : ' ';
    }

    protected function set_informacao_pagador($value)
    {
        $mensagem = (isset($this->entryData['informacao_pagador'])) ? $this->entryData['informacao_pagador'] : '';
        $this->data['informacao_pagador'] = $mensagem;
    }

    protected function set_set_mensagem_5($value)
    {
        $mensagem = (isset($this->entryData['set_mensagem_5'])) ? $this->entryData['set_mensagem_5'] : '';
        $this->data['set_mensagem_5'] = $mensagem;
    }

    protected function set_set_mensagem_52($value)
    {
        $mensagem = (isset($this->entryData['set_mensagem_52'])) ? $this->entryData['set_mensagem_52'] : '';
        $this->data['set_mensagem_52'] = $mensagem;
    }

    protected function set_prazo_protesto($value)
    {
        if ($this->data['protestar'] == 1 && $value == '') {
            throw new Exception('O campo "protestar" deve ser 3 para nao protesto e caso querira protetar deve ser informado um prazo maior que 1');
        } else {
            $this->data['prazo_protesto'] = $value;
        }
    }
}
