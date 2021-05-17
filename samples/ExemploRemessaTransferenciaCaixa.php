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


require_once ("../autoloader.php");

use CnabPHP\Remessa;

//Registro 0
$arquivo = new Remessa("104",'cnab240_transf',array(
    'tipo_inscricao'        => 2, // 1 para cpf, 2 cnpj 
    'numero_inscricao'      => "82945474000170", // seu cpf ou cnpj completo
    'convenio_caixa'        => '654321', // informado pelo banco, ate 6 digitos
    'param_transmissao'     => '12', // ate 2 digitos, fornecido pela caixa
    'amb_cliente'           => "T", // T teste e P producao
    'agencia'               => '12345', // sua agencia (pagador), sem o digito verificador 
    'agencia_dv'            => '4', // somente o digito verificador da agencia 
    'operacao_conta'        => '003', // operacao da conta da caixa. Ate 4 digitos. Apenas algumas contas da caixa possuem operacao.
    'conta'                 => '54321', // numero da sua conta
    'conta_dv'              => 8, // digito da conta
    'nome_empresa'          => "Nome da empresa", // seu nome de empresa max 30
    'numero_sequencial_arquivo' => 1, // sequencial do arquivo um numero novo para cada arquivo gerado
    'reservado_empresa'     => 11, // Pode ser um numero para identificar no arquivo de retorno, pode ser o id do arquivo de remessa.
    'somatorio_valores'     => 57.42 // Valor total da transferencia.
));

//Registro 1
$lote  = $arquivo->addLote(array(   //HEADER DO LOTE
    'tipo_servico_transf'   => '98', // '98' = Pagamentos Diversos - tem a lista na pagina 39, G025 http://www.caixa.gov.br/Downloads/pagamentos-de-salarios-fornecedores-e-auto-pagamento/Leiaute_CNAB_240_Pagamentos.pdf
    'forma_lancamento'      => '03', // 06.1 - 03 DOC. e 41 TED. lista completa na pag 39, G029,  http://www.caixa.gov.br/Downloads/pagamentos-de-salarios-fornecedores-e-auto-pagamento/Leiaute_CNAB_240_Pagamentos.pdf
    'convenio_caixa'        => '123456', // informado pelo banco, convenio caixa (ate 6 digitos)
    'tipo_compromisso'      => '01', //01 Pagamento a Fornecedor - 02 Pagamento de Salarios - 03 Autopagamento - 06 Salario Ampliacao de Base - 11 Debito em Conta			
    'codigo_compromisso'    => '0001', // informado pelo banco. 4 Digitos
    'param_transmissao'     => '01', // informado pelo banco, ate 2 digitos, 
    'logradouro'            => 'Logradouro teste',
    'numero_endereco'       => 58,
    'cidade'                => 'Belo Horizonte',
    'cep'                   => 12345,
    'complemento_cep'       => '050',
    'estado'                => 'MG'
)); 

$lote->inserirTransferencia(array(

    //Segmento A
    'codigo_camera'     => '700', // 018 TED - 700 DOC/OP - 000 Credito em Conta - 888 Boleted/ISPB 
    'cod_banco_fav'     => '5',
    'agen_cta_favor'    => '4562',
    'dig_ver_agen'      => '6',
    'conta_corrente_fav'=> '4562',
    'dig_conta_fav'     => '8',
    'nome_fav'          => "Nome do favorecido",
    'num_atribuido_empresa' => 1, //numero para identificar a transferencia. Retornado conforme recebido. Deve ser maior que 0. Pode ser o id da transferencia, para dar baixa depois quando enviar o arquivo de retorno
    'tipo_conta_ted'    => '1', //preencher apenas se a transferencia for do tipo TED. 1 – Conta corrente; 2 – Poupança;
    'cod_finalidade_doc'=> '01', //preencher apenas se a transferencia for do tipo doc. Valores na tabela P005, pag 39 - http://www.caixa.gov.br/Downloads/pagamentos-de-salarios-fornecedores-e-auto-pagamento/Leiaute_CNAB_240_Pagamentos.pdf
    'data_pagamento'    => '2020-08-16',
    'valor_pagamento'   => 57.42,
    
    //Segmento B
    'logradouro'        => 'nome da rua teste',
    'num_do_local'      => 588,
    'bairro'            => 'nome do bairro',
    'cidade'            => 'Belo Horizonte',
    'cep'               => 30190,
    'complemento_cep'   => '050',
    'sigla_estado'      => 'MG',
    'tipo_inscricao'    => 1, //campo fixo, escreva '1' se for pessoa fisica, 2 se for pessoa juridica
    'numero_inscricao'  => '59338928071',//cpf ou ncpj do favorecido
));
echo utf8_decode($arquivo->getText()); // observar a header do seu php para não gerar comflitos de codificação de caracteres

?>
