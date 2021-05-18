<?php
namespace CnabPHP\Tests;

use CnabPHP\Remessa;
use CnabPHP\RegistroRemAbstract;
use CnabPHP\resources\B104\remessa\cnab240_SIGCB\Registro1;
use PHPUnit\Framework\TestCase;
use ReflectionMethod;
use ReflectionClass;

/**
 * Remessa Test Case.
 *
 * @author Thiago Paes <mrprompt@gmail.com>
 */
class RemessaTest extends TestCase
{
    /**
     * The Remessa Object
     * 
     * @var Remessa
     */
    private $remessa;

    /**
     * Setup
     */
    public function setUp()
    {
        parent::setUp();
        
        $this->remessa = new Remessa(
            '104', 
            'cnab240_SIGCB', 
            [
                'nome_empresa' =>"Empresa ABC", // seu nome de empresa
                'tipo_inscricao'  => 2, // 1 para cpf, 2 cnpj 
                'numero_inscricao' => '123.122.123-56', // seu cpf ou cnpj completo
                'agencia'       => "3300", // agencia sem o digito verificador 
                'agencia_dv'    => '1', // somente o digito verificador da agencia 
                'conta'         => '3264', // número da conta
                'conta_dv'     => (string)0, // digito da conta
                'codigo_beneficiario'     => '10668', // codigo fornecido pelo banco
                'codigo_beneficiario_dv'     => '2', // codigo fornecido pelo banco
                'numero_sequencial_arquivo'     => 1,
                'situacao_arquivo' =>'T', // use T para teste e P para produ��o
                'mensagem_1'=>'Sua mensagem personalizada para todos os boletos do arquivo aqui' // suportado somente para SICOOB cnab400, mudar o numero 1 para 2,3,4,5 para incluir mais mensagens
            ]
        );
    }

    /**
     * Shutdown
     */
    public function tearDown()
    {
        $this->remessa = null;
        
        parent::tearDown();
    }

    /**
     * @test
     * @covers \CnabPHP\Remessa::__construct
     * @covers \CnabPHP\Remessa::inserirDetalhe
     * @covers \CnabPHP\Remessa::addChild
     */
    public function inserirDetalhe()
    {
        $detalhe = [
            'codigo_movimento' => 1, //1 = Entrada de título, para outras opções ver nota explicativa C004 manual Cnab_SIGCB na pasta docs
            'nosso_numero'      => 50, // numero sequencial de boleto
            'seu_numero'        => 43,// se nao informado usarei o nosso numero 

            /* campos necessarios somente para itau e siccob,  não precisa comentar se for outro layout    */
            'carteira_banco'    => 109, // codigo da carteira ex: 109,RG esse vai o nome da carteira no banco
            'cod_carteira'      => "01", // I para a maioria ddas carteiras do itau
            /* campos necessarios somente para itau,  não precisa comentar se for outro layout    */
            
            'especie_titulo'    => "DM", // informar dm e sera convertido para codigo em qualquer laytou conferir em especie.php
            'valor'             => 100.00, // Valor do boleto como float valido em php
            'emissao_boleto'    => 2, // tipo de emissao do boleto informar 2 para emissao pelo beneficiario e 1 para emissao pelo banco
            'protestar'         => 3, // 1 = Protestar com (Prazo) dias, 3 = Devolver ap�s (Prazo) dias
            'prazo_protesto'    => 5, // Informar o numero de dias apos o vencimento para iniciar o protesto
            'nome_pagador'      => "JOSÉ da SILVA ALVES", // O Pagador � o cliente, preste atenção nos campos abaixo
            'tipo_inscricao'    => 1, //campo fixo, escreva '1' se for pessoa fisica, 2 se for pessoa juridica
            'numero_inscricao'  => '123.122.123-56',//cpf ou ncpj do pagador
            'endereco_pagador'  => 'Rua dos developers,123 sl 103',
            'bairro_pagador'    => 'Bairro da insonia',
            'cep_pagador'       => '12345-123', // com h�fem
            'cidade_pagador'    => 'Londrina',
            'uf_pagador'        => 'PR',
            'data_vencimento'   => '2016-04-09', // informar a data neste formato
            'data_emissao'      => '2016-04-09', // informar a data neste formato
            'vlr_juros'         => 0.15, // Valor do juros de 1 dia'
            'data_desconto'     => '2016-04-09', // informar a data neste formato
            'vlr_desconto'      => '0', // Valor do desconto
            'baixar'            => 1, // codigo para indicar o tipo de baixa '1' (Baixar/ Devolver) ou '2' (N�o Baixar / N�o Devolver)
            'prazo_baixa'       => 90, // prazo de dias para o cliente pagar ap�s o vencimento
            'mensagem'          => 'JUROS de R$0,15 ao dia'.PHP_EOL."Não receber apos 30 dias",
            'email_pagador'     => 'rogerio@ciatec.net', // data da multa
            'data_multa'        => '2016-04-09', // informar a data neste formato, // data da multa
            'vlr_multa'         => 30.00, // valor da multa

            // campos necessários somente para o sicoob
            //'cod_instrucao1'     => 1, //instrução para cobrar juros novas regras da base de boletos unificada 
            //'cod_instrucao2'     => 1, //instrução para cobrar juros novas regras da base de boletos unificada 
            //'taxa_multa'         => 0.00, // taxa de multa em percentual
            //'taxa_juros'         => 0.00, // taxa de juros em percentual
        ];

        $result = $this->remessa->inserirDetalhe($detalhe);
        
        $this->assertNull($result);
    }

    
    /**
     * @test
     * @covers \CnabPHP\Remessa::__construct
     * @covers \CnabPHP\Remessa::addChild
     */
    public function addChild()
    {
        $this->markTestIncomplete();

        $detalhe = new class(0) extends RegistroRemAbstract {
            public function __construct()
            {
                //
            }
        };

        $attribute = new ReflectionMethod($this->remessa, 'addChild');
        $attribute->setAccessible(true);

        $result = $this->remessa->addChild($detalhe);
        
        $this->assertNull($result);
    }

    /**
     * @test
     * @covers \CnabPHP\Remessa::__construct
     * @covers \CnabPHP\Remessa::addLote
     */
    public function addLote()
    {
        $lote  = ['tipo_servico' => 1];
        $result = $this->remessa->addLote($lote);
        
        $this->assertTrue(is_object($result));
        $this->assertInstanceOf(Registro1::class, $result);
    }

    
}