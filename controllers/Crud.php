<?php
require_once 'DB.PHP';

# classe bstrata extends com DB
abstract class Crud extends DB {

	# tabela do banco de dados a ser manipulada / valor a ser recebido direto
	protected $tabela;
	
	# funções abstratas para serem manipuladas depois
	abstract public function insert();
	abstract public function update($id);

	# função para encontrar resultado especifico na $tabela
	public function find($id){

		$qry = "SELECT * FROM $this->tabela WHERE id = :id";
		$stm = DB::prepare($qry);
		$stm->bindParam(':id', $id, PDO::PARAM_INT);
		$stm->execute();
		return $stm->fetch();
	}

	#função para chamar todos os resultado da $tabela
	public function findAll(){

		$qry = "SELECT * FROM $this->tabela ORDER BY id DESC";
		$stm = DB::prepare($qry);
		$stm->execute();
		return $stm->fetchAll();
	}

	#function to delet by id
	public function delete($id){

		$qry = "DELETE FROM $this->tabela WHERE id = :id";
		$stm = DB::prepare($qry);
		$stm->bindParam(':id', $id, PDO::PARAM_INT);
		return $stm->execute();
	}


}

?>
