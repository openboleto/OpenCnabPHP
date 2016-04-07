<?php
namespace CnabPHP\resources\generico\remessa\cnab240;
use CnabPHP\RegistroAbstract;
use cnabphp\RemessaAbstract;

class Generico3 extends RegistroAbstract
{
	protected function set_codigo_lote($value)
	{
		//ArquivoAbstract::$loteCounter++; 
		$this->data['codigo_lote'] = RemessaAbstract::$loteCounter;
	}
	protected function set_tipo_inscricao($value)
	{
		$this->data['tipo_inscricao'] = RemessaAbstract::$entryData['tipo_inscricao'];
	}
	protected function set_numero_inscricao($value)
	{
		$this->data['numero_inscricao'] = ($value!='')?str_ireplace(array('.','/','-'),array(''),$value):str_ireplace(array('.','/','-'),array(''),RemessaAbstract::$entryData['numero_inscricao']);
	}
	protected function set_codigo_beneficiario($value)
	{
		$this->data['codigo_beneficiario'] = RemessaAbstract::$entryData['codigo_beneficiario'];
	}
	protected function set_agencia($value)
	{
		$this->data['agencia'] = RemessaAbstract::$entryData['agencia'];
	}
	protected function set_agencia_dv($value)
	{
		$this->data['agencia_dv'] = RemessaAbstract::$entryData['agencia_dv'];
	}
	protected function set_codigo_convenio($value)
	{
		$this->data['codigo_convenio'] = RemessaAbstract::$entryData['codigo_beneficiario'];
	}
	protected function set_nome_empresa($value)
	{
		$this->data['nome_empresa'] = RemessaAbstract::$entryData['nome_empresa'];
	}
	protected function set_mensagem_fixa1($value)
	{
		$this->data['mensagem_fixa1'] = isset(RemessaAbstract::$entryData['mensagem_fixa1'])?RemessaAbstract::$entryData['mensagem_fixa1']:' ';
	}
	protected function set_mensagem_fixa2($value)
	{
		$this->data['mensagem_fixa2'] = isset(RemessaAbstract::$entryData['mensagem_fixa2'])?RemessaAbstract::$entryData['mensagem_fixa2']:' ';
	}
	protected function set_numero_remessa($value)
	{
		$this->data['numero_remessa'] = RemessaAbstract::$entryData['numero_sequencial_arquivo'];
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
