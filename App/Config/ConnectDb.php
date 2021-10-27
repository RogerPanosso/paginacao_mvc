<?php
	/*
	* Definição da class ConnectDb sendo responsavel por estabelecer conexão com servidor de banco
	* de dados através da biblioteca PDO(object). Utilizando padrão de projeto criacional Singleton
	* contendo instância única de objeto
	*/
	namespace App\Config;

	class ConnectDb {
		private static ?\PDO $instancePdo = null;

		private function __construct(){}
		private function __destruct(){}
		private function __clone(){}
		private function __wakeup(){}

		public static function getInstancePdo() : \PDO {
			if(!isset(self::$instancePdo) and self::$instancePdo === null):
				require_once __DIR__."/Config.php";
				self::$instancePdo = new \PDO($config["dbdriver"].":dbname=".$config["dbname"].";host=".$config["dbhost"], $config["dbuser"], $config["dbpass"]);
				self::$instancePdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
				self::$instancePdo->setAttribute(\PDO::ATTR_ORACLE_NULLS, \PDO::NULL_EMPTY_STRING);
			endif;
			//caso já exista uma instancia PDO(object) criada e armazenada em atributo estático somente retorna
			return self::$instancePdo;
		}
	}
?>