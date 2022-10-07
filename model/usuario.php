<?php

class Usuario
{
    //Atributos
    private $email;
    private $senha;

    //Métodos

    //Construtor
    public function __construct($email, $senha){
        $this->setEmail($email);
        $this->setSenha($senha);
    }

    public function getEmail()
    {
        return $this->email;
    }
    public function getSenha()
    {
        return $senha = sha1($this->senha);
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
        $sql = "SELECT * FROM usuario WHERE `email` LIKE '$email%' ";
        $stmt = $pdo->prepare($sql);
        $list = $stmt->execute();
        $list = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $list;
    }

    public function buscarPorEmail($email){
        $pdo = Database::conexao();
        $sql = "SELECT * FROM usuario WHERE `email` = '$email' LIMIT 1 ";
        $stmt = $pdo->prepare($sql);
        $list = $stmt->execute();
        $list = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $list; 
    }

    public function buscarPorId($id){
        $pdo = Database::conexao();
        $sql = "SELECT * FROM usuario WHERE `id` = '$id'";
        $stmt = $pdo->prepare($sql);
        $list = $stmt->execute();
        $list = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $list[0]; 
    }

    public function listar(){
        $pdo = Database::conexao();
        $sql = "SELECT * FROM usuario ORDER BY id DESC";
        $stmt = $pdo->prepare($sql);
        $list = $stmt->execute();
        $list = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $list; 
    }

    public function cadastrar()
    {
        $sql = "INSERT INTO usuario(email, senha) 
        VALUES(:email, :senha)";
        $pdo = Database::conexao();
        $stmt = $pdo->prepare($sql);
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
        $sql = "UPDATE usuario SET 
        email = :email,
        senha = :senha 
        WHERE id = :id";
        $pdo = Database::conexao();
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':email',$this->getEmail());
        $stmt->bindValue(':senha', $this->getSenha());
        $stmt->bindValue(':id', $id);
        $stmt->execute();
    }

    public function deletar($id)
    {
        $sql = "DELETE FROM usuario   
        WHERE id = :id";
        $pdo = Database::conexao();
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':id', $id);
        $stmt->execute();
    }

    public static function barrarUsuario() {
        return ($_SESSION['usuarioLogado'] && !empty($_SESSION['usuarioLogado'])) ? true : false;
    }
}