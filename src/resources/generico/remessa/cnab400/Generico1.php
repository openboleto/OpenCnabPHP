<?php
namespace CnabPHP\resources\generico\remessa\cnab400;
use CnabPHP\RegistroRemAbstract;
use CnabPHP\RemessaAbstract;

class Generico1 extends RegistroRemAbstract
{
    protected function set_numero_registro($value)
    {
        $lote  = RemessaAbstract::getLote(0);
        $this->data['numero_registro'] = $lote->get_counter();
    }

    protected function set_tipo_inscricao_empresa($value)
    {
        $this->data['tipo_inscricao_empresa'] = RemessaAbstract::$entryData['tipo_inscricao'];
    }

    protected function set_numero_inscricao_empresa($value)
    {
        $this->data['numero_inscricao_empresa'] = str_ireplace(array('.','/','-'),array(''), RemessaAbstract::$entryData['numero_inscricao']);

    }

    protected function set_agencia($value)
    {
        $this->data['agencia'] = RemessaAbstract::$entryData['agencia'];
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

}

?>
