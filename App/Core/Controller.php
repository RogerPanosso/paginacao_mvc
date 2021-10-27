<?php
	/*
	* Definição da class Controller(auxiliar) sendo uma class base para ser herdada diante seus 
	* controllers de acessos perante aplicação, realizando as devidas requisições ao usuário final
	*/
	namespace App\Core;

	class Controller {
		protected array $dados;

		public function __construct() {
			$this->dados = array();
		}

		public function loadTemplate(string $nomeView, array $dados = array()) {
			$this->dados = $dados;
			require_once "/../App/Config/Config.php";
			require "/../App/Views/Parcial/template.php";
		}

		public function loadViewInTemplate(string $nomeView, array $dados = array()) {
			extract($this->dados);
			require "/../App/Views/Pages/".$nomeView.".php";
		}

		public function loadView(string $nomeView, array $dados = array()) {
			extract($dados);
			require "../App/Views/Pages/".$nomeView.".php";
		}
	}
?>