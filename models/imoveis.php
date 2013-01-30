<?php
	require_once('database.php');
	require_once('uteis.php');

	class Imoveis
	{
		const table = 'imoveis';
		private static $instance;
		private $website;
		private $database;
		private $list;

		private function __construct() {
			$this->website = Website::getInstance();
			$this->database =& $this->website->database;
		}

		private function __clone() {}

		public static function getInstance() {
			if (!isset(self::$instance))
				self::$instance = new self();
			return self::$instance;
		}

		public function getList() {
			$this->database->connect();
			$this->list = $this->database->query('SELECT * FROM nascimento_imoveis WHERE id = 1');
			$this->list = $this->database->query('SELECT i.*, t.nome AS tipo, b.nome AS bairro, c.nome AS cidade FROM '.$this->database->prefix.Imoveis::table.' i LEFT JOIN '.$this->database->prefix.'tipos t ON i.tipo = t.id LEFT JOIN '.$this->database->prefix.'bairros b ON i.bairro = b.id LEFT JOIN '.$this->database->prefix.'cidades c ON i.cidade = c.id ORDER BY i.id DESC');
			foreach ($this->list as &$imovel) {
				$imovel['preco'] = paraReais($imovel['preco']);
			}
			$this->database->disconnect();
			return $this->list;
		}
	}
?>