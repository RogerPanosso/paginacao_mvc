<?php
	/*
	* Definição da class Core(auxiliar) sendo uma class responsavel por dar inicio ao funcionamento
	* da estrutura MVC e estruturando processo de modo de escrita(URL amigavel) obtendo dados diante
	* domínio raiz da aplicação para realizar requisições
	*/
	namespace App\Core;

	class Core {

		public function __construct() {
			$this->run();
		}

		public function run() {
			if(isset($_REQUEST["url"]) and !empty($_REQUEST["url"])):
				$url = $_REQUEST["url"];
			endif;

			if(!empty($url) and $url != ""):
				$url = explode("/", filter_var($url, FILTER_SANITIZE_URL));
				$controller = $url[0]."Controller";
				array_shift($url);
				
				if(isset($url[0]) and !empty($url[0]) and is_string($url[0])):
					$method = $url[0];
					array_shift($url);
				else:
					$method = "index";
				endif;

				$params = array();
				if(count($url) > 0):
					$params = $url;
				endif;
			else:
				$controller = "homeController";
				$method = "index";
				$params = array();
			endif;

			echo "Controller Requisitado: ".$controller."<br>\n";
			echo "Método(action) Requisitado: ".$method."<br>\n";
			echo "Parametros Requisitado: ".print_r($params, true);

			//define estrutura de namespaces(dirs) para controllers de acessos
			$controller = "App\\Controllers\\".$controller;

			//define caminho exato(dir) na qual se encontra controller de acesso perante aplicação
			$caminho_controller = "projeto_paginacao_mvc/App/Controllers/".$controller;

			//realiza verificação se controller acessado não é existente diante sua action
			if(!file_exists($caminho_controller) and !method_exists($controller, $method)):
				$controller = "App\\Controllers\\notfoundController";
				$method = "index";
				$params = array();
			endif;

			//realiza instancia(objeto) de class controller acessado perante aplicação acessando sua action 
			$objeto_controller = new $controller();
			call_user_func_array(array($objeto_controller, $method), $params);
		}
	}
?>