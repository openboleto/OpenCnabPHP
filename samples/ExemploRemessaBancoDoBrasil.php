<?php
/*
 * CnabPHP - Geração de arquivos de remessa e retorno em PHP
*
* LICENSE: The MIT License (MIT)
*
* Copyright (C) 2018 NextStep <http://github.com/nxstep-si>
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

use \CnabPHP\Remessa;

$arquivo = new Remessa("001",'cnab240',array(

		//Informações da emrpesa recebedora
		'tipo_inscricao'  	=>	'2', // 1 para cpf, 2 cnpj
		'numero_inscricao'	=>	'37.218.004/0001-50', // seu cpf ou cnpj completo
		'agencia'       	=>	'3046', // agencia sem o digito verificador
		'agencia_dv'    	=>	'5', // somente o digito verificador da agencia
		'conta'         	=> 	'25697', // número da conta
		'conta_dv'     		=> 	'5', // digito da conta
		'nome_empresa' 		=>	"Empresa ABC", // seu nome de empresa
		'numero_sequencial_arquivo'	=>	'00000', //Deve ter no máximo 5 dígitos, pode ficar com zeros.
		'convenio'	=> '106608', // codigo fornecido pelo banco
		'carteira'	=> '17', // codigo fornecido pelo banco
		'situacao_arquivo' =>'', // Deve ficar em branco para ser aceito. (TS para testes)
		'uso_bb1' => '009999999001411222' //Deve ter 18 dígitos
		//Deve ser preenchido no seguinte formato: convênio + 0014 + carteira + variação da carteira, com zeros a esquerda
));
$lote  = $arquivo->addLote(array(
		'tipo_servico'=> '1', //1 para cobrança registrada, 2 para sem registro
		'variacao' => '027' //Variação da carteira
	));

$lote->inserirDetalhe(array(
		//Registro 3P Dados do Boleto
		'nosso_numero'      => '1800001', // numero sequencial de boleto
		//Consulte a pág. 9 da documentação para mais informações sobre o nosso número
		//'nosso_numero_dv'   =>	1, // pode ser informado ou calculado pelo sistema
		'parcela' 			=>	'01',
		'modalidade'		=>	'1',
		'tipo_formulario'	=>	'4',
		'codigo_carteira'   =>	'4', // codigo da carteira ()
		//1 – para carteira 11/12 na modalidade Simples
		//2 ou 3 – para carteira 11/17 modalidade Vinculada/Caucionada e carteira 31
		//4 – para carteira 11/17 modalidade Descontada e carteira 51
		//7 – para carteira 17 modalidade Simples
                'emissao_boleto'    => 2, // tipo de emissao do boleto informar 2 para emissao pelo beneficiario e 1 para emissao pelo banco
                'carteira'   		=>	'17', // codigo da carteira
		'seu_numero'        =>	"DEV180001",// se nao informado usarei o nosso numero
		'data_vencimento'   =>	'2018-04-30', // informar a data neste formato AAAA-MM-DD
		'valor'             =>	'5.00', // Valor do boleto como float valido em php
		'cod_emissao_boleto'=>	'2', // tipo de emissao do boleto informar 2 para emissao pelo beneficiario e 1 para emissao pelo banco
		'especie_titulo'    => 	"DM", // informar dm e sera convertido para codigo em qualquer laytou conferir em especie.php
		'data_emissao'      => 	'2018-04-05', // informar a data neste formato AAAA-MM-DD
		'codigo_juros'		=>	'2', // Taxa por mês,
		'data_juros'   	  	=> 	'2018-04-30', // data dos juros, mesma do vencimento
		'vlr_juros'         => 	'0000000000001.00', // Valor do juros/mora informa 1% e o sistema recalcula a 0,03% por
		// Você pode inserir desconto se houver, ou deixar em branco
		//'codigo_desconto'	=>	'1',
		//'data_desconto'		=> 	'2018-04-15', // inserir data para calcular desconto
		//'vlr_desconto'		=> 	'0', // Valor do desconto
		//'vlr_IOF'			=> 	'0',
		'protestar'         => 	'1', // 1 = Protestar com (Prazo) dias, 3 = Devolver após (Prazo) dias
		'prazo_protesto'    => 	'90', // Informar o numero de dias apos o vencimento para iniciar o protesto
		'identificacao_contrato'	=>	"0000000000", //Campo não tratado pelo sistema. Pode ser informado 'zeros' ou o número do contrato de cobrança.

		// Registro 3Q [PAGADOR]
		'tipo_inscricao'    => '1', //campo fixo, escreva '1' se for pessoa fisica, 2 se for pessoa juridica
		'numero_inscricao'  => '638.035.884-64',//cpf ou ncpj do pagador
		'nome_pagador'      => "Elias Alves", // O Pagador é o cliente, preste atenção nos campos abaixo
		'endereco_pagador'  => 'Rua Esquerda, 42',
		'bairro_pagador'    => 'Bairro Queluz',
		'cep_pagador'       => '36400-000', // com hífem
		'cidade_pagador'    => 'Conselheiro Lafaiete',
		'uf_pagador'        => 'MG',

		// Registro 3R Multas, descontos, etc
		// Você pode inserir desconto se houver, ou deixar em branco, mas quando informar
		// deve preencher os 3 campos: codigo, data e valor
		'codigo_multa'		=>	'2', // Taxa por mês
		'data_multa'   	  	=> 	'2018-04-30', // data dos juros, mesma do vencimento
		'vlr_multa'         => 	'0000000000002.00', // Valor do juros de 2% ao mês

		// Registro 3S3 Mensagens a serem impressas
		'mensagem_1' 	=> "Após venc. Mora 0,03%/dia e Multa 2,00%",
		'mensagem_2' 	=> "Não conceder desconto",
		'mensagem_3' 	=> "Sujeito a protesto após o vencimento",
		'mensagem_4' 	=> "VelvetTux Soluções em Sistemas <('')",

));

$remessa = utf8_decode($arquivo->getText()); // observar a header do seu php para não gerar conflitos de codificação de caracteres;

/* Função que pega o nome das pastas de acordo com o número do ano
 * Caso as pastas não existam, serão criadas.
 * Os arquivos de remessa serão organizados em ano/mês
*/
/*function verificaPastas() {
	date_default_timezone_set('America/Sao_Paulo');
	$base_dir = dir('./data/remessas/');

	if (!is_dir($base_dir->path.date('Y').'/'.date('m').'/')){
		mkdir ($base_dir->path.date('Y'), 0755);
		mkdir($base_dir->path.date('Y').'/'.date('m'), 0755);
	};
	$base_dir = dir($base_dir->path.date('Y').'/'.date('m').'/');
	//Retorna o caminho para guardar o arquivo
	return $base_dir;
}

// Grava o arquivo
file_put_contents(verificaPastas()->path.$arquivo->getFileName(), $remessa);
verificaPastas()->close();*/
echo $remessa;

?>
