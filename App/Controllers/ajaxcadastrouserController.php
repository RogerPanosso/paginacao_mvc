<?php
	/*
	* Definição da class ajaxcadastrouserController contendo métodos(actions) sendo 
	* responsavel por receber e tratar dados diante requisição interna
	*/
	namespace App\Controllers;

	use App\Core\Controller;
	use App\Models\Usuarios;

	class ajaxcadastrouserController extends Controller {

		public function __construct() {
			parent::__construct();
		}

		public function salvarCadastro() {
			$dados = array();
			$usuarios = new Usuarios();
			$nome = trim(filter_input(INPUT_POST, "nome", FILTER_SANITIZE_STRING));
			$sobrenome = trim(filter_input(INPUT_POST, "sobrenome", FILTER_SANITIZE_STRING));
			$email = trim(filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL));
			$senha = trim(filter_input(INPUT_POST, "senha", FILTER_SANITIZE_STRING));
			$data_nascimento = filter_input(INPUT_POST, "data_nascimento", FILTER_SANITIZE_STRING);
			if(empty($senha)):
				$senha = date("d/m/Y", strtotime($data_nascimento));
				$senha = str_replace("/", "", $senha);
				$hash_senha = password_hash($senha, PASSWORD_DEFAULT);
			else:
				$hash_senha = password_hash($senha, PASSWORD_DEFAULT);
			endif;

			if($usuarios->salvarCadastro($nome, $sobrenome, $email, $hash_senha, $data_nascimento) == true):
				$dados["return"] = "Cadastro de usuário(a) realizado com sucesso";
				$this->loadView("success", $dados);
			else:
				$dados["return"] = "E-Mail já cadastrado diante cadastro de usuário(a)";
				$this->loadView("error", $dados);
			endif;
		}
	}
?>