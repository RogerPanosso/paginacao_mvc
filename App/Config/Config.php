<?php
	/*
	* Definição do arquivo de Config(configurações) estabelecendo dados diante array associativo
	* para obter conexão a servidor de banco de dados de acordo com ambiente utilizado.
	*/
	require_once __DIR__."/Environment.php";

	$config = array();

	if(ENVIRONMENT == "development"):
		define("BASE_URL", "http://localhost/projeto_paginacao_mvc/");
		$config["dbdriver"] = "mysql";
		$config["dbname"] = "projeto_paginacao_mvc";
		$config["dbhost"] = "localhost";
		$config["dbuser"] = "root";
		$config["dbpass"] = "";
	else:
		/* dados a serem obtidos diante servidor externo */
		define("BASE_URL", "http://localhost/projeto_paginacao_mvc/");
		$config["dbdriver"] = "mysql";
		$config["dbname"] = "projeto_paginacao_mvc";
		$config["dbhost"] = "localhost";
		$config["dbuser"] = "root";
		$config["dbpass"] = "";
	endif;
?>