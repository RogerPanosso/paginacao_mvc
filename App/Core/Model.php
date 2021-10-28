<?php
	/*
	* Definição da class Model(auxiliar) sendo uma class base para ser herdada diante
	* seus models responsaveis por tratar dados diante aplicação perante banco de dados
	*/
	namespace App\Core;

	use App\Config\ConnectDb;

	class Model {
		protected object $pdo;

		public function __construct() {
			$this->pdo = ConnectDb::getInstancePdo();
		}
	}
?>