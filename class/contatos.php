<?php 


class Contatos{

	private $codigo;
	private $categoriasCodigo;
	private $nome;
	private $email;
	private $endereco;
	private $telefone;
	private $celular;
	private $cidade;
	private $estado;
	private $foto;
	private $dataNascimento;
	private $observacoes;


	public function getCodigo(){
		return $this->codigo;
	}

	public function setCodigo($value){
		$this->codigo = $value;
	}

	public function getCategoriasCodigo(){
		return $this->categoriascodigo;
	}

	public function setCategoriasCodigo($value){
		$this->categoriascodigo = $value;
	}

	public function getNome(){
		return $this->nome;
	}

	public function setNome($value){
		$this->nome = $value;
	}

	public function getEmail(){
		return $this->email;
	}

	public function setEmail($value){
		$this->email = $value;
	}

	public function getEndereco(){
		return $this->endereco;
	}

	public function setEndereco($value){
		$this->endereco = $value;
	}

	public function getTelefone(){
		return $this->telefone;
	}

	public function setTelefone($value){
		$this->telefone = $value;
	}

	public function getCelular(){
		return $this->celular;
	}

	public function setCelular($value){
		$this->celular = $value;
	}

	public function getCidade(){
		return $this->cidade;
	}

	public function setCidade($value){
		$this->cidade = $value;
	}

	public function getEstado(){
		return $this->estado;
	}

	public function setEstado($value){
		$this->estado = $value;
	}

	public function getFoto(){
		return $this->foto;
	}

	public function setFoto($value){
		$this->foto = $value;
	}

	public function getDataNascimento(){
		return $this->datanascimento;
	}

	public function setDataNascimento($value){
		$this->datanascimento = $value;
	}

	public function getObservacoes(){
		return $this->observacoes;
	}

	public function setObservacoes($value){
		$this->observacoes = $value;
	}


	public function loadById($id){
		$sql = new Sql();
		$results = $sql->select("SELECT * FROM tb_contatos WHERE codigo = :ID", array(
			":ID"=>$id
		));

		if (count($results) > 0){

			$row = $results[0];

			$this->setCodigo($row['codigo']);
			$this->setCategoriasCodigo($row['categorias_codigo']);
			$this->setNome($row['nome']);
			$this->setEmail($row['email']);
			$this->setEndereco($row['endereco']);
			$this->setTelefone($row['telefone']);
			$this->setCelular($row['celular']);
			$this->setEstado($row['estado']);
			$this->setFoto($row['foto']);
			$this->setDataNascimento(new DateTime($row['data_nascimento']));
			$this->setObservacoes($row['observacoes']);
			

		}
	}

	public static function getList(){

		$sql = new Sql();

		return $sql->select("SELECT * FROM tb_contatos ORDER BY nome;");
	}

	public static function search ($login){
		$sql = new Sql();

		return $sql->select("SELECT * FROM tb_contatos WHERE nome LIKE :SEARCH ORDER BY nome", array(
				':SEARCH'=>"%" .$login. "%"
		));
	}

	public function __toString(){

		return json_encode(array(
			"codigo"=>$this->getCodigo(),
			"categorias_codigo"=>$this->getCategoriasCodigo(),
			"nome"=>$this->getNome(),
			"email"=>$this->getEmail(),
			"endereco"=>$this->getEndereco(),
			"telefone"=>$this->getTelefone(),
			"celular"=>$this->getCelular(),
			"estado"=>$this->getEstado(),
			"foto"=>$this->getFoto(),
			"dataNascimento"=>$this->getDataNascimento() -> format("d/m/Y"),
			"observacoes"=>$this->getObservacoes()



		));
	}
}


 ?>