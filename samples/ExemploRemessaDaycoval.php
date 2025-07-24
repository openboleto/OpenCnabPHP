<?php
namespace CnabPHP\samples;

require_once("../vendor/autoload.php");

use CnabPHP\Remessa;

$arquivo = new Remessa(707, 'cnab400', [
    'codigo_empresa' => '190600743770600',
    'nome_empresa' => 'Escola Internacional de São Paulo Ltda',
]);

$arquivo->inserirDetalhe([
	'codigo_inscricao' => '02',
	'numero_inscricao' => '11457993000141',
    'codigo_empresa' => '190600743770600',
    'nosso_numero' => '12345678',
    'seu_numero' => 'DEV1234567',
    'data_vencimento' => '1995-03-21',
	'valor_titulo' => '15000',
	'agencia_cobradora' => '0001',
	'dac_agencia_cobradora' => '9',
	'especie_titulo' => '01',

	'juros_mora_dia' => '0',
	'data_desconto' => '1995-03-21',
	'valor_desconto' => '5000',

	'tipo_inscricao_sacado' => '01',
    'numero_inscricao_sacado' => '03071076207',
    'nome_sacado' => 'breno pantoja silva',
    'endereco_sacado' => 'laranjeira',
    'bairro_sacado' => 'brasil novo',
    'cep_sacado' => '68909177',
    'cidade_sacado' => 'macapá',
    'uf_sacado' => 'ap',
    'numero_sequencial' => 1,
	'data_emissao' => date('Y-m-d'),
	'codigo_remessa' => '1'
]);

$remessa = $arquivo->getText();

file_put_contents('remessa-test.rem', utf8_decode($remessa));
// file_put_contents('remessa-test.rem', $resultado);
echo $remessa;
