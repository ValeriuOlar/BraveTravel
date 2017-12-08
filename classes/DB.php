<?php

class DB {
	private static $_instance = null;
	private $_pdo, 
			$_query,
			$_error = false,
			$_results,
			$_count = 0;

	private function __construct() {
		try{
			$this->_pdo = new PDO('mysql:host='. config::get('mysql/host') . ';dbname=' . config::get('mysql/db'),
							config::get('mysql/username'), config::get('mysql/password'));
			echo 'connected';

		} catch(PDOException $e) {
			die($e->getMessage());
		}
	}

	public static function getInstance() {
		if(!isset(self::$_instance)) {
			self::$_instance = new DB();
		}
		return self::$_instance;
	}

	public function query($sql, $username, $password) {
		$this->_query = $this->_pdo->prepare($sql);
		$this->_query->bindValue(':username', $username);
		$this->_query->bindValue(':password', $password);
		
		if($this->_query->execute()) {
			$this->_results = $this->_query->fetchAll(PDO::FETCH_OBJ);
			$this->_count = $this->_query->rowCount();
		};
	return $this;
	}

	public function results() {
		return $this->_results;
	}

	public function count() {
		return $this->_count;
	}
}