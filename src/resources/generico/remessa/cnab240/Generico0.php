<?php
namespace CnabPHP\resources\generico\remessa\cnab240;
use CnabPHP\RegistroAbstract;

class Generico0 extends RegistroAbstract
{
	protected $counter;
	protected function set_situacao_arquivo($value)
	{
		$this->data['situacao_arquivo'] = ($value=='T')?"REMESSA-TESTE":"REMESSA-PRODUCAO";   
	}
	protected function set_data_geracao($value)
	{
		$this->data['data_geracao'] =  date('Y-m-d');
	}
	protected function set_hora_geracao($value)
	{
		$this->data['hora_geracao'] = date('His');
	}
	protected function set_numero_inscricao($value)
	{
		$this->data['numero_inscricao'] =  str_ireplace(array('.','/','-'),array(''),$value);
	}
	public function get_numero_registro(){
		return null;
	}

}
?>
