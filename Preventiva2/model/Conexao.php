<?php 

define('DB_NAME', 'preventiva'); // COLOCAR O NOME DO BD
define('DB_HOST', 'localhost');// COLOCAR O HOST DO BANCO DE DADOS
define('DB_PASS','');// COLOCAR A SENHA DO BANCO DE DADOS 
define('DB_USER','root'); // COLOCAR O USUARIO DA BASE DE DADOS

class Conexao{

	private static $instance;
	public static function getInstance(){
		if(!isset(self::$instance)){// SELF SERVE PARA ACESSAR MEMBROS STATICOS
			try{
				self::$instance = new PDO('mysql:host='. DB_HOST. ';dbname='. DB_NAME. ';charset=utf8',DB_USER,DB_PASS);// FAZ A CONEXAO COM O BANCO DE DADOS PASSANDO O NOME O HOST A SENHA E O USUARIO
				self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//RELATORIO DE ERROS E SE OCORREU ALGUM ERRO E QUANDO FOI
				self::$instance->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);//ATTR_DEFAULT_FETCH_MODE : DEFINE O MODO DE BUSCA PADRÃO   PDO :: FETCH_OBJ : RETORNA UM OBJETO ANONIMO COM NOME DE PROPRIEDADES QUE CORRESPONDEM AOS NOMES DAS COLUNAS RETORNADAS NO SEU CONJUNTO DE RESULTADOS

			}catch(PDOExeption $e){
				echo $e->getMenssage();// PRINTA A MENSAGEM DE ERRO NA TELA
			}

		}
		return self::$instance;
	}

	public static function prepare($sql){
		return self::getInstance()->prepare($sql);
	}
}

 ?>