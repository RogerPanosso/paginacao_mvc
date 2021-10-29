<?php
	/*
	* Definição da class Model(Usuarios)
	*/
	namespace App\Models;

	use App\Core\Model;

	class Usuarios extends Model {

		/* auxiliar */
		private function verificaCadastro($email) {
			$query = "SELECT * FROM usuarios WHERE email = :email";
			$query = $this->pdo->prepare($query);
			$query->bindValue(":email", $email);
			$query->execute();
			if($query->rowCount() === 0):
				return true;
			else:
				return false;
			endif;
		}

		public function salvarCadastro($nome, $sobrenome, $email, $senha, $data_nascimento) {
			if($this->verificaCadastro($email) == true):
				$query = "INSERT INTO usuarios (nome,sobrenome,email,senha,data_nascimento) VALUES (:nome,:sobrenome,:email,:senha,:data_nascimento)";
				$query = $this->pdo->prepare($query);
				$query->bindValue(":nome", $nome);
				$query->bindValue(":sobrenome", $sobrenome);
				$query->bindValue(":email", $email);
				$query->bindValue(":senha", $senha);
				$query->bindValue(":data_nascimento", $data_nascimento);
				$query->execute();
				return true;
			endif;
		}

		public function getUsuarios($offset, $limit) {
			$array = array();
			$query = "SELECT * FROM usuarios ORDER BY id LIMIT $offset,$limit";
			$query = $this->pdo->query($query);
			if($query->rowCount() > 0):
				$array = $query->fetchAll(\PDO::FETCH_ASSOC);
			endif;
			return $array;
		}

		public function getCount() {
			$query = "SELECT COUNT(*) AS total FROM usuarios";
			$query = $this->pdo->query($query);
			$query = $query->fetch(\PDO::FETCH_ASSOC);
			return $query["total"];
		}
	}
?>