<?php 
#include config.php
require_once 'config.php';

class DB {

	private static $instance;

	public static function getInstance() {
		# Se não existir valor na $instance, passa valores de conexao
		if (!isset(self::$instance)) {

			try {

				self::$instance = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
				self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				self::$instance->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
				self::$instance-> exec("SET CHARACTER SET utf8");
			} catch (PDOExcepetion $e) {

				echo $e->getMessage();

			}
		}
	#retorna os valores da variavel $instance	
	return self::$instance;	

	}
	# inclui a linha de crud sql na conexao ao banco de dados
	public static function prepare($qry) {
		return self::getInstance()->prepare($qry);
	}
}
	
?>