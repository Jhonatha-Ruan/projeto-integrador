<?php

class Prestador
{
    //Atributos
    private $email;
    private $senha;
    private $nome;
    private $idade;
    private $cor;
    private $placa;
    private $modelo;
    private $chassi;
    

    //Construtor
    public function __construct($email, $senha, $nome, $idade, $cor, $placa, $modelo, $chassi) {
        $this->setEmail($email);
        $this->setSenha($senha);
        $this->setNome($nome);
        $this->setIdade($idade);
        $this->setCor($cor);
        $this->setPlaca($placa);
        $this->setModelo($modelo);
        $this->setChassi($chassi);
    }

  
    //Métodos especiais Get
    public function getEmail()
    {
        return $this->email;
    }
    public function getSenha()
    {
        return $senha = sha1($this->senha);
    }
    public function getNome()
    {
        return $this->nome;
    }
    public function getIdade()
    {
        return $this->idade;
    }
    public function getCor()
    {
        return $this->cor;
    }
    public function getPlaca()
    {
        return $this->placa;
    }
    public function getModelo()
    {
        return $this->modelo;
    }
    public function getChassi()
    {
        return $this->chassi;
    }
   
    //Métodos especiais Get




    //Métodos especiais Set
    public function setEmail($email)
    {
        $this->email = $email;
    }
    public function setSenha($senha)
    {
        $this->senha = $senha;
    }
    public function setNome($nome)
    {
        $this->nome = $nome;
    }
    public function setIdade($idade)
    {
        $this->idade = $idade;
    }
    public function setCor($cor)
    {
        $this->cor = $cor;
    }
    public function setPlaca($placa)
    {
        $this->placa = $placa;
    }
    public function setmodelo($modelo)
    {
        $this->modelo = $modelo;
    }
    public function setChassi($chassi)
    {
        $this->chassi = $chassi;
    }

    //Métodos especiais Set

    public function buscar($email){
        $pdo = Database::conexao();
        $sql = "SELECT * FROM prestador WHERE `email` LIKE '$email%' ";
        $stmt = $pdo->prepare($sql);
        $list = $stmt->execute();
        $list = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $list; 
    }

    public function buscarPorEmail($email){
        $pdo = Database::conexao();
        $sql = "SELECT * FROM prestador WHERE `email` = '$email' LIMIT 1 ";
        $stmt = $pdo->prepare($sql);
        $list = $stmt->execute();
        $list = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $list; 
    }

    public function buscarPorId($id){
        $pdo = Database::conexao();
        $sql = "SELECT * FROM prestador WHERE `id` = '$id'";
        $stmt = $pdo->prepare($sql);
        $list = $stmt->execute();
        $list = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $list[0]; 
    }

    public function listar(){
        $pdo = Database::conexao();
        $sql = "SELECT * FROM prestador ORDER BY id DESC";
        $stmt = $pdo->prepare($sql);
        $list = $stmt->execute();
        $list = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $list;
    }

    public function cadastrar()
    {
        $sql = "INSERT INTO prestador(email, senha, nome, idade, cor, placa, modelo, chassi) 
        VALUES(:email, :senha, :nome, :idade, :cor, :placa, :modelo, :chassi)";
        $pdo = Database::conexao();
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':email', $this->getEmail());
        $stmt->bindValue(':senha', $this->getSenha());
        $stmt->bindValue(':nome', $this->getNome());
        $stmt->bindValue(':idade', $this->getIdade());
        $stmt->bindValue(':cor', $this->getCor());
        $stmt->bindValue(':placa', $this->getPlaca());
        $stmt->bindValue(':modelo', $this->getModelo());
        $stmt->bindValue(':chassi', $this->getChassi());
        $result = $stmt->execute();
        if ($result) {
            return true;
        }else{
           return false; 
           
        }
    }

    public function verificarLogin(){
        //Se email e senha possuem valor
        if( $this->getEmail() && $this->getSenha() ){
            $retorno = $this->buscarPorEmail($this->getEmail());
            //Se o retorno for null
            if(!$retorno){ return false; }
            // Se senha digitada for igual a senha cadastrada e se o email digitado é igual ao cadastrado
            if( $this->getSenha() === $retorno[0]['senha'] && $this->getEmail() === $retorno[0]['email'] ){
                return true;
            }
            return false;
        }
    }

    public function editar($id)
    {
        $sql = "UPDATE prestador SET 
        email = :email,
        senha = :senha,
        nome = :nome,
        idade = :idade,
        cor = :cor,
        placa = :placa,
        modelo = :modelo,
        chassi = :chassi,
        WHERE id = :id";
        $pdo = Database::conexao();
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':email',$this->getEmail());
        $stmt->bindValue(':senha', $this->getSenha());
        $stmt->bindValue(':nome', $this->getNome());
        $stmt->bindValue(':idade', $this->getIdade());
        $stmt->bindValue(':cor', $this->getCor());
        $stmt->bindValue(':placa', $this->getPlaca());
        $stmt->bindValue(':modelo', $this->getModelo());
        $stmt->bindValue(':chassi', $this->getChassi());
        $stmt->bindValue(':id', $id);
        $stmt->execute();
    }

    public function deletar($id)
    {
        $sql = "DELETE FROM prestador   
        WHERE id = :id";
        $pdo = Database::conexao();
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':id', $id);
        $stmt->execute();
    }

    public static function barrarPrestador() {
        return ($_SESSION['prestadorLogado'] && !empty($_SESSION['prestadorLogado'])) ? true : false;
    }
}
