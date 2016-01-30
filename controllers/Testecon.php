<?php 

require_once 'Crud.php';

Class Testecon extends Crud {

	protected $tabela = "filmes";
	private $titulo;
	private $sinopse;
	private $tempo;


	public function setNome($titulo) {
		$this->titulo = $titulo;
	}

	public function setSinopse($sinopse) {
		$this->sinopse = $sinopse;
	}

	public function setTempo($tempo) {
		$this->tempo = $tempo;
	}


	public function insert() {

		$sql = "INSERT INTO $this->tabela (titulo, sinopse, tempo) VALUES (:titulo, :sinopse, :tempo)";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':titulo', $this->titulo);
		$stmt->bindParam(':sinopse', $this->sinopse);
		$stmt->bindParam(':tempo', $this->tempo);
		return $stmt->execute();

	}

	public function update($id) {

		$sql = "UPDATE $this->tabela SET titulo = :titulo, sinopse = :sinopse, tempo = :tempo WHERE id = :id";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':titulo', $this->titulo);
		$stmt->bindParam(':sinopse', $this->sinopse);
		$stmt->bindParam(':tempo', $this->tempo);
		$stmt->bindParam(':id', $id);
		return $stmt->execute();
	}

}

	
?>