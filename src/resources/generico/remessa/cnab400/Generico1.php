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
        $value =  RemessaAbstract::getLote(0)->entryData['tipo_inscricao'];
        if($value==1 || $value==2)
        {
            $this->data['tipo_inscricao_empresa'] = RemessaAbstract::getLote(0)->entryData['tipo_inscricao'];
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
        $this->data['numero_inscricao_empresa'] = str_ireplace(array('.','/','-'),array(''), RemessaAbstract::getLote(0)->entryData['numero_inscricao']);

    }

    protected function set_numero_inscricao($value)
    {
        $this->data['numero_inscricao'] = str_ireplace(array('.','/','-'),array(''), $value);

    }

    protected function set_agencia($value)
    {
        $this->data['agencia'] =  RemessaAbstract::getLote(0)->entryData['agencia'];
    }

    protected function set_agencia_dv($value)
    {
        $this->data['agencia_dv'] = RemessaAbstract::getLote(0)->entryData['agencia_dv'];
    }

    protected function set_conta($value)
    {
        $this->data['conta'] =  RemessaAbstract::getLote(0)->entryData['conta'];
    }

    protected function set_conta_dv($value)
    {
        $this->data['conta_dv'] = RemessaAbstract::getLote(0)->entryData['conta_dv'];
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
            $especie = new Especie(RemessaAbstract::$banco);
            $this->data['especie_titulo'] = $especie->getCodigo($value);
        }
    }
}
