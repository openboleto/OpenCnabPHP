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
namespace CnabPHP\samples;
use \CnabPHP\Retorno;
include("../autoloader.php");
$fileContent = file_get_contents("IEDCBR811510202013128.ret");

$arquivo = new Retorno($fileContent);

$registros = $arquivo->getRegistros();
foreach($registros as $registro)
{
	if($registro->R3U->codigo_movimento==6){
        $nossoNumero   = $registro->filler3; #Identificacao do boleto
        $valorRecebido = $registro->vlr_pago;
        $dataPagamento = $registro->R3U->data_credito;
		$carteira      = $registro->carteira;
        $vlr_juros_multa = $registro->valor;
        $vlr_desconto = $registro->R3U->vlr_desconto;
        echo $nossoNumero.'<br />';
        echo $vlr_desconto.'<br />';
        echo $dataPagamento.'<br />';
        echo $vlr_juros_multa.'<br />';
		// você ja pode dar baixa
    }
}
?>