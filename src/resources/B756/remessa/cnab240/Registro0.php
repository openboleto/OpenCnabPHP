<?php
/*
 * CnabPHP - Geração de arquivos de remessa e retorno em PHP
 *
 * LICENSE: The MIT License (MIT)
 *
 * Copyright (C) 2018 NextStep <http://github.com/nxstep-si>
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
namespace CnabPHP\resources\B756\remessa\cnab240;

use \CnabPHP\resources\generico\remessa\cnab240\Generico0;

class Registro0 extends Generico0
{

    protected $meta = array(
        //controle
        'codigo_banco' => array(//01.0 -- 1-3
            'tamanho' => 3,
            'default' => '756',
            'tipo' => 'int',
            'required' => true),
        'codigo_lote' => array(//02.0 -- 4-7
            'tamanho' => 4,
            'default' => '0000',
            'tipo' => 'int',
            'required' => true),
        'tipo_registro' => array(//03.0 -- 8
            'tamanho' => 1,
            'default' => '0',
            'tipo' => 'int',
            'required' => true),
        'filler1' => array(//04.0 -- 9-17
            'tamanho' => 9,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true),
        'tipo_inscricao' => array(//05.0 -- 18
            'tamanho' => 1,
            'default' => '2',
            'tipo' => 'int',
            'required' => true),
        'numero_inscricao' => array(//06.0 -- 19-32
            'tamanho' => 14,
            'default' => '',
            'tipo' => 'int',
            'required' => true),
        'filler2' => array(//07.0 -- 33-52
            'tamanho' => 20,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true),
        'agencia' => array(//08.0 -- 53-57
            'tamanho' => 5,
            'default' => '',
            'tipo' => 'int',
            'required' => true),
        'agencia_dv' => array(//09.0 -- 58
            'tamanho' => 1,
            'default' => '',
            'tipo' => 'alfa',
            'required' => true),
        'conta' => array(//10.0 -- 59-70
            'tamanho' => 12,
            'default' => '',
            'tipo' => 'int',
            'required' => true),
        'conta_dv' => array(//11.0 -- 71
            'tamanho' => 1,
            'default' => '',
            'tipo' => 'alfa',
            'required' => true),
        'conta_agencia_dv' => array(//12.0 -- 71
            'tamanho' => 1,
            'default' => '0',
            'tipo' => 'int',
            'required' => true),
        'nome_empresa' => array(//13.0 -- 73-102
            'tamanho' => 30,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true),
        'nome_banco' => array(//14.0 -- 103-132
            'tamanho' => 30,
            'default' => 'SICOOB',
            'tipo' => 'alfa',
            'required' => true),
        'filler3' => array(//15.0 -- 133-142
            'tamanho' => 10,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true),
        'codigo_remessa' => array(//16.0 -- 143
            'tamanho' => 1,
            'default' => '1',
            'tipo' => 'int',
            'required' => true),
        'data_geracao' => array(//17.0 -- 144-151
            'tamanho' => 8,
            'default' => '', // nao informar - gerada dinamicamente
            'tipo' => 'date',
            'required' => true),
        'hora_geracao' => array(//18.0 -- 152-157
            'tamanho' => 6,
            'default' => '', // nao informar - gerada dinamicamente
            'tipo' => 'int',
            'required' => true),
        'numero_sequencial_arquivo' => array(//19.0 -- 158-163
            'tamanho' => 6,
            'default' => '',
            'tipo' => 'int',
            'required' => true),
        'versao_layout' => array(//20.0 -- 164-166
            'tamanho' => 3,
            'default' => '081',
            'tipo' => 'int',
            'required' => true),
        'filler4' => array(//21.0 -- 167-171
            'tamanho' => 5,
            'default' => '0',
            'tipo' => 'int',
            'required' => true),
        'filler5' => array(//22.0+23.0+24.0
            'tamanho' => 69, //172-240
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true)
    );

    public function getFileName()
    {
        $codigo_meses = array(1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5, 6 => 6, 7 => 7, 8 => 8, 9 => 9, 10 => 'O', 11 => 'N', 12 => 'D');
        return $this->entryData['codigo_beneficiario'] . $codigo_meses[date('n')] . date('d') . '.crm';
    }
}

?>