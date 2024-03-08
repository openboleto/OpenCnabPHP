# OpenCnabPHP 

Considere doar fundos para nos apoiar

![qr-code-plus](https://github.com/openboleto/OpenCnabPHP/assets/17881422/dd59a24c-8560-489c-95b0-a1953484fc84)

<ul>
<li>
Um arquivo remessaAbstract cuida das questões sobre arquivos em geral.
</li>
<li>
A classe para cada Remessa herda remssaAbstract e seta o nome do banco que é a pasta para os layouts personalizados
</li>
<li>
RegistroAbstract cuida de metodos unicos para qualquer registro de qualquer layout,
</li>
<li>
Uma classe genérico herda registroAbstract e implementa setters e getters comuns ao registro de um determinado layout
</li>
e por fim uma classe registro herda de genérico e define o layout que sera usado e se por ventura for necessario sobrepõe ou implementa novos getters e setters do arquivo generico.
</li><br>

## Utilizando docker:
Esteja na raiz do projeto e execute:
```shell
docker-compose up -d
```
## Instalando via composer:


Adicione "openboleto/opencnabphp": "dev-master" ao seu composer.json e rode update ou install

Acesse a url de exemplo: 
`http://localhost:8080/samples/ExemploRemessa.php`

## Status de desenvolvimento
<table>
    <tr>
        <td colspan="3" >
            REMESSA
        </td>
        <td colspan="2">
            RETORNO
        </td>
    </tr>
    <tr>
        <td >
            Banco
        </td>
        <td>
            Layout
        </td>
        <td>
           Situação 
        </td>
        <td>
            Layout
        </td>
        <td>
           Situação 
        </td>
    </tr>
    <tr>
        <td>
            Banco do Brasil
        </td>
        <td>
            Cnab240
        </td>
        <td>
            Homologado
        </td>
        <td>
            Cnab240
        </td>
        <td>
            Beta
        </td>
    </tr>
    <tr>
        <td>
            Bradesco
        </td>
        <td>
            Cnab400
        </td>
        <td>
            Homologado
        </td>
        <td>
            Cnab400
        </td>
        <td>
            Beta
        </td>
    </tr>
    <tr>
        <td>
            Caixa
        </td>
        <td>
            Cnab240_SIGCB
        </td>
        <td>
            DESATIVADO**
        </td>
        <td>
            Cnab240_SIGCB
        </td>
        <td>
            Homologado
        </td>
    </tr>
    <tr>
        <td>
            Caixa
        </td>
        <td>
            Cnab240_Transf
        </td>
        <td>
            Homologado
        </td>
        <td>
            Cnab240_Transf
        </td>
        <td>
            Homologado
        </td>
    </tr>
    <tr>
        <td>
            Itau
        </td>
        <td>
            Cnab240
        </td>
        <td>
            Beta
        </td>
        <td>
            Cnab240
        </td>
        <td>
            Beta
        </td>
    </tr>
    <tr>
        <td>
            Itau
        </td>
        <td>
            Cnab400
        </td>
        <td>
            Homologado
        </td>
        <td>
            Cnab400
        </td>
        <td>
            Homologado
        </td>
    </tr>
    <tr>
        <td>
            Santander
        </td>
        <td>
            Cnab240
        </td>
        <td>
            Homologado
        </td>
        <td>
           Cnab240 
        </td>
        <td>
            Beta
        </td>
    </tr>
    <tr>
        <td>
            SICOOB
        </td>
        <td>
            Cnab400
        </td>
        <td>
            Homologado
        </td>
        <td>
            Cnab400
        </td>
        <td>
            Homologado
        </td>
    </tr>
    <tr>
        <td>
            SICOOB
        </td>
        <td>
            Cnab240
        </td>
        <td>
            Homologado
        </td>
        <td>
            Cnab240
        </td>
        <td>
            Homologado
        </td>
    </tr>
    <tr>
        <td>
            SICREDI
        </td>
        <td>
            Cnab400
        </td>
        <td>
            Homologado
        </td>
        <td>
            Cnab400
        </td>
        <td>
            Beta
        </td>
    </tr>
    <tr>
        <td>
            UniPrime
        </td>
        <td>
            Cnab400
        </td>
        <td>
            Homologado
        </td>
        <td>
            Cnab400
        </td>
        <td>
            Beta
        </td>
    </tr>
    <tr>
        <td>
            UniCred
        </td>
        <td>
            -
        </td>
        <td>
            -
        </td>
        <td>
            Cnab400
        </td>
        <td>
            Homologado
        </td>
    </tr>
    <tr>
        <td>
            C6 Bank
        </td>
        <td>
            Cnab400
        </td>
        <td>
            Homologado
        </td>
        <td>
            Cnab400
        </td>
        <td>
            Homologado
        </td>
    </tr>    
    <tr>
        <td>
            Banco ABC
        </td>
        <td>
            Cnab240
        </td>
        <td>
            Beta
        </td>
        <td>
            Cnab240
        </td>
        <td>
            Beta
        </td>
    </tr>  
	<tr>
        <td>
            Banco Votorantin
        </td>
        <td>
            Cnab240
        </td>
        <td>
            Beta
        </td>
        <td>
            Cnab240
        </td>
        <td>
            Beta
        </td>
    </tr> 
</table>

** o layout da caixa foi desativado pela caixa , modificações serão necessárias para que volte a funcionar
veja essa issue para entender melhor
https://github.com/QuilhaSoft/OpenCnabPHP/issues/184

```php

<?php
use \CnabPHP\Remessa;

$arquivo = new Remessa(104,'cnab240_SIGCB',array(
    'nome_empresa' =>"Empresa ABC", // seu nome de empresa
    'tipo_inscricao'  => 2, // 1 para cpf, 2 cnpj 
    'numero_inscricao' => $empresa->empresas_cnpjcpf, // seu cpf ou cnpj completo
    'agencia'       => '1234', // agencia sem o digito verificador 
    'agencia_dv'    => 1, // somente o digito verificador da agencia 
    'conta'         => '12345', // número da conta
    'conta_dv'     => 1, // digito da conta
    'codigo_beneficiario'     => '123456', // codigo fornecido pelo banco
    'numero_sequencial_arquivo'     => 1, // sequencial do arquivo um numero novo para cada arquivo gerado
));
$lote  = $arquivo->addLote(array('tipo_servico'=> 1)); // tipo_servico  = 1 para cobrança registrada, 2 para sem registro

$lote->inserirDetalhe(array(

    'codigo_movimento'  => 1, //1 = Entrada de título, para outras opçoes ver nota explicativa C004 manual Cnab_SIGCB na pasta docs
    'nosso_numero'      => 50, // numero sequencial de boleto
    'seu_numero'        => 43,// se nao informado usarei o nosso numero 
    
    /* campos necessarios somente para itau e siccob,  não precisa comentar se for outro layout    */
    'carteira_banco'    => 109, // codigo da carteira ex: 109,RG esse vai o nome da carteira no banco
    'cod_carteira'      => "01", // I para a maioria ddas carteiras do itau
    /*----------------------------------------------------------------------------------------    */
     
    'especie_titulo'    => "DM", // informar dm e sera convertido para codigo em qualquer laytou conferir em especie.php
    'valor'             => 100.00, // Valor do boleto como float valido em php
    'emissao_boleto'    => 2, // tipo de emissao do boleto informar 2 para emissao pelo beneficiario e 1 para emissao pelo banco
    'protestar'         => 3, // 1 = Protestar com (Prazo) dias, 3 = Devolver após (Prazo) dias
    'prazo_protesto'    => 5, // Informar o numero de dias apos o vencimento para iniciar o protesto
    'nome_pagador'      => "JOSÉ da SILVA ALVES", // O Pagador é o cliente, preste atenção nos campos abaixo
    'tipo_inscricao'    => 1, //campo fixo, escreva '1' se for pessoa fisica, 2 se for pessoa juridica
    'numero_inscricao'  => '123.122.123-56',//cpf ou ncpj do pagador
    'endereco_pagador'  => 'Rua dos developers,123 sl 103',
    'bairro_pagador'    => 'Bairro da insonia',
    'cep_pagador'       => '12345-123', // com hífem
    'cidade_pagador'    => 'Londrina',
    'uf_pagador'        => 'PR',
    'data_vencimento'   => '2016-04-09', // informar a data neste formato
    'data_emissao'      => '2016-04-09', // informar a data neste formato
    'vlr_juros'         => 0.15, // Valor do juros de 1 dia'
    'data_desconto'     => '2016-04-09', // informar a data neste formato
    'vlr_desconto'      => '0', // Valor do desconto
    'baixar'            => 1, // codigo para indicar o tipo de baixa '1' (Baixar/ Devolver) ou '2' (Não Baixar / Não Devolver)
    'prazo_baixar'       => 90, // prazo de dias para o cliente pagar após o vencimento
    'mensagem'          => 'JUROS de R$0,15 ao dia'.PHP_EOL."Não receber apos 30 dias",
    'email_pagador'     => 'rogerio@ciatec.net', // data da multa
    'data_multa'        => '2016-04-09', // informar a data neste formato, // data da multa
    'vlr_multa'         => 30.00, // valor da multa
    
    // campos necessários somente para o sicoob
    'taxa_multa'         => 30.00, // taxa de multa em percentual
    'taxa_juros'         => 30.00, // taxa de juros em percentual
));        
echo $arquivo->getText();
```

<line>
<h3>Lendo retorno</h3>

```php
<?php
$fileContent = file_get_contents("retorno_cnab240_caixa.ret");

$arquivo = new Retorno($fileContent);

$registros = $arquivo->getRegistros();
foreach($registros as $registro)
{
    if($registro->R3U->codigo_movimento==6){
        $nossoNumero   = $registro->nosso_numero;
        $valorRecebido = $registro->R3U->vlr_pago;
        $dataPagamento = $registro->R3U->data_ocorrencia;
        $carteira      = $registro->carteira;
        // você ja pode dar baixa
    }
}
```

Caso o arquivo de retorno seja do Tipo 4 (Bradesco - Layout 400 - Pix), sugestão:

```php
$fileContent = file_get_contents("retorno_cnab240_caixa.ret");

$arquivo = new Retorno($fileContent);

$registros = $arquivo->getRegistros();

for($i = 0; $i < count($registros); $i++) {
    $pix = null;
    if ($arquivo->hasPix() && $arquivo->getLayout() == 'L400') {
    if ($i%2 == 0) { // Dados do registro na posição 'Par'
        $registro = $registros[$i];
    }
    if (($i+1)%2 != 0) { // Dados do Pix na posição 'Ímpar'
        $pix = $registros[$i+1];
    }
    $i++;
} else {
    $registro = $registros[$i];
}

$spiUrl = $pix->pix_url; // URL para geração do QR Code (Padrão EMV utilizado pelo Banco Central do Brasil)
$txid = $pix->txid; // Identificador da transação
```

Aguardando voluntarios para edição e testes dos layouts.

## Licença

* MIT License
