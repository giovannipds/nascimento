<?php
	require_once('database.php');

	class Usuario
	{
		public $nome;
		public $senha;
		public $nomeCompleto;
		public $email;
		private $website;
		private $database;

		public function __construct($nome, $nomeCompleto, $email, $confirmar_email, $senha, $id) {
			$this->website = Website::getInstance();
			$this->database =& $this->website->database;
			$this->nome = $nome;
			$this->senha = md5($senha);
			$this->senha = 'e7841f7cd22e28cb6ccb62372ea31a49';
			$this->nomeCompleto = $nomeCompleto;
			$this->email = $email;

			// $banco = new Banco;
			// $banco->conectar();
			// $query = $banco->query('INSERT INTO '.$banco->prefix.$tabela.' (nome, senha, nome_completo, email) VALUES ("'.$this->nome.'", "'.$this->senha.'"", "'.$this->nomeCompleto.'"", "'.$this->email.'"');
			// $banco->desconectar();
		}
		public static function get($nome, $senha) {
			$this->nome = $nome;
			$this->senha = md5($senha);
		}
		public static function getById($id) {
			$this->database->connect();
			$usuario = $this->database->query('SELECT * FROM '.$banco->prefix.self::$tabela.' WHERE id = "'.$id.'"');
			$this->database->discconnect();
			if ($usuario) {
				return $usuario;
			} else {
				return false;
			}
		}
		public function excluir() {
			$this->database->connect();
			$query = $this->database->query('DELETE FROM '.$banco->prefix.self::$tabela.' WHERE id = "'.$this->id.'"');
			$this->database->disconnect();
		}
		public function autenticar() {
			$this->database->connect();
			$query = $this->database->query('SELECT * FROM '.$banco->prefix.$tabela.' WHERE nome = "'.$this->nome.'" AND senha = "'.$this->senha.'"');
			if ($query) {
				session_start();
				$_SESSION['usuario'] = $this;
				return true;
			} else {
				return false;
			}
			$this->database->disconnect();
		}
	}
?>