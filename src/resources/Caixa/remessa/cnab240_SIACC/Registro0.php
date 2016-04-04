<?php
namespace CnabPHP\resources\caixa\remessa\cnab240_SIACC;
use CnabPHP\resources\generico\remessa\cnab240\Generico0;

class Registro0 extends Generico0
{
	protected $meta = array(
		'codigo_banco'=>array(
			'posicao'=>array('i'=>1,'f'=>3),
			'tamanho'=>3,
			'default'=>'',
			'tipo'=>'inteiro',
			'required'=>true),
		'lote_servico'=>array(
			'posicao'=>array('i'=>4,'f'=>7),
			'tamanho'=>4,
			'default'=>'0000',
			'tipo'=>'inteiro',
			'required'=>true),
		'codigo_registro'=>array(
			'posicao'=>array('i'=>8,'f'=>8),
			'tamanho'=>1,
			'default'=>'0',
			'tipo'=>'inteiro',
			'required'=>true),
		'filler1'=>array(
			'posicao'=>array('i'=>9,'f'=>17),
			'tamanho'=>9,
			'default'=>' ',
			'tipo'=>'alfa',
			'required'=>true),
		'tipo_inscricao'=>array(
			'posicao'=>array('i'=>18,'f'=>18),
			'tamanho'=>1,
			'default'=>'',
			'tipo'=>'inteiro',
			'required'=>true),
		'inteiro_inscricao'=>array(
			'posicao'=>array('i'=>19,'f'=>32),
			'tamanho'=>14,
			'default'=>'',
			'tipo'=>'inteiro',
			'required'=>true),
		'codigo_convenio'=>array(
			'posicao'=>array('i'=>33,'f'=>38),
			'tamanho'=>6,
			'default'=>'',
			'tipo'=>'inteiro',
			'required'=>true),
		'parametro_transmissao'=>array(
			'posicao'=>array('i'=>39,'f'=>40),
			'tamanho'=>2,
			'default'=>'',
			'tipo'=>'inteiro',
			'required'=>true),
		'ambiente_cliente'=>array(
			'posicao'=>array('i'=>41,'f'=>41),
			'tamanho'=>1,
			'default'=>'P',
			'tipo'=>'alfa',
			'required'=>true),
		'ambiente_caixa'=>array(
			'posicao'=>array('i'=>42,'f'=>42),
			'tamanho'=>1,
			'default'=>' ',
			'tipo'=>'alfa',
			'required'=>true),
		'origem_aplicativo'=>array(
			'posicao'=>array('i'=>43,'f'=>45),
			'tamanho'=>3,
			'default'=>' ',
			'tipo'=>'alfa',
			'required'=>true),
		'inteiro_versao'=>array(
			'posicao'=>array('i'=>46,'f'=>49),
			'tamanho'=>4,
			'default'=>'0',
			'tipo'=>'inteiro',
			'required'=>true),
		'filler2'=>array(
			'posicao'=>array('i'=>50,'f'=>52),
			'tamanho'=>3,
			'default'=>' ',
			'tipo'=>'alfa',
			'required'=>true),
		'agencia'=>array(
			'posicao'=>array('i'=>53,'f'=>57),
			'tamanho'=>5,
			'default'=>'',
			'tipo'=>'inteiro',
			'required'=>true),
		'agencia_dv'=>array(
			'posicao'=>array('i'=>58,'f'=>58),
			'tamanho'=>1,
			'default'=>'',
			'tipo'=>'inteiro','required'=>true),
		'conta'=>array(
			'posicao'=>array('i'=>59,'f'=>70),
			'tamanho'=>12,
			'default'=>'',
			'tipo'=>'inteiro',
			'required'=>true),
		'conta_dv'=>array(
			'posicao'=>array('i'=>71,'f'=>71),
			'tamanho'=>1,
			'default'=>'',
			'tipo'=>'alfa',
			'required'=>true),
		'agencia_conta_dv'=>array(
			'posicao'=>array('i'=>72,'f'=>72),
			'tamanho'=>1,
			'default'=>'',
			'tipo'=>'alfa',
			'required'=>true),
		'nome_empresa'=>array(
			'posicao'=>array('i'=>73,'f'=>102),
			'tamanho'=>30,
			'default'=>'',
			'tipo'=>'alfa',
			'required'=>true),
		'nome_banco'=>array(
			'posicao'=>array('i'=>103,'f'=>132),
			'tamanho'=>30,
			'default'=>'CAIXA',
			'tipo'=>'alfa',
			'required'=>true),
		'filler3'=>array(
			'posicao'=>array('i'=>133,'f'=>142),
			'tamanho'=>10,
			'default'=>' ',
			'tipo'=>'alfa',
			'required'=>true),
		'codigo_remessa'=>array(
			'posicao'=>array('i'=>143,'f'=>143),
			'tamanho'=>1,
			'default'=>'1',
			'tipo'=>'inteiro',
			'required'=>true),
		'data_geracao'=>array(
			'posicao'=>array('i'=>144,'f'=>151),
			'tamanho'=>8,
			'default'=>'',// nao informar a data na instanciação - gerada dinamicamente
			'tipo'=>'inteiro',
			'required'=>true),
		'hora_geracao'=>array(
			'posicao'=>array('i'=>152,'f'=>157),
			'tamanho'=>6,
			'default'=>'',// nao informar a data na instanciação - gerada dinamicamente
			'tipo'=>'inteiro',
			'required'=>true),
		'NSA'=>array(
			'posicao'=>array('i'=>158,'f'=>163),
			'tamanho'=>6,
			'default'=>'',
			'tipo'=>'inteiro',
			'required'=>true),
		'versao_layout'=>array(
			'posicao'=>array('i'=>164,'f'=>166),
			'tamanho'=>3,
			'default'=>'080',
			'tipo'=>'inteiro',
			'required'=>true),
		'densidade_gravacao'=>array(
			'posicao'=>array('i'=>167,'f'=>171),
			'tamanho'=>5,
			'default'=>'01600',
			'tipo'=>'inteiro',
			'required'=>true),
		'reservado_banco'=>array(
			'posicao'=>array('i'=>172,'f'=>191),
			'tamanho'=>20,
			'default'=>' ',
			'tipo'=>'alfa',
			'required'=>true),
		'reservado_empresa'=>array(
			'posicao'=>array('i'=>192,'f'=>211),
			'tamanho'=>20,
			'default'=>' ',
			'tipo'=>'alfa',
			'required'=>true),
		'uso_febraban'=>array(
			'posicao'=>array('i'=>212,'f'=>222),
			'tamanho'=>11,
			'default'=>' ',
			'tipo'=>'alfa',
			'required'=>true),
		'indet_cobranca'=>array(
			'posicao'=>array('i'=>212,'f'=>222),
			'tamanho'=>3,
			'default'=>' ',
			'tipo'=>'alfa',
			'required'=>true),
		'uso_van'=>array(
			'posicao'=>array('i'=>223,'f'=>225),
			'tamanho'=>3,
			'default'=>' ',
			'tipo'=>'inteiro',
			'required'=>true),
		'tipo_servico'=>array(
			'posicao'=>array('i'=>229,'f'=>230),
			'tamanho'=>2,
			'default'=>' ',
			'tipo'=>'alfa',
			'required'=>true),
		'ocorrencia_sem_papel'=>array(
			'posicao'=>array('i'=>231,'f'=>240),
			'tamanho'=>10,
			'default'=>' ',
			'tipo'=>'alfa',
			'required'=>true),
	);
	public function __construct($data = null)
	{
		$data['data_geracao'] = date('Y-m-d');
		$data['hora_geracao'] = date('h:n:s');
		parent::__construct($data);
	}
}

?>
