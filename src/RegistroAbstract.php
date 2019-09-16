<?php
/*
 * CnabPHP - Gera??o de arquivos de remessa e retorno em PHP
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

use Exception;

/**
 * Classe abstrata para centralizar os método comuns ao tratamento dos registros
 * nos arquivos de remessa e retorno.
 */
abstract class RegistroAbstract
{

    protected $data;

    protected $meta;

    public $children;

    /**
     * Método getUnformated()
     * busca o valor de dentro do campo dentro do objeto de forma simples sem formata??o de valor por exemplo
     */
    public function getUnformated($prop)
    {
        // retorna o valor da propriedade
        if (isset($this->data[$prop])) {
            return $this->data[$prop];
        }
    }

    /**
     * Método prepareText()
     * metodo retirado do projeto andersondanilo/CnabPHP e usado como esta sem altera??o
     * recebe um texto e prepara para inserir no arquivo de texto
     */
    protected function prepareText($text, $remove = null)
    {
        $result = strtoupper($this->removeAccents(trim(html_entity_decode($text))));
        if ($remove)
            $result = str_replace(str_split($remove), '', $result);
        return $result;
    }

    /*
     * Método removeAccents()
     * metodo retirado do projeto andersondanilo/CnabPHP e usado como esta sem altera??o
     * recebe um texto e prepara para inserir no arquivo de texto
     */
    protected function removeAccents($string)
    {
        return preg_replace(
            array(
            '/\xc3[\x80-\x85]/',
            '/\xc3\x87/',
            '/\xc3[\x88-\x8b]/',
            '/\xc3[\x8c-\x8f]/',
            '/\xc3([\x92-\x96]|\x98)/',
            '/\xc3[\x99-\x9c]/',
            '/\xc3[\xa0-\xa5]/',
            '/\xc3\xa7/',
            '/\xc3[\xa8-\xab]/',
            '/\xc3[\xac-\xaf]/',
            '/\xc3([\xb2-\xb6]|\xb8)/',
            '/\xc3[\xb9-\xbc]/',
            ), str_split('ACEIOUaceiou', 1), $this->isUtf8($string) ? $string : utf8_encode($string)
        );
    }

    /*
     * Método removeAccents()
     * metodo retirado do projeto andersondanilo/CnabPHP e usado como esta sem altera??o
     * recebe um texto e prepara para inserir no arquivo de texto
     */
    protected function isUtf8($string)
    {
        return preg_match('%^(?:
            [\x09\x0A\x0D\x20-\x7E]
            | [\xC2-\xDF][\x80-\xBF]
            | \xE0[\xA0-\xBF][\x80-\xBF]
            | [\xE1-\xEC\xEE\xEF][\x80-\xBF]{2}
            | \xED[\x80-\x9F][\x80-\xBF]
            | \xF0[\x90-\xBF][\x80-\xBF]{2}
            | [\xF1-\xF3][\x80-\xBF]{3}
            | \xF4[\x80-\x8F][\x80-\xBF]{2}
            )*$%xs', $string
        );
    }

    /*
     * Método getText()
     * metodo magico que trabalha recursivamente nos filhos e netos desse objeto
     * prepara as linhas para serem exportadas para txt
     */
    public function getText()
    {
        $retorno = '';
        foreach ($this->meta as $key => $value) {
            $retorno .= $this->$key;
        }
        RemessaAbstract::$retorno[] = $retorno;
        if ($this->children) {
            // percorre todos objetos filhos
            foreach ($this->children as $child) {
                $child->getText();
            }
        }
    }

    /**
     * mb_str_pad
     *
     * @param string $input
     * @param int $pad_length
     * @param string $pad_string
     * @param int $pad_type
     * @return string
     * @author Kari "Haprog" Sderholm
     */
    public function mb_str_pad($input, $pad_length, $pad_string = ' ', $pad_type = STR_PAD_RIGHT)
    {
        $diff = strlen($input) - mb_strlen($input);
        return str_pad($input, $pad_length + $diff, $pad_string, $pad_type);
    }
        /**
     * Método addChild()
     * Recebe os parametros abaixo e insere num array para uso fururo
     * @RegistroRemAbstract $child = recebe um filho de RegistroRemAbstract
     */
    public function addChild(RegistroRemAbstract $child)
    {
        $this->children[] = $child;
    }
    

}
