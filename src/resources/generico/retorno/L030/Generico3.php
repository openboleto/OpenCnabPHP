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
use CnabPHP\RemessaAbstract;
use CnabPHP\Especie;
use Exception;

class Generico3 extends RegistroRetAbstract
{
    public function get_R3U()
	{
		return $this->children[0];
	}
// 	protected function set_codigo_lote($value)
// 	{
// 		//ArquivoAbstract::$loteCounter++; 
// 		$this->data['codigo_lote'] = RemessaAbstract::$loteCounter;
// 	}
// 	protected function set_numero_registro($value)
// 	{
// 		$lote  = RemessaAbstract::getLote(RemessaAbstract::$loteCounter);
// 		$this->data['numero_registro'] = $lote->get_counter();
// 	}
// 	protected function set_tipo_inscricao($value)
// 	{
// 		$this->data['tipo_inscricao'] = RemessaAbstract::$entryData['tipo_inscricao'];
// 	}
// 	protected function set_numero_inscricao($value)
// 	{
// 		$this->data['numero_inscricao'] = ($value!='')?str_ireplace(array('.','/','-'),array(''),$value):str_ireplace(array('.','/','-'),array(''),RemessaAbstract::$entryData['numero_inscricao']);
// 	}
// 	protected function set_codigo_beneficiario($value)
// 	{
// 		$this->data['codigo_beneficiario'] = RemessaAbstract::$entryData['codigo_beneficiario'];
// 	}
// 	protected function set_agencia($value)
// 	{
// 		$this->data['agencia'] = RemessaAbstract::$entryData['agencia'];
// 	}
// 	protected function set_agencia_dv($value)
// 	{
// 		$this->data['agencia_dv'] = RemessaAbstract::$entryData['agencia_dv'];
// 	}
// 	protected function set_codigo_convenio($value)
// 	{
// 		$this->data['codigo_convenio'] = RemessaAbstract::$entryData['codigo_beneficiario'];
// 	}
// 	protected function set_com_registro($value)
// 	{
// 		$lote  = RemessaAbstract::getLote(RemessaAbstract::$loteCounter);
// 		$this->data['com_registro'] = $lote->tipo_servico;
// 	}
// 	protected function set_emissao_boleto($value)
// 	{
// 		$this->data['emissao_boleto'] = $value;
// 		if($this->data['nosso_numero']==0)
// 		{
// 			$this->data['carteira'] = '00'; 
// 		}
// 		elseif($this->data['com_registro']==1 && $value==1)
// 		{
// 			$this->data['carteira'] = 11;
// 		}
// 		elseif($this->data['com_registro']==1 && $value==2)
// 		{
// 			$this->data['carteira'] = 14;
// 		}
// 		elseif($this->data['com_registro']==2 && $value==1)
// 		{
// 			$this->data['carteira'] = 21;
// 		}
// 		else
// 		{
// 			throw new Exception("Registros com emissao pelo beneficiario e sem registro nao sao enviados"); 
// 		}   
// 	}
// 	protected function set_seu_numero($value)
// 	{
// 		if($this->data['nosso_numero']==0 && $value==' ')
// 		{
// 			throw new Exception('O campo "seu_numero" e obrigatorio, na sua falta usareio o nosso numero, porem esse tambem no foi inserido!!!');
// 		}
// 		else
// 		{
// 			$this->data['seu_numero'] = $value != ' ' ? $value : $this->data['nosso_numero'];    
// 		}
// 	}
// 	protected function set_seu_numero2($value)
// 	{
// 		$this->data['seu_numero2'] = $value != ' ' ? $value : $this->data['nosso_numero'];    
// 	}
// 	protected function set_especie_titulo($value)
// 	{
// 		if(is_int($value))
// 		{
// 			$this->data['especie_titulo'] = $value; 
// 		}
// 		else
// 		{
// 			$especie = new Especie($this->data['codigo_banco']);
// 			$this->data['especie_titulo'] = $especie->getCodigo($value);
// 		}
// 	}
// 	protected function set_cep_sufixo($value)
// 	{
// 		$cep = $this->data['cep_pagador'];
// 		$this->data['cep_pagador'] = explode('-',$cep)[0];
// 		$this->data['cep_sufixo'] = explode('-',$cep)[1];
// 	}
// protected function set_mensagem_3($value)
// 	{
// 		$mensagem = (isset($this->entryData['mensagem']))?explode(PHP_EOL,$this->entryData['mensagem']):array();
// 		$this->data['mensagem_3'] = count($mensagem)>=1?$mensagem[0]:' ';
// 	}
// 	protected function set_mensagem_4($value)
// 	{
// 		$mensagem = (isset($this->entryData['mensagem']))?explode(PHP_EOL,$this->entryData['mensagem']):array();
// 		$this->data['mensagem_4'] = count($mensagem)>=2?$mensagem[1]:' ';
// 	}
// 	protected function set_mensagem_5($value)
// 	{
// 		$mensagem = (isset($this->entryData['mensagem']))?explode(PHP_EOL,$this->entryData['mensagem']):array();
// 		$this->data['mensagem_5'] = count($mensagem)>=3?$mensagem[2]:' ';
// 	}
// 	protected function set_mensagem_6($value)
// 	{
// 		$mensagem = (isset($this->entryData['mensagem']))?explode(PHP_EOL,$this->entryData['mensagem']):array();
// 		$this->data['mensagem_6'] = count($mensagem)>=4?$mensagem[3]:' ';
// 	}
// 	protected function set_mensagem_7($value)
// 	{
// 		$mensagem = (isset($this->entryData['mensagem']))?explode(PHP_EOL,$this->entryData['mensagem']):array();
// 		$this->data['mensagem_7'] = count($mensagem)>=5?$mensagem[4]:' ';
// 	}
// 	protected function set_mensagem_8($value)
// 	{
// 		$mensagem = (isset($this->entryData['mensagem']))?explode(PHP_EOL,$this->entryData['mensagem']):array();
// 		$this->data['mensagem_8'] = count($mensagem)>=6?$mensagem[5]:' ';
// 	}    
}
?>
