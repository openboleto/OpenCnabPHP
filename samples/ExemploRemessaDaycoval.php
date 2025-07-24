<?php
namespace CnabPHP\samples;

require_once("../vendor/autoload.php");

use CnabPHP\Remessa;

$arquivo = new Remessa(707, 'cnab400', [
    'codigo_empresa' => '190600743770600',
    'nome_empresa' => 'Escola Internacional de São Paulo Ltda',
]);

$arquivo->inserirDetalhe([
	'nome_sacado' => 'Escola Internacional de São Paulo Ltda',
	'codigo_inscricao' => '02',
	'numero_inscricao' => '11457993000141',
    'codigo_empresa' => '190600743770600',
    'nosso_numero' => rand(84580106, 84580110),
    'seu_numero' => 'DEV1234567',
    'data_vencimento' => '2025-08-01',
	'valor_titulo' => number_format(150, 2, '', ''),
	'agencia_cobradora' => '0001',
	'especie_titulo' => '01',

	'juros_mora_dia' => '0',
	'data_desconto' => '2025-08-01',
	'valor_desconto' => number_format(50, 2, '', ''),

	'tipo_inscricao_sacado' => '01', // 01 = cpf / 02 = CGC
    'numero_inscricao_sacado' => '03071076207',
    'nome_sacado' => 'breno pantoja silva',
    'endereco_sacado' => 'Rua Laranjeira, 1425',
    'bairro_sacado' => 'brasil novo',
    'cep_sacado' => '68909177',
    'cidade_sacado' => 'macapá',
    'uf_sacado' => 'ap',
	'data_emissao' => date('Y-m-d'),
	'codigo_remessa' => '6'
]);

$arquivo->inserirDetalhe([
	'nome_sacado' => 'Escola Internacional de São Paulo Ltda',
	'codigo_inscricao' => '02',
	'numero_inscricao' => '11457993000141',
    'codigo_empresa' => '190600743770600',
    'nosso_numero' => rand(84580106, 84580110),
    'seu_numero' => 'DEV2345678',
    'data_vencimento' => '2025-08-01',
	'valor_titulo' => number_format(150, 2, '', ''),
	'agencia_cobradora' => '0001',
	'especie_titulo' => '01',

	'juros_mora_dia' => '0',
	'data_desconto' => '2025-08-01',
	'valor_desconto' => number_format(50, 2, '', ''),

	'tipo_inscricao_sacado' => '01', // 01 = cpf / 02 = CGC
    'numero_inscricao_sacado' => '03071076207',
    'nome_sacado' => 'breno pantoja silva',
    'endereco_sacado' => 'Rua Laranjeira, 1425',
    'bairro_sacado' => 'brasil novo',
    'cep_sacado' => '68909177',
    'cidade_sacado' => 'macapá',
    'uf_sacado' => 'ap',
	'data_emissao' => date('Y-m-d'),
	'codigo_remessa' => '6'
]);

$remessa = $arquivo->getText();

var_dump(substr_count($remessa, '000001'));

file_put_contents('DAY23071.txt', utf8_decode($remessa));
// file_put_contents('remessa-test.rem', $resultado);
echo $remessa;
