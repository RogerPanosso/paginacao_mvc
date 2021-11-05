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

			//define limit contendo valor específico assumindo quantidade de registros por páginas
			$limit = 10;

			//calcula total exato de páginas para páginação de acordo com total de dados perante table(usuarios) e limit
			$total = $usuarios->getCount();
			$dados["total_paginas"] = ceil($total / $limit);

			//de posse do total de páginas define offset padrão sendo 1(página 1)
			$dados["pagina_atual"] = 1;

			//realiza verificação obtendo valor atual da página selecionada via get(URL)
			if(isset($_GET["p"]) and !empty($_GET["p"])):
				$dados["pagina_atual"] = intval($_GET["p"]);
			endif;

			//de posse do valor da página atual selecionada calcula novo offset para iniciar registros
			$offset = ($dados["pagina_atual"] * $limit) - $limit;

			//realiza chamada do Model(Usuarios) obtendo consulta retornando registros com limitação definida
			$dados["usuarios"] = $usuarios->getUsuarios($offset, $limit);

			//realiza chamada da estrutura de template diante sua view com dados obtidos
			$this->loadTemplate("usuarios", $dados);
		}

		public function editarUsuario($id) {
			$dados = array();
			$usuarios = new Usuarios();
			$dados["usuario"] = $usuarios->getUsuario($id);
			$this->loadTemplate("editar_usuario", $dados);
		}
	}
?>