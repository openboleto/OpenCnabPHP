<?php
/*
 * CnabPHP - Geração de arquivos de remessa e retorno em PHP
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
namespace CnabPHP;

class Especie
{
	private $res = array();
	private $itau = array();
	private $caixa = array();
	private $bb = array();
	private $banco;
	
	public function __construct($banco = null){
		
		$this->caixa[1] = array('abr'=>"CH",'txt'=>'Cheque');
		$this->caixa[2] = array('abr'=>"DM",'txt'=>'Duplicata Mercantil');
		$this->caixa[3] = array('abr'=>"DMI",'txt'=>'Mercantil p/ Indicação');
		$this->caixa[4] = array('abr'=>"DS",'txt'=>'Duplicata de Serviço');  
		$this->caixa[5] = array('abr'=>"DSI",'txt'=>'Duplicata de Serviço p/ Indicação');
		$this->caixa[6] = array('abr'=>"DR",'txt'=>'Duplicata Rural'); 
		$this->caixa[7] = array('abr'=>"LC",'txt'=>'Letra de Câmbio'); 
		$this->caixa[8] = array('abr'=>"NCC",'txt'=>'Nota de Crédito Comercial');
		$this->caixa[9] = array('abr'=>"NCE",'txt'=>'Nota de Crédito a Exportação');
		$this->caixa[10] = array('abr'=>"NCI",'txt'=>'Nota de Crédito a Exportação');
		$this->caixa[11] = array('abr'=>"NCR",'txt'=>'Nota de Crédito Rural');
		$this->caixa[12] = array('abr'=>"NP",'txt'=>'Nota Promissória');
		$this->caixa[13] = array('abr'=>"NPR",'txt'=>'Nota Promissória Rural');
		$this->caixa[14] = array('abr'=>"TM",'txt'=>'Triplicata Mercantil');
		$this->caixa[15] = array('abr'=>"TS",'txt'=>'Triplicata de Serviço');
		$this->caixa[16] = array('abr'=>"NS",'txt'=>'Nota de Seguro');
		$this->caixa[17] = array('abr'=>"RC",'txt'=>'Recibo');
		$this->caixa[18] = array('abr'=>"FAT",'txt'=>'Fatura');
		$this->caixa[19] = array('abr'=>"ND",'txt'=>'Nota de Débito');
		
		$this->bb[1] = array('abr'=>"CH",'txt'=>'Cheque');
		$this->bb[2] = array('abr'=>"DM",'txt'=>'Duplicata Mercantil');
		$this->bb[3] = array('abr'=>"DMI",'txt'=>'Mercantil p/ Indicação');
		$this->bb[4] = array('abr'=>"DS",'txt'=>'Duplicata de Serviço');  
		$this->bb[5] = array('abr'=>"DSI",'txt'=>'Duplicata de Serviço p/ Indicação');
		$this->bb[6] = array('abr'=>"DR",'txt'=>'Duplicata Rural'); 
		$this->bb[7] = array('abr'=>"LC",'txt'=>'Letra de Câmbio');
		$this->bb[8] = array('abr'=>"NCC",'txt'=>'Nota de Crédito Comercial');
		$this->bb[9] = array('abr'=>"NCE",'txt'=>'Nota de Crédito a Exportação');
		$this->bb[10] = array('abr'=>"NCI",'txt'=>'Nota de Crédito a Exportação');
		$this->bb[11] = array('abr'=>"NCR",'txt'=>'Nota de Crédito Rural');
		$this->bb[12] = array('abr'=>"NP",'txt'=>'Nota Promissória');
		$this->bb[13] = array('abr'=>"NPR",'txt'=>'Nota Promissória Rural');
		$this->bb[14] = array('abr'=>"TM",'txt'=>'Triplicata Mercantil');
		$this->bb[15] = array('abr'=>"TS",'txt'=>'Triplicata de Serviço');
		$this->bb[16] = array('abr'=>"NS",'txt'=>'Nota de Seguro');
		$this->bb[17] = array('abr'=>"RC",'txt'=>'Recibo');
		$this->bb[18] = array('abr'=>"FAT",'txt'=>'Fatura');
		$this->bb[19] = array('abr'=>"ND",'txt'=>'Nota de Débito');
		
		
		$this->itau[1] = array('abr'=>"DM",'txt'=>'Duplicata Mercantil');
		$this->itau[2] = array('abr'=>"NP",'txt'=>'Nota Promissória');
		$this->itau[3] = array('abr'=>"NS",'txt'=>'Nota de Seguro');
		$this->itau[4] = array('abr'=>"ME",'txt'=>'Mensalidade escolar');
		$this->itau[5] = array('abr'=>"RC",'txt'=>'Recibo');
		$this->itau[6] = array('abr'=>"CT",'txt'=>'Contrato');
		$this->itau[7] = array('abr'=>"CS",'txt'=>'Cosseguros');
		$this->itau[8] = array('abr'=>"DS",'txt'=>'Duplicata de Serviço'); 
		$this->itau[9] = array('abr'=>"LC",'txt'=>'Letra de Câmbio');
		$this->itau[13] = array('abr'=>"ND",'txt'=>'Nota de Débito');
		$this->itau[15] = array('abr'=>"DV",'txt'=>'Documento de divida');
		$this->itau[16] = array('abr'=>"EC",'txt'=>'Encargos condominiais');
		$this->itau[17] = array('abr'=>"CPS",'txt'=>'Conta de prestação de serviço');
		$this->itau[18] = array('abr'=>"DBP",'txt'=>'Boleto de Proposta');
		$this->itau[99] = array('abr'=>"DIV",'txt'=>'Diversos');
		
		$this->res['104'] = $this->caixa;
		$this->res['341'] = $this->itau;
		$this->res['001'] = $this->bb;
		
		$this->banco = $this->res[$banco];        
	} 
	public function getAbr($especie){
		 return $this->banco[$especie]['abr'];
	}
	public function getBanco(){
		  return $this->banco;
	}
	public function getCodigo($abr){
		foreach($this->banco as $key => $especie){
			if($especie['abr']==$abr){
				return $key;
				break;
			}
		}
	}
	
}
