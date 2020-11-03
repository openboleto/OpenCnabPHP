<?php
/*
* CnabPHP - Gera��o de arquivos de remessa e retorno em PHP
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
namespace CnabPHP\resources\generico\retorno\L030;
use CnabPHP\RegistroRetAbstract;
use cnabPHP\RetornoAbstract;
use Exception;

class Generico1 extends RegistroRetAbstract
{
	// protected $counter = 1;
	// protected function set_codigo_lote($value)
	// { 
	// 	$this->data['codigo_lote'] = RetornoAbstract::$loteCounter;
	// }
	// public function set_tipo_servico($value)
	// {
	// 	if($value=='S'){
	// 		$this->data['tipo_servico'] = 1;
	// 	}elseif($value=='N'){
	// 		$this->data['tipo_servico'] = 2; 
	// 	}elseif((int)$value<=2){
	// 		$this->data['tipo_servico'] = $value; 
	// 	}else{
	// 		throw new Exception("O tipo de servico deve ser 1 ou S para Registrada ou 2 ou N para Sem Registro, o valor informado foi:".$value);
	// 	}
	// }	
	// protected function set_tipo_inscricao($value)
	// {
	// 	$this->data['tipo_inscricao'] =  $value ? $value : RetornoAbstract::$entryData['tipo_inscricao'];
	// }
	// protected function set_numero_inscricao($value)
	// {
	// 	$this->data['numero_inscricao'] = $value == '' ? str_ireplace(array('.','/','-'),array(''),RetornoAbstract::$entryData['numero_inscricao']):str_ireplace(array('.','/','-'),array(''),$value);
	// }
	// protected function set_codigo_beneficiario($value)
	// {
	// 	$this->data['codigo_beneficiario'] = $value == '' ?   RetornoAbstract::$entryData['codigo_beneficiario'] : $value;
	// }
	// protected function set_agencia($value)
	// {
	// 	$this->data['agencia'] = $value == '' ?   RetornoAbstract::$entryData['agencia'] : $value;
	// }
	// protected function set_agencia_dv($value)
	// {
	// 	$this->data['agencia_dv'] = $value == '' ?   RetornoAbstract::$entryData['agencia_dv'] : $value;
	// }
	// protected function set_codigo_convenio($value)
	// {
	// 	$this->data['codigo_convenio'] =  RetornoAbstract::$entryData['codigo_beneficiario'];
	// }
	// protected function set_nome_empresa($value)
	// {
	// 	$this->data['nome_empresa'] = $value == '' ? RetornoAbstract::$entryData['nome_empresa'] : $value;
	// }
	// protected function set_numero_remessa($value)
	// {
	// 	$this->data['numero_remessa'] =  $value == '' ? RetornoAbstract::$entryData['numero_sequencial_arquivo'] : $value;
	// }
	// protected function set_data_gravacao($value)
	// {
	// 	$this->data['data_gravacao'] = date('Y-m-d');
	// }
	// public function get_counter(){
	// 	$this->counter++;
	// 	return $this->counter;
	// }
	// public function inserirDetalhe($data)
	// {
	// 	$class = 'CnabPHP\resources\\'.RetornoAbstract::$banco.'\remessa\\'.RetornoAbstract::$layout.'\Registro3P';
	// 	$this->children[] = new $class($data);
	// }
	// public function getText(){
	// 	$retorno = '';
	// 	$dataReg5 = array();
	// 	$dataReg5['qtd_titulos_simples']   = '0';
	// 	$dataReg5['qtd_titulos_caucionada']= '0';
	// 	$dataReg5['qtd_titulos_descontada']= '0';
	// 	$dataReg5['vrl_titulos_simples']   = '0.00';
	// 	$dataReg5['vlr_titulos_caucionada']= '0.00';
	// 	$dataReg5['vlr_titulos_descontada']= '0.00';

	// 	foreach($this->meta as $key=>$value){
	// 		$retorno .= $this->$key;
	// 	}
	// 	RetornoAbstract::$retorno[] = $retorno;
	// 	if ($this->children)
	// 	{
	// 		// percorre todos objetos filhos
	// 		foreach ($this->children as $child)
	// 		{
	// 			if($child->codigo_carteira==1)
	// 			{
	// 				$dataReg5['qtd_titulos_simples']++;   
	// 				$dataReg5['vrl_titulos_simples'] += $child->getUnformated('valor');
	// 			}
	// 			if($child->codigo_carteira==3)
	// 			{
	// 				$dataReg5['qtd_titulos_caucionada']++;
	// 				$dataReg5['vlr_titulos_caucionada'] += $child->getUnformated('valor');

	// 			}
	// 			if($child->codigo_carteira==4)
	// 			{
	// 				$dataReg5['qtd_titulos_descontada'] ++;   
	// 				$dataReg5['vlr_titulos_descontada'] += $child->getUnformated('valor'); 
	// 			}
	// 			$child->getText();
	// 		}
	// 		$class = 'CnabPHP\resources\\'.RetornoAbstract::$banco.'\remessa\\'.RetornoAbstract::$layout.'\Registro5';
	// 		$registro5 = new $class($dataReg5);
	// 		$registro5->getText();
	// 	}
	// }
}
?>
