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
    private $siccob = array();
    private $santander = array();
    private $bradesco = array();
    private $banco;
    
    public function __construct($banco = null){
        $this->caixa[1] = array('abr'=>"CH",'txt'=>'Cheque');
        $this->caixa[2] = array('abr'=>"DM",'txt'=>'Duplicata Mercantil');
        $this->caixa[3] = array('abr'=>"DMI",'txt'=>'Mercantil p/ Indicação');
        $this->caixa[4] = array('abr'=>"DS",'txt'=>'Duplicata de Servião');  
        $this->caixa[5] = array('abr'=>"DSI",'txt'=>'Duplicata de Servião p/ Indicação');
        $this->caixa[6] = array('abr'=>"DR",'txt'=>'Duplicata Rural'); 
        $this->caixa[7] = array('abr'=>"LC",'txt'=>'Letra de CÃ¢mbio'); 
        $this->caixa[8] = array('abr'=>"NCC",'txt'=>'Nota de Crédito Comercial');
        $this->caixa[9] = array('abr'=>"NCE",'txt'=>'Nota de Crédito a Exportação');
        $this->caixa[10] = array('abr'=>"NCI",'txt'=>'Nota de Crédito a Exportação');
        $this->caixa[11] = array('abr'=>"NCR",'txt'=>'Nota de Crédito Rural');
        $this->caixa[12] = array('abr'=>"NP",'txt'=>'Nota Promissória');
        $this->caixa[13] = array('abr'=>"NPR",'txt'=>'Nota Promissória Rural');
        $this->caixa[14] = array('abr'=>"TM",'txt'=>'Triplicata Mercantil');
        $this->caixa[15] = array('abr'=>"TS",'txt'=>'Triplicata de Servião');
        $this->caixa[16] = array('abr'=>"NS",'txt'=>'Nota de Seguro');
        $this->caixa[17] = array('abr'=>"RC",'txt'=>'Recibo');
        $this->caixa[18] = array('abr'=>"FAT",'txt'=>'Fatura');
        $this->caixa[19] = array('abr'=>"ND",'txt'=>'Nota de Débito');
        
        $this->bb[1] = array('abr'=>"CH",'txt'=>'Cheque');
        $this->bb[2] = array('abr'=>"DM",'txt'=>'Duplicata Mercantil');
        $this->bb[3] = array('abr'=>"DMI",'txt'=>'Mercantil p/ Indicação');
        $this->bb[4] = array('abr'=>"DS",'txt'=>'Duplicata de Servião');  
        $this->bb[5] = array('abr'=>"DSI",'txt'=>'Duplicata de Servião p/ Indicação');
        $this->bb[6] = array('abr'=>"DR",'txt'=>'Duplicata Rural'); 
        $this->bb[7] = array('abr'=>"LC",'txt'=>'Letra de CÃ¢mbio');
        $this->bb[8] = array('abr'=>"NCC",'txt'=>'Nota de Crédito Comercial');
        $this->bb[9] = array('abr'=>"NCE",'txt'=>'Nota de Crédito a Exportação');
        $this->bb[10] = array('abr'=>"NCI",'txt'=>'Nota de Crédito a Exportação');
        $this->bb[11] = array('abr'=>"NCR",'txt'=>'Nota de Crédito Rural');
        $this->bb[12] = array('abr'=>"NP",'txt'=>'Nota Promissória');
        $this->bb[13] = array('abr'=>"NPR",'txt'=>'Nota Promissória Rural');
        $this->bb[14] = array('abr'=>"TM",'txt'=>'Triplicata Mercantil');
        $this->bb[15] = array('abr'=>"TS",'txt'=>'Triplicata de Servião');
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
        $this->itau[8] = array('abr'=>"DS",'txt'=>'Duplicata de Servião'); 
        $this->itau[9] = array('abr'=>"LC",'txt'=>'Letra de CÃ¢mbio');
        $this->itau[13] = array('abr'=>"ND",'txt'=>'Nota de Débito');
        $this->itau[15] = array('abr'=>"DV",'txt'=>'Documento de divida');
        $this->itau[16] = array('abr'=>"EC",'txt'=>'Encargos condominiais');
        $this->itau[17] = array('abr'=>"CPS",'txt'=>'Conta de prestação de servião');
        $this->itau[18] = array('abr'=>"DBP",'txt'=>'Boleto de Proposta');
        $this->itau[99] = array('abr'=>"DIV",'txt'=>'Diversos');
        
        $this->sicoob[1] = array('abr'=>"DM",'txt'=>'Duplicata Mercantil');
        $this->sicoob[2] = array('abr'=>"NP",'txt'=>'Nota Promissória');
        $this->sicoob[3] = array('abr'=>"NS",'txt'=>'Nota de Seguro');
        $this->sicoob[5] = array('abr'=>"RC",'txt'=>'Recibo');
        $this->sicoob[6] = array('abr'=>"DR",'txt'=>'Duplicata Rural');
        $this->sicoob[8] = array('abr'=>"LC",'txt'=>'Letra de CÃ¢mbio');
        $this->sicoob[9] = array('abr'=>"WRT",'txt'=>'Warrant');
        $this->sicoob[10] = array('abr'=>"CH",'txt'=>'Cheque'); 
        $this->sicoob[12] = array('abr'=>"DS",'txt'=>'Duplicata de Servião'); 
        $this->sicoob[13] = array('abr'=>"ND",'txt'=>'Nota de Débito');  
        $this->sicoob[14] = array('abr'=>"TM",'txt'=>'Triplicata Mercantil');
        $this->sicoob[15] = array('abr'=>"TS",'txt'=>'Triplicata de Servião');
        $this->sicoob[18] = array('abr'=>"FAT",'txt'=>'Fatura');
        $this->sicoob[20] = array('abr'=>"AP",'txt'=>'Apólice de Seguros');
        $this->sicoob[21] = array('abr'=>"ME",'txt'=>'Mensalidade escolar');
        $this->sicoob[22] = array('abr'=>"ME",'txt'=>'Parcela de Consórcio');
        $this->sicoob[99] = array('abr'=>"DIV",'txt'=>'Outros');        
        
        $this->santander[1] = array('abr'=>"DM",'txt'=>'Duplicata Mercantil');
        $this->santander[2] = array('abr'=>"NP",'txt'=>'Nota Promissória');
        $this->santander[3] = array('abr'=>"NS",'txt'=>'Nota de Seguro');
        $this->santander[5] = array('abr'=>"RC",'txt'=>'Recibo');
        $this->santander[6] = array('abr'=>"DR",'txt'=>'Duplicata Rural');
        $this->santander[8] = array('abr'=>"LC",'txt'=>'Letra de CÃ¢mbio');
        $this->santander[9] = array('abr'=>"WRT",'txt'=>'Warrant');
        $this->santander[10] = array('abr'=>"CH",'txt'=>'Cheque'); 
        $this->santander[12] = array('abr'=>"DS",'txt'=>'Duplicata de Servião'); 
        $this->santander[13] = array('abr'=>"ND",'txt'=>'Nota de Débito');  
        $this->santander[14] = array('abr'=>"TM",'txt'=>'Triplicata Mercantil');
        $this->santander[15] = array('abr'=>"TS",'txt'=>'Triplicata de Servião');
        $this->santander[18] = array('abr'=>"FAT",'txt'=>'Fatura');
        $this->santander[20] = array('abr'=>"AP",'txt'=>'Apólice de Seguros');
        $this->santander[21] = array('abr'=>"ME",'txt'=>'Mensalidade escolar');
        $this->santander[22] = array('abr'=>"ME",'txt'=>'Parcela de Consórcio');
        $this->santander[99] = array('abr'=>"DIV",'txt'=>'Outros');
        
        $this->bradesco[1] = array('abr'=>"DM",'txt'=>'Duplicata');
        $this->bradesco[2] = array('abr'=>"NP",'txt'=>'Nota Promissória');
        $this->bradesco[3] = array('abr'=>"NS",'txt'=>'Nota de Seguro');
        $this->bradesco[4] = array('abr'=>"NS",'txt'=>'Nota de Seguro');
        $this->bradesco[5] = array('abr'=>"RC",'txt'=>'Recibo');
        $this->bradesco[6] = array('abr'=>"DR",'txt'=>'Duplicata Rural');
        $this->bradesco[8] = array('abr'=>"LC",'txt'=>'Letra de Câmbio');
        $this->bradesco[9] = array('abr'=>"WRT",'txt'=>'Warrant');
        $this->bradesco[10] = array('abr'=>"CH",'txt'=>'Cheque'); 
        $this->bradesco[12] = array('abr'=>"DS",'txt'=>'Duplicata de Servião'); 
        $this->bradesco[13] = array('abr'=>"ND",'txt'=>'Nota de Débito');  
        $this->bradesco[14] = array('abr'=>"TM",'txt'=>'Triplicata Mercantil');
        $this->bradesco[15] = array('abr'=>"TS",'txt'=>'Triplicata de Servião');
        $this->bradesco[18] = array('abr'=>"FAT",'txt'=>'Fatura');
        $this->bradesco[20] = array('abr'=>"AP",'txt'=>'Apólice de Seguros');
        $this->bradesco[21] = array('abr'=>"ME",'txt'=>'Mensalidade escolar');
        $this->bradesco[22] = array('abr'=>"ME",'txt'=>'Parcela de Consórcio');
        $this->bradesco[99] = array('abr'=>"DIV",'txt'=>'Outros');
        
        $this->uniprime[1] = array('abr'=>"DM",'txt'=>'Duplicata');
        $this->uniprime[2] = array('abr'=>"NP",'txt'=>'Nota Promissória');
        $this->uniprime[3] = array('abr'=>"NS",'txt'=>'Nota de Seguro');
        $this->uniprime[4] = array('abr'=>"NS",'txt'=>'Nota de Seguro');
        $this->uniprime[5] = array('abr'=>"RC",'txt'=>'Recibo');
        $this->uniprime[6] = array('abr'=>"DR",'txt'=>'Duplicata Rural');
        $this->uniprime[8] = array('abr'=>"LC",'txt'=>'Letra de Câmbio');
        $this->uniprime[9] = array('abr'=>"WRT",'txt'=>'Warrant');
        $this->uniprime[10] = array('abr'=>"CH",'txt'=>'Cheque'); 
        $this->uniprime[12] = array('abr'=>"DS",'txt'=>'Duplicata de Servião'); 
        $this->uniprime[13] = array('abr'=>"ND",'txt'=>'Nota de Débito');  
        $this->uniprime[14] = array('abr'=>"TM",'txt'=>'Triplicata Mercantil');
        $this->uniprime[15] = array('abr'=>"TS",'txt'=>'Triplicata de Servião');
        $this->uniprime[18] = array('abr'=>"FAT",'txt'=>'Fatura');
        $this->uniprime[20] = array('abr'=>"AP",'txt'=>'Apólice de Seguros');
        $this->uniprime[21] = array('abr'=>"ME",'txt'=>'Mensalidade escolar');
        $this->uniprime[22] = array('abr'=>"ME",'txt'=>'Parcela de Consórcio');
        $this->uniprime[99] = array('abr'=>"DIV",'txt'=>'Outros');
        
        $this->res['104'] = $this->caixa;
        $this->res['341'] = $this->itau;
        $this->res['001'] = $this->bb;
        $this->res['756'] = $this->sicoob;
        $this->res['033'] = $this->santander;
        $this->res['237'] = $this->bradesco;
        $this->res['084'] = $this->uniprime;
        
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
