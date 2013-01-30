<?php
	require_once('database.php');

	class Usuarios
	{
		const $table = 'usuarios';
		private static $instance;
		private $website;
		private $database;
		private $list;

		private function __construct() {
			$this->website = Website::getInstance();
			$this->database =& $this->website->database;
		}

		function __clone() {}

		public static function getInstance() {
			if (!isset(self::$instance))
				self::$instance = new self();
			return self::$instance;
		}

		public function getList() {
			$this->database->connect();
			$query = $this->database->query('SELECT id, nome, nome_completo, email FROM '.$this->database->prefix.Usuarios::table.' ORDER BY nome_completo');
			$this->database->disconnect();
			return $query;
		}
	}
?>