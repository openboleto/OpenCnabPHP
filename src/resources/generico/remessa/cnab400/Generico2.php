<?php
namespace CnabPHP\resources\generico\remessa\cnab400;
use CnabPHP\RegistroRemAbstract;
use CnabPHP\RemessaAbstract;

class Generico2 extends RegistroRemAbstract
{
    protected function set_numero_registro($value)
    {
        $lote  = RemessaAbstract::getLote(0);
        $this->data['numero_registro'] = $lote->get_counter();
    }


}

?>
