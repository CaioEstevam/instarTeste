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

		if (count($results) > 0) {
			
			$this->setData($results[0]);

		}
	}

	public static function getList(){

		$sql = new Sql();

		return $sql->select("SELECT * FROM tb_contatos ORDER BY codigo;");
	}

	public static function search ($login){
		$sql = new Sql();

		return $sql->select("SELECT * FROM tb_contatos WHERE nome LIKE :SEARCH ORDER BY codigo", array(
				':SEARCH'=>"%" .$login. "%"
		));
	}

	public function setData($data){

		$this->setCodigo($data['codigo']);
		$this->setCategoriasCodigo($data['categorias_codigo']);
		$this->setNome($data['nome']);
		$this->setEmail($data['email']);
		$this->setEndereco($data['endereco']);
		$this->setTelefone($data['telefone']);
		$this->setCelular($data['celular']);
		$this->setCidade($data['cidade']);
		$this->setEstado($data['estado']);
		$this->setFoto($data['foto']);
		$this->setDataNascimento(new DateTime($data['data_nascimento']));
		$this->setObservacoes($data['observacoes']);


	}

	public function insert(){
		$sql = new Sql();

		$results = $sql->select("CALL sp_contatos_insert(:CATEGORIAS_CODIGOS, :NOME, :EMAIL, :ENDERECO, :TELEFONE, :CELULAR, :CIDADE, :ESTADO, :FOTO, :DATA_NASCIMENTO, :OBSERVACOES)",array(

			':CATEGORIAS_CODIGOS'=>$this->getCategoriasCodigo(),
			':NOME'=>$this->getNome(),
			':EMAIL'=>$this->getEmail(), 
			':ENDERECO'=>$this->getEndereco(),
			':TELEFONE'=>$this->getTelefone(),
			':CELULAR'=>$this->getCelular(),
			':CIDADE'=>$this->getCidade(),
			':ESTADO'=>$this->getEstado(),
			':FOTO'=>$this->getFoto(),
			':DATA_NASCIMENTO'=>$this->getDataNascimento(),
			':OBSERVACOES'=>$this->getObservacoes()

		));

		if (count($results) > 0){

			$this->setData($results[0]);
		}

	}

	public function update($categoriasCodigo,$nome, $email, $endereco, $telefone, $celular, $cidade, $estado, $foto, $dataNascimento, $observacoes){

		$this->setCategoriasCodigo($categoriasCodigo);
		$this->setNome($nome);
		$this->setEmail($email);
		$this->setEndereco($endereco);
		$this->setTelefone($telefone);
		$this->setCelular($celular);
		$this->setCidade($cidade);
		$this->setEstado($estado);
		$this->setFoto($foto);
		$this->setDataNascimento($dataNascimento);
		$this->setObservacoes($observacoes);

		$sql = new Sql();

		$sql->query("UPDATE tb_contatos SET categorias_codigo = :CATEGORIAS_CODIGO, nome = :NOME, email = :EMAIL, endereco = :ENDERECO, telefone = :TELEFONE,
		celular = :CELULAR, cidade = :CIDADE, estado = :ESTADO, foto = :FOTO, data_nascimento = :DATA_NASCIMENTO, observacoes = :OBSERVACOES WHERE codigo = :CODIGO",array(

				
			':CATEGORIAS_CODIGO'=>$this->getCategoriasCodigo(),
			':NOME'=>$this->getNome(),
			':EMAIL'=>$this->getEmail(),
			':ENDERECO'=>$this->getEndereco(),
			':TELEFONE'=>$this->getTelefone(),
			':CELULAR'=>$this->getCelular(),
			':CIDADE'=>$this->getCidade(),
			':ESTADO'=>$this->getEstado(),
			':FOTO'=>$this->getFoto(),
			':DATA_NASCIMENTO'=>$this->getDataNascimento(),
			':OBSERVACOES'=>$this->getObservacoes(),
			':CODIGO'=>$this->getCodigo()

			

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
			"dataNascimento"=>$this->getDataNascimento(),
			"observacoes"=>$this->getObservacoes()



		));
		}
	
}



 ?>