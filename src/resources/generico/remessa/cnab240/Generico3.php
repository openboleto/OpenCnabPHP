<?php
namespace CnabPHP\resources\generico\remessa\cnab240;
use CnabPHP\RegistroAbstract;
use cnabphp\ArquivoAbstract;

class Generico3 extends RegistroAbstract
{
	protected function set_codigo_lote($value)
	{
		ArquivoAbstract::$loteCounter++; 
		$this->data['codigo_lote'] = ArquivoAbstract::$loteCounter;
	}
	protected function set_tipo_inscricao($value)
	{
		$this->data['tipo_inscricao'] = ArquivoAbstract::$entryData['tipo_inscricao'];
	}
	protected function set_numero_inscricao($value)
	{
		$this->data['numero_inscricao'] = ($value!='')?str_ireplace(array('.','/','-'),array(''),$value):str_ireplace(array('.','/','-'),array(''),ArquivoAbstract::$entryData['numero_inscricao']);
	}
	protected function set_codigo_beneficiario($value)
	{
		$this->data['codigo_beneficiario'] = ArquivoAbstract::$entryData['codigo_beneficiario'];
	}
	protected function set_agencia($value)
	{
		$this->data['agencia'] = ArquivoAbstract::$entryData['agencia'];
	}
	protected function set_agencia_dv($value)
	{
		$this->data['agencia_dv'] = ArquivoAbstract::$entryData['agencia_dv'];
	}
	protected function set_codigo_convenio($value)
	{
		$this->data['codigo_convenio'] = ArquivoAbstract::$entryData['codigo_beneficiario'];
	}
	protected function set_nome_empresa($value)
	{
		$this->data['nome_empresa'] = ArquivoAbstract::$entryData['nome_empresa'];
	}
	protected function set_mensagem_fixa1($value)
	{
		$this->data['mensagem_fixa1'] = isset(ArquivoAbstract::$entryData['mensagem_fixa1'])?ArquivoAbstract::$entryData['mensagem_fixa1']:' ';
	}
	protected function set_mensagem_fixa2($value)
	{
		$this->data['mensagem_fixa2'] = isset(ArquivoAbstract::$entryData['mensagem_fixa2'])?ArquivoAbstract::$entryData['mensagem_fixa2']:' ';
	}
	protected function set_numero_remessa($value)
	{
		$this->data['numero_remessa'] = ArquivoAbstract::$entryData['numero_sequencial_arquivo'];
	}
	protected function set_data_gravacao($value)
	{
		$this->data['data_gravacao'] = date('Y-m-d');
	}
	
	public function __construct($data = null)
	{
		if(empty($this->data))parent::__construct($data);
		//$this->inserirDetalhe($data);
	}    
}
?>
