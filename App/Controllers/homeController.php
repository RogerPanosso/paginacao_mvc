<?php
	/*
	* Definição da class homeController contendo métodos(actions) sendo responsavel por obter
	* controle a view(home)
	*/
	namespace App\Controllers;

	use App\Core\Controller;

	class homeController extends Controller {

		public function __construct() {
			parent::__construct();
		}

		public function index() {
			$this->loadTemplate("home");
		}
	}
?>