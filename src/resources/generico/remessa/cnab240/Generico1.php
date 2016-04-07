<?php
namespace CnabPHP\resources\generico\remessa\cnab240;
use CnabPHP\RegistroAbstract;
use cnabPHP\RemessaAbstract;

class Generico1 extends RegistroAbstract
{
	protected function set_codigo_lote($value)
	{ 
		$this->data['codigo_lote'] = RemessaAbstract::$loteCounter;
	}
	protected function set_tipo_inscricao($value)
	{
		$this->data['tipo_inscricao'] =  $value ? $value : RemessaAbstract::$entryData['tipo_inscricao'];
	}
	protected function set_numero_inscricao($value)
	{
		$this->data['numero_inscricao'] = $value == '' ? str_ireplace(array('.','/','-'),array(''),RemessaAbstract::$entryData['numero_inscricao']):str_ireplace(array('.','/','-'),array(''),$value);
	}
	protected function set_codigo_beneficiario($value)
	{
		$this->data['codigo_beneficiario'] = $value == '' ?   RemessaAbstract::$entryData['codigo_beneficiario'] : $value;
	}
	protected function set_agencia($value)
	{
		$this->data['agencia'] = $value == '' ?   RemessaAbstract::$entryData['agencia'] : $value;
	}
	protected function set_agencia_dv($value)
	{
		$this->data['agencia_dv'] = $value == '' ?   RemessaAbstract::$entryData['agencia_dv'] : $value;
	}
	protected function set_codigo_convenio($value)
	{
		$this->data['codigo_convenio'] =  $value == '' ?  RemessaAbstract::$entryData['codigo_beneficiario'] : $value;
	}
	protected function set_nome_empresa($value)
	{
		$this->data['nome_empresa'] = $value == '' ? RemessaAbstract::$entryData['nome_empresa'] : $value;
	}
	protected function set_numero_remessa($value)
	{
		$this->data['numero_remessa'] =  $value == '' ? RemessaAbstract::$entryData['numero_sequencial_arquivo'] : $value;
	}
	protected function set_data_gravacao($value)
	{
		$this->data['data_gravacao'] = date('Y-m-d');
	}
	public function inserirDetalhe($data)
	{
		$class = 'CnabPHP\resources\\'.RemessaAbstract::$banco.'\remessa\\'.RemessaAbstract::$layout.'\Registro3P';
		$this->children[] = new $class($data);
	}
}
?>
