<?php
namespace CnabPHP;

use Exception;

abstract class RetornoAbstract
{

    //public  $hearder; // armazena o objeto registro 0 do arquivo
    private $children = array(); // armazena os registros filhos da classe remessa

    public static $banco; // sera atribuido o nome do banco que tambem é o nome da pasta que contem os layouts

    public static $layout; // recebera o nome do layout na instacia?ao

    public static $loteCounter = 1; // contador de lotes

    public static $lines; // mantem os dados passados em $data na instanciação

    public static $linesCounter = 0;

    //public static $retorno = array(); // durante a geração do txt de retorno se tornara um array com as linhas do arquvio

    /**
     * método __construct()
     * Recebe os parametros
     * @$banco = nome do banco no momento so Caixa
     * @$layout = nome do layout no momento so Cnab240_SIGCB
     * @$data = um array contendo os dados nessesarios para o arquvio
     */
    public function __construct($conteudo)
    {
        self::$loteCounter  = 1;
        self::$linesCounter = 0;
        $conteudo = str_replace("\r\n", "\n", $conteudo);
        $lines = explode("\n", $conteudo);
        if (count($lines) < 2) {
            throw new Exception("Arquivo sem Conteudo");
        }
        $length = strlen($lines[0]);
        $layout_versao = null;

        if ($length == 240 || $length == 241) {
            $bytes = 240;
            $layout_versao = substr($lines[0], 163, 3);
            $codigo_banco = substr($lines[0], 0, 3);
            $codigo_tipo = substr($lines[0], 142, 1);
        } elseif ($length == 400 || $length == 401) {
            $bytes = 400;
            $layout_versao = '400';
            $codigo_banco = substr($lines[0], 76, 3);
            $codigo_tipo = substr($lines[0], 1, 1);
        } else {
            throw new Exception("Não foi possivel detectar o tipo do arquivo, provavelmente esta corrompido");
        }
        if ($codigo_tipo == '1') {
            throw new Exception("Esse é um arquivo de remessa, nao pode ser processado como um retorno bancário.");
        }
        self::$banco = $codigo_banco;
        self::$layout = "L" . $layout_versao;
        $class = 'CnabPHP\resources\\B' . self::$banco . '\retorno\\' . self::$layout . '\Registro0';

        self::$lines = $lines;
        $this->children[] = new $class($lines[0]);

        $class = 'CnabPHP\resources\\B' . self::$banco . '\retorno\\' . self::$layout . '\Registro9';
        $linhasFiltradas = array_filter($lines); // Limpar a última linha em branco
        $this->children[] = new $class($linhasFiltradas[count($linhasFiltradas) - 1]);
    }

    /**
     * Método changeLayout()
     * Recebe os parametros
     * @$newLayout = altera o layout do lote , servira para enviar lotes de layouts diferentes no mesmo arquvio //(ALERTA) nao testado
     */
    public function changeLayout($newLayout)
    {
        self::$layout = $newLayout;
    }

    /**
     * Método getLote()
     * Metodo estático para pegar o objeto do lote
     * @$index = o indice do lote , normalmente 1
     */
    public function getRegistros($lote = 1)
    {
        $arquivo = $this->children[0];
        return $arquivo->getRegistros($lote);
    }

    /**
     * Método getChilds()
     * Metodo que retorna todos os filhos
     */
    public function getChilds()
    {
        $arquivo = $this->children[0];
        return $arquivo->getChilds();
    }

    /**
     * Retorna um filho específico
     * @param int $index
     * @return
     */
    public function getChild($index = 0)
    {
        $arquivo = $this->children[0];
        return $arquivo->getChild($index);
    }

    /**
     * Retorna o a versão do layout
     * @return string
     */
    public function getLayout()
    {
        $arquivo = $this->children[0];
        return (self::$layout != 'L400') ? $arquivo->versao_layout : 'L400';
    }
    /**
     * Retorna o a versão do layout
     * @return string
     */
    public function getRegistrosRaiz()
    {
        $arquivo = $this->children;
        return $arquivo;
    }
}
