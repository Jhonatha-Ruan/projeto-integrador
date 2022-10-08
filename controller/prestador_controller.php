<?php
@session_start();
@include_once '../model/conexao.php';
@include_once '../model/prestador.php';


$email = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty( $_POST['email']) )? $_POST['email'] : null; 
$senha = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty( $_POST['senha']) )? $_POST['senha'] : null; 
$nome = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty( $_POST['nome']) )? $_POST['nome'] : null; 
$idade = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty( $_POST['idade']) )? $_POST['idade'] : null; 
$cor = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty( $_POST['cor']) )? $_POST['cor'] : null; 
$placa = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty( $_POST['placa']) )? $_POST['placa'] : null; 
$modelo = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty( $_POST['modelo']) )? $_POST['modelo'] : null; 
$chassi = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty( $_POST['chassi']) )? $_POST['chassi'] : null;
$tela =  ( $_SERVER["REQUEST_METHOD"] == "POST" && !empty( $_POST['tela']) ) ? $_POST['tela'] : null; 


// $usuarioObj = new Prestador(null, null, null, null, null, null, null, null);
// $lista = $usuarioObj->listar();
// var_dump($lista);
// $usuarioObj = new Prestador(null, null, null, null, null, null, null, null);
// $lista = $usuarioObj->buscarPorId(1);
// var_dump($lista);
// $cadastro = new Prestador('jhonatha@gmail', '123', 'jhonatha', '20', 'preto', 'PEK6722', 'XJ6', '23334GDGFEFEF',);
// $cadastro->cadastrar();

// Barrar o prestador
if(!Prestador::barrarPrestador()){
    header('Location: http://localhost/motorapido/?erroNãoLogado');
}

// Verifica o Cadastro de Prestador
if($tela == 'cadastroDePrestador'){
    $prestadorObj = new Prestador($email, $senha, $nome, $idade, $cor, $placa, $modelo, $chassi);
    $resultado = $prestadorObj->buscarPorEmail($prestadorObj->getEmail());
    //Se existir o email cadastrado no bd ele não deve ser gravado
    if($resultado){
        header('Location: http://localhost/motorapido/?erroJaExiste');
    } else {
        if($prestadorObj->cadastrar()){
            header('Location: http://localhost/motorapido/?sucesso');
        }else{
            header('Location: http://localhost/motorapido/?erro');
        }
    }
}

// Verifica o login do Prestador
if($tela == 'loginDoPrestador'){
    $prestadorObj = new Prestador($email, $senha, $nome, null, null, null, null, null);
    if($prestadorObj->verificarLogin()){
        $_SESSION["prestadorLogado"] = true;
        $_SESSION["prestadorName"] = $prestadorObj->getEmail();
        header('Location: http://localhost/motorapido/?pagina=3');
    }else {
        header('Location: http://localhost/motorapido/?erroSenha');
    }
}