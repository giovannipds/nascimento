<?php
	class Database
	{
		public $name;
		public $server;
		public $user;
		public $password;
		public $prefix = 'nascimento_';

		public function __construct($name = null, $server = null, $user = null, $password = null) {
			$this->name = $name;
			$this->server = $server;
			$this->user = $user;
			$this->password = $password;
		}
		public function connect() {
			mysql_connect($this->server, $this->user, $this->password);
			mysql_select_db($this->name);
			mysql_set_charset('utf8');
		}
		public function disconnect() {
			mysql_close();
		}
		public function query($sql) {
			$query = mysql_query($sql);
			if (mysql_num_rows($query)) {
				// if (count($query) > 1) {
					$array = array();
					while ($row = mysql_fetch_array($query)) {
						$array[] = $row;
					};
					mysql_free_result($query);
					return $array;
				// } else {
				// 	return mysql_fetch_assoc($query);
				// }
			} else {
				return false;
			}
		}
	}
?>