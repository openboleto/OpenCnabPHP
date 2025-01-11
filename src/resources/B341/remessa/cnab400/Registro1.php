<?php
namespace CnabPHP\resources\B341\remessa\cnab400;

use CnabPHP\resources\generico\remessa\cnab400\Generico1;
use CnabPHP\RegistroRemAbstract;
use CnabPHP\RemessaAbstract;

class Registro1 extends Generico1
{

    public $protestar;
    protected $meta = array(
        'tipo_registro' => array(
            'tamanho' => 1,
            'default' => '1',
            'tipo' => 'int',
            'required' => true),
        'tipo_inscricao_empresa' => array(
            'tamanho' => 2,
            'default' => '',
            'tipo' => 'int',
            'required' => true),
        'numero_inscricao_empresa' => array(
            'tamanho' => 14,
            'default' => '',
            'tipo' => 'int',
            'required' => true),
        'agencia' => array(
            'tamanho' => 4,
            'default' => '',
            'tipo' => 'int',
            'required' => true),
        'filler1' => array(
            'tamanho' => 2,
            'default' => '0',
            'tipo' => 'int',
            'required' => true),
        'conta' => array(
            'tamanho' => 5,
            'default' => '',
            'tipo' => 'int',
            'required' => true),
        'conta_dv' => array(
            'tamanho' => 1,
            'default' => '',
            'tipo' => 'int',
            'required' => true),
        'filler2' => array(
            'tamanho' => 4,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true),
        'cod_intrucao' => array(
            'tamanho' => 4,
            'default' => '0',
            'tipo' => 'int',
            'required' => true),
        'seu_numero' => array(
            'tamanho' => 25,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true),
        'nosso_numero' => array(
            'tamanho' => 8,
            'default' => '',
            'tipo' => 'int',
            'required' => true),
        'qtd_moeda' => array(//34.3P
            'tamanho' => 8,
            'default' => '0',
            'tipo' => 'decimal',
            'precision' => 5,
            'required' => true),
        'carteira_banco' => array(//13.3P
            'tamanho' => 3,
            'default' => '0',
            'tipo' => 'int',
            'required' => true),
        'filler3' => array(
            'tamanho' => 21,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true),
        'cod_carteira' => array(//13.3P
            'tamanho' => 1,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true),
        'codigo_movimento' => array(// codigo da ocorrencia no manual itau
            'tamanho' => 2,
            'default' => '01', // entrada de titulo
            'tipo' => 'int',
            'required' => true),
        'numero_documento' => array(// codigo da ocorrencia no manual itau
            'tamanho' => 10,
            'default' => ' ', // entrada de titulo
            'tipo' => 'alfa',
            'required' => true),
        'data_vencimento' => array(//20.3
            'tamanho' => 6,
            'default' => '',
            'tipo' => 'date',
            'required' => true),
        'valor' => array(//21.3P
            'tamanho' => 11,
            'default' => '',
            'tipo' => 'decimal',
            'precision' => 2,
            'required' => true),
        'codigo_banco' => array(
            'tamanho' => 3,
            'default' => '341',
            'tipo' => 'int',
            'required' => true),
        'agencia_cobradora' => array(//22.3P
            'tamanho' => 5,
            'default' => '0',
            'tipo' => 'int',
            'required' => true),
        'especie_titulo' => array(//24.3P
            'tamanho' => 2,
            'default' => '2',
            'tipo' => 'int',
            'required' => true),
        'aceite' => array(//25.3P
            'tamanho' => 1,
            'default' => 'N',
            'tipo' => 'alfa',
            'required' => true),
        'data_emissao' => array(//26.3P
            'tamanho' => 6,
            'default' => '',
            'tipo' => 'date',
            'required' => true),
        'cod_instrucao1' => array(//24.3P
            'tamanho' => 2,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true),
        'cod_instrucao2' => array(//24.3P
            'tamanho' => 2,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true),
        'vlr_juros' => array(//29.3P
            'tamanho' => 11,
            'default' => '0',
            'tipo' => 'decimal',
            'precision' => 2,
            'required' => true),
        'data_desconto' => array(//31.3P
            'tamanho' => 6,
            'default' => '0',
            'tipo' => 'date',
            'required' => true),
        'vlr_desconto' => array(//32.3P
            'tamanho' => 11,
            'default' => '0',
            'tipo' => 'decimal',
            'precision' => 2,
            'required' => true),
        'vlr_IOF' => array(//33.3P
            'tamanho' => 11,
            'default' => '0',
            'tipo' => 'decimal',
            'precision' => 2,
            'required' => true),
        'vlr_abatimento' => array(//34.3P
            'tamanho' => 11,
            'default' => '0',
            'tipo' => 'decimal',
            'precision' => 2,
            'required' => true),
        'tipo_inscricao' => array(
            'tamanho' => 2,
            'default' => '',
            'tipo' => 'int',
            'required' => true),
        'numero_inscricao' => array(
            'tamanho' => 14,
            'default' => '',
            'tipo' => 'int',
            'required' => true),
        'nome_pagador' => array(//10.3Q
            'tamanho' => 30,
            'default' => '',
            'tipo' => 'alfa',
            'required' => true),
        'filler4' => array(
            'tamanho' => 10,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true),
        'endereco_pagador' => array(// 11.3Q
            'tamanho' => 40,
            'default' => '',
            'tipo' => 'alfa',
            'required' => true),
        'bairro_pagador' => array(//12.3Q
            'tamanho' => 12,
            'default' => '',
            'tipo' => 'alfa',
            'required' => true),
        'cep_pagador' => array(//13.3Q   
            'tamanho' => 8,
            'default' => '',
            'tipo' => 'int',
            'required' => true),
        'cidade_pagador' => array(//15.3Q
            'tamanho' => 15,
            'default' => '',
            'tipo' => 'alfa',
            'required' => true),
        'uf_pagador' => array(//16.3Q
            'tamanho' => 2,
            'default' => '', // combrança com registro
            'tipo' => 'alfa',
            'required' => true),
        'nome_avalista' => array(//18.3Q
            'tamanho' => 30,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true),
        'filler5' => array(
            'tamanho' => 4,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true),
        'data_mora' => array(//31.3P
            'tamanho' => 6,
            'default' => '0',
            'tipo' => 'date',
            'required' => true),
        'prazo_baixa' => array(//31.3P
            'tamanho' => 2,
            'default' => '0',
            'tipo' => 'int',
            'required' => true),
        'filler6' => array(
            'tamanho' => 1,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true),
        'numero_registro' => array(// 4.3R
            'tamanho' => 6,
            'default' => '0',
            'tipo' => 'int',
            'required' => true),
    );

    public function __construct($data = null)
    {
        if (empty($this->data))
            parent::__construct($data);
        $this->inserirMulta($data);
    }


    public function inserirMulta($data)
    {
        if (isset($data['data_multa'])) {
            $class = 'CnabPHP\resources\\B' . RemessaAbstract::$banco . '\remessa\\' . RemessaAbstract::$layout . '\Registro2';
            $this->children[] = new $class($data);
        }
    }
}

?>
