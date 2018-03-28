<?php
namespace CnabPHP\resources\generico\remessa\cnab400;
use CnabPHP\RegistroRemAbstract;
use CnabPHP\RemessaAbstract;
use Exception;

class Generico2 extends RegistroRemAbstract
{
    protected function set_numero_registro($value)
    {
        $lote  = RemessaAbstract::getLote(0);
        $this->data['numero_registro'] = $lote->get_counter();
    }

    protected function set_agencia($value)
    {
        $this->data['agencia'] = RemessaAbstract::getLote(0)->entryData['agencia'];
    }

    protected function set_agencia_dv($value)
    {
        $this->data['agencia_dv'] = RemessaAbstract::getLote(0)->entryData['agencia_dv'];
    }

    protected function set_conta($value)
    {
        $this->data['conta'] = RemessaAbstract::getLote(0)->entryData['conta'];
    }

    protected function set_conta_dv($value)
    {
        $this->data['conta_dv'] = RemessaAbstract::getLote(0)->entryData['conta_dv'];
    }
}
