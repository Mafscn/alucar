<?php

namespace App\DAO;

abstract class Connection {
	private $database;
	private $user;
	private $password;
	private $host;
	private $port;
	protected $PDO;

	public function __construct() {
		$this->database = getenv("DATABASE");
		$this->user = getenv("DB_USER");
		$this->password = getenv("DB_PASSWORD");
		$this->host = getenv("DB_HOST");
		$this->port = getenv("DB_PORT");

		try{
			$connection = new \PDO("mysql:host={$this->host};port={$this->port};dbname={$this->database}", $this->user, $this->password, [\PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"]);
			$connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
			$this->PDO = $connection;
		}catch(\PDOException $error) {
			echo "connection error: " . $error;
		}
	}
}