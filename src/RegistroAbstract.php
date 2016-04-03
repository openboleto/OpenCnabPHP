<?php
/*
* classe ARecord
* Esta classe provê os métodos necessários para persistir e
* recuperar objetos da Array (Active Record)
*
* @author   Rogerio Muniz de Castro <rogerio@ciatec.net>
* @version  0.1
* @access   restrict
* 
* 2016.04.02 -- criação
**/
namespace CnabPHP;

abstract class RegistroAbstract
{
	protected $data; // array contendo os dados do objeto
	protected $meta;

	/* método __construct()
	* instancia um Active Record. Se passado o $id, já carrega o objeto
	* @param [$id] = ID do objeto
	*/
	public function __construct($data = NULL)
	{
		if ($data) // se o ID for informado
		{
			// carrega o objeto correspondente
			foreach($data as $key =>$value){
				$this->$key = $value;
			}
		}
	}


	/*
	* método __set()
	* executado sempre que uma propriedade for atribuída.
	*/
	public function __set($prop, $value)
	{
		// verifica se existe método set_<propriedade>
		if (method_exists($this, 'set_'.$prop))
		{
			// executa o método set_<propriedade>
			call_user_func(array($this, 'set_'.$prop), $value);
		}
		else
		{

			if(($value=="" || $value === NULL) && $metaData[$prop]['default']!="")
			{
				$this->data[$prop] = $metaData[$prop]['default'];  
			}
			else
			{
				// atribui o valor da propriedade
				$this->data[$prop] = $value;
			}
		}
	}

	/*
	* método __get()
	* executado sempre que uma propriedade for requerida
	*/
	public function __get($prop)
	{
		// verifica se existe método get_<propriedade>
		if (method_exists($this, 'get_'.$prop))
		{
			// executa o método get_<propriedade>
			return call_user_func(array($this, 'get_'.$prop));
		}
		else
		{
			return $this->___get($prop);
		}
	}

	/*
	* método ___get()
	* metodo auxiliar para ser chamado para dentro de metodo get personalizado
	*/
	public function ___get($prop)
	{
		// retorna o valor da propriedade
		if (isset($this->data[$prop]))
		{
			$metaData = (isset($this->meta[$prop]))?$this->meta[$prop]:null;
			switch ($metaData['tipo']) {
				case 'decimal':
					$retorno = ($this->data[$prop])?number_format($this->data[$prop],$metaData['precision'],'',''):''; 
					return str_pad($retorno,$metaData['tamanho'],'0',STR_PAD_LEFT);
					break;
				case 'inteiro':
					$retorno = ($this->data[$prop])?abs($this->data[$prop]):''; 
					return str_pad($retorno,$metaData['tamanho'],'0',STR_PAD_LEFT);
					break;
				case 'alfa':
					$retorno = ($this->data[$prop])?$this->prepareText($this->data[$prop]):''; 
					return str_pad(substr($retorno,0,$metaData['tamanho']),$metaData['tamanho'],' ',STR_PAD_RIGHT);
					break;
				case $metaData['tipo'] == 'date' && $metaData['tamanho']==6:
					$retorno = ($this->data[$prop])?date("dmy",strtotime($this->data[$prop])):'';
					return str_pad($retorno,$metaData['tamanho'],'0',STR_PAD_LEFT);
					break;
				case $metaData['tipo'] == 'date' && $metaData['tamanho']==8:
					$retorno = ($this->data[$prop])?date("dmY",strtotime($this->data[$prop])):'';
					return str_pad($retorno,$metaData['tamanho'],'0',STR_PAD_LEFT);
					break;
				default:
					return null;
					break;
			}

		}
	}

	/*
	* método getUnformated()
	* busca o valor de dentro do campo dentro do objeto de forma simples sem formatação de valor por exemplo
	*/
	public function getUnformated($prop)
	{
		// retorna o valor da propriedade
		if (isset($this->data[$prop]))
		{
			return $this->data[$prop];
		}
	}

	/*
	* método set_meta()
	* executado quando o objeto for clonado.
	* limpa o ID para que seja gerado um novo ID para o clone.
	*/
	public function set_meta($meta)
	{
		$this->meta = $meta;
	}
	/*
	* método get_meta()
	* executado quando o objeto for clonado.
	* limpa o ID para que seja gerado um novo ID para o clone.
	*/
	public function get_meta()
	{
		return $this->meta;
	}


	/*
	* método fromArray
	* preenche os dados do objeto com um array
	*/
	public function fromArray($data)
	{
		$this->data = $data;
	}

	/*
	* método toArray
	* retorna os dados do objeto como array
	*/
	public function toArray()
	{
		return $this->data;
	}
	private function prepareText($text, $remove=null)
	{
		$result = strtoupper($this->removeAccents(trim(html_entity_decode($text))));;
		if($remove)
			$result = str_replace(str_split($remove), '', $result);
		return $result;
	}

	private function removeAccents($string)
	{
		return preg_replace(
			array(
				'/\xc3[\x80-\x85]/',
				'/\xc3\x87/',
				'/\xc3[\x88-\x8b]/',
				'/\xc3[\x8c-\x8f]/',
				'/\xc3([\x92-\x96]|\x98)/',
				'/\xc3[\x99-\x9c]/',

				'/\xc3[\xa0-\xa5]/',
				'/\xc3\xa7/',
				'/\xc3[\xa8-\xab]/',
				'/\xc3[\xac-\xaf]/',
				'/\xc3([\xb2-\xb6]|\xb8)/',
				'/\xc3[\xb9-\xbc]/',
			),
			str_split( 'ACEIOUaceiou' , 1 ),
			$this->isUtf8( $string ) ? $string : utf8_encode( $string )
		);
	}

	private function isUtf8($string)
	{
		return preg_match( '%^(?:
			[\x09\x0A\x0D\x20-\x7E]
			| [\xC2-\xDF][\x80-\xBF]
			| \xE0[\xA0-\xBF][\x80-\xBF]
			| [\xE1-\xEC\xEE\xEF][\x80-\xBF]{2}
			| \xED[\x80-\x9F][\x80-\xBF]
			| \xF0[\x90-\xBF][\x80-\xBF]{2}
			| [\xF1-\xF3][\x80-\xBF]{3}
			| \xF4[\x80-\x8F][\x80-\xBF]{2}
			)*$%xs',
			$string
		);
	}
}
?>