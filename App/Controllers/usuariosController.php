<?php
	/*
	* Definição da class usuariosController contendo métodos(actions) sendo responsavel
	* por obter controle á view(usuarios)
	*/
	namespace App\Controllers;

	use App\Core\Controller;
	use App\Models\Usuarios;

	class usuariosController extends Controller {

		public function __construct() {
			parent::__construct();
		}

		public function index() {
			$dados = array();
			$usuarios = new Usuarios();

			//define limit de registros que serão obtidos por página
			$limit = 10;

			//obtem total de registros perante table(usuarios) calculando total de páginas para páginação
			$total = $usuarios->getCount();
			$dados["total_paginas"] = ceil($total / $limit);

			//define offset padrão a ser iniciado como 1(id)
			$dados["pagina_atual"] = 1;

			//recebe via get(url) valor de página atual selecionada
			if(isset($_GET["p"]) and !empty($_GET["p"])):
				$dados["pagina_atual"] = intval($_GET["p"]);
			endif;

			//com base em valor da página obtido calcula novo offset
			$offset = ($dados["pagina_atual"] * $limit) - $limit;

			$dados["usuarios"] = $usuarios->getUsuarios($offset, $limit);
			$this->loadTemplate("usuarios", $dados);
		}
	}
?>