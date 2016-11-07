<?php
namespace CnabPHP\resources\generico\remessa\cnab400;
use CnabPHP\RegistroRemAbstract;
use CnabPHP\RemessaAbstract;
use CnabPHP\Especie;
use Exception;

class Generico1 extends RegistroRemAbstract
{
    protected function set_numero_registro($value)
    {
        $lote  = RemessaAbstract::getLote(0);
        $this->data['numero_registro'] = $lote->get_counter();
    }

    protected function set_tipo_inscricao_empresa($value)
    {
        $value = RemessaAbstract::$entryData['tipo_inscricao'];
        if($value==1 || $value==2)
        {
            $this->data['tipo_inscricao_empresa'] = RemessaAbstract::$entryData['tipo_inscricao'];
        }else{
            throw new Exception("O tipo de incrição deve ser 1  para CPF e 2 para CNPJ, o valor informado foi:".$value);       
        }
    }

    protected function set_tipo_inscricao($value)
    {
        if($value==1 || $value==2)
        {
            $this->data['tipo_inscricao'] =  $value;
        }else{
            throw new Exception("O tipo de incrição deve ser 1  para CPF e 2 para CNPJ, o valor informado foi:".$value);       
        }
    }


    protected function set_numero_inscricao_empresa($value)
    {
        $this->data['numero_inscricao_empresa'] = str_ireplace(array('.','/','-'),array(''), RemessaAbstract::$entryData['numero_inscricao']);

    }

    protected function set_numero_inscricao($value)
    {
        $this->data['numero_inscricao'] = str_ireplace(array('.','/','-'),array(''), $value);

    }

    protected function set_agencia($value)
    {
        $this->data['agencia'] = RemessaAbstract::$entryData['agencia'];
    }
    protected function set_agencia_dv($value)
    {
        $this->data['agencia'] = RemessaAbstract::$entryData['agencia_dv'];
    }

    protected function set_conta($value)
    {
        $this->data['conta'] = RemessaAbstract::$entryData['conta'];
    }

    protected function set_conta_dv($value)
    {
        $this->data['conta_dv'] = RemessaAbstract::$entryData['conta_dv'];
    }

    protected function set_cep_pagador($value)
    {
        $cep = $value;
        $cep_array =  str_ireplace('-','',$cep);
        $this->data['cep_pagador'] = $cep_array;
    }

    protected function set_especie_titulo($value)
    {
        if(is_int($value))
        {
            $this->data['especie_titulo'] = $value; 
        }
        else
        {
            $especie = new Especie($this->data['codigo_banco']);
            $this->data['especie_titulo'] = $especie->getCodigo($value);
        }
    }
    
    protected function set_nosso_numero_dv($value)
    {
        $result = self::modulo11($this->data['nosso_numero']);
        $this->data['nosso_numero_dv'] = $result['digito']; 
    }
    
    
    /**
    * Calcula e retorna o dígito verificador usando o algoritmo Modulo 11
    *
    * @param string $num
    * @param int $base
    * @see Documentação em http://www.febraban.org.br/Acervo1.asp?id_texto=195&id_pagina=173&palavra=
    * @return array Retorna um array com as chaves 'digito' e 'resto'
    */
    protected static function modulo11($num, $base=9)
    {
        $fator = 2;

        $soma  = 0;
        // Separacao dos numeros.
        for ($i = strlen($num); $i > 0; $i--) {
            //  Pega cada numero isoladamente.
            $numeros[$i] = substr($num,$i-1,1);
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
            'resto'  => $soma % 11,
        );
        if ($result['digito'] == 10){
            $result['digito'] = 0;
        }
        return $result;
    }


}

?>
