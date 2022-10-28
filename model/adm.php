<?php

class Adm
{
    //Atributos
    private $nome;
    private $email;
    private $senha;

    //Métodos

    //Construtor
    public function __construct($nome, $email, $senha){
        $this->setNome($nome);
        $this->setEmail($email);
        $this->setSenha($senha);
    }

    public function getNome()
    {
        return $this->nome;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function getSenha()
    {
        return $senha = sha1($this->senha);
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }
    public function setSenha($senha){
        $this->senha = $senha;
    }


    public function buscar($email){
        $pdo = Database::conexao();
        $sql = "SELECT * FROM adm WHERE `email` LIKE '$email%' ";
        $stmt = $pdo->prepare($sql);
        $list = $stmt->execute();
        $list = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $list;
    }

    public function buscarPorEmail($email){
        $pdo = Database::conexao();
        $sql = "SELECT * FROM adm WHERE `email` = '$email' LIMIT 1 ";
        $stmt = $pdo->prepare($sql);
        $list = $stmt->execute();
        $list = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $list; 
    }

    public function buscarPorId($id){
        $pdo = Database::conexao();
        $sql = "SELECT * FROM adm WHERE `id` = '$id'";
        $stmt = $pdo->prepare($sql);
        $list = $stmt->execute();
        $list = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $list[0]; 
    }

    public function listar(){
        $pdo = Database::conexao();
        $sql = "SELECT * FROM adm ORDER BY id DESC";
        $stmt = $pdo->prepare($sql);
        $list = $stmt->execute();
        $list = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $list; 
    }

    public function cadastrar()
    {
        $sql = "INSERT INTO adm(nome, email, senha) 
        VALUES(:nome, :email, :senha)";
        $pdo = Database::conexao();
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':nome', $this->getNome());
        $stmt->bindValue(':email', $this->getEmail());
        $stmt->bindValue(':senha', $this->getSenha());
        $result = $stmt->execute();
        if ($result) {
            return true;
        }else{
           return false; 
           //$stmt->errorInfo();
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
        $sql = "UPDATE adm SET 
        nome = :nome,
        email = :email,
        senha = :senha 
        WHERE id = :id";
        $pdo = Database::conexao();
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':nome',$this->getNome());
        $stmt->bindValue(':email',$this->getEmail());
        $stmt->bindValue(':senha', $this->getSenha());
        $stmt->bindValue(':id', $id);
        $stmt->execute();
    }

    public function deletar($id)
    {
        $sql = "DELETE FROM adm   
        WHERE id = :id";
        $pdo = Database::conexao();
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':id', $id);
        $stmt->execute();
    }

    public static function barrarAdm() {
        return ($_SESSION['admLogado'] && !empty($_SESSION['admLogado'])) ? true : false;
    }
}