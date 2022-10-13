<?php

class Upload {

    //Atributos
    private $imagem;


    //Construtor
    public function __construct($imagem) {
        $this->setImagem($imagem);
    }

    //GET
    
    public function getImagem()
    {
        return $this->imagem;
    }
    public function setImagem($imagem)
    {
        $this->imagem = $imagem;
        return $this;
    }


    public function cadastrarArquivo($name, $path){
        $sql = "INSERT INTO arquivos (nome, path) VALUES(:nome, :path)";
        $pdo = Database::conexao();
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':nome', $name);
        $stmt->bindValue(':path', $path);
        return $stmt->execute();
    }

    public function exibirTabela() {
        $pdo = Database::conexao();
        $stmt = $pdo->prepare("SELECT * FROM arquivos");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function listarId() {
        $pdo = Database::conexao();
        $stmt = $pdo->prepare("SELECT id FROM arquivos ORDER BY arquivos.id DESC");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function cadastrarImagem(){
            $arquivo = $this->getImagem();
        
            if($arquivo['size'] > 2097152){
                header('Location: http://localhost/motorapido/?pagina=3&erroMaxMB');//Mudar
                die;
            }
            
            $pastaPrincipal = "../assets/arquivos/";
            $pastaBanco = "assets/arquivos/";
            $nomeDoArquivo = $arquivo['name'];
            $novoNomeDoArquivo = uniqid();
            $extensao = strtolower(pathinfo($nomeDoArquivo, PATHINFO_EXTENSION));
            
            if($extensao != "jpg" && $extensao != "png" && $extensao != "jpeg"){
                header('Location: http://localhost/motorapido/?pagina=3&erroTipo');//Mudar
                die;
            }
        
            $path = $pastaPrincipal . $novoNomeDoArquivo . "." . $extensao;
            $pathBanco = $pastaBanco . $novoNomeDoArquivo . "." . $extensao;
        
            if(move_uploaded_file($arquivo["tmp_name"], $path)){
                $this->cadastrarArquivo($nomeDoArquivo, $pathBanco);
            }
    }

}