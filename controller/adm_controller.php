<?php
//Iniciando a session
@session_start();
@include_once '../model/conexao.php';
@include_once '../model/adm.php';

$email =  ( $_SERVER["REQUEST_METHOD"] == "POST" && !empty( $_POST['email']) )? $_POST['email'] : null; 
$senha =  ( $_SERVER["REQUEST_METHOD"] == "POST" && !empty( $_POST['senha']) )? $_POST['senha'] : null;
$tela =  ( $_SERVER["REQUEST_METHOD"] == "POST" && !empty( $_POST['tela']) ) ? $_POST['tela'] : null;
$idUsuario =  ( $_SERVER["REQUEST_METHOD"] == "POST" && !empty( $_POST['id']) )? $_POST['id'] : null;
$BuscaUsuario =  ( $_SERVER["REQUEST_METHOD"] == "POST" && !empty( $_POST['termo']) )? $_POST['termo'] : null;



if(!Adm::barrarAdm()){
    header('Location: http://localhost/motorapido/?erro=nãoLogado');
}

if($_GET['sair']){
    $_SESSION["admLogado"] = false;
    $_SESSION["prestadorLogado"] = false;
    $_SESSION["usuarioLogado"] = false;
    session_destroy();
    header('Location: http://localhost/motorapido/?saiu');
}

// if($tela == 'cadastroDeUsuario'){
//     $usuarioObj = new Usuario($email, $senha);
//     $resultado = $usuarioObj->buscarPorEmail( $usuarioObj->getEmail() );
//     //Se existir o email cadastrado no bd ele não deve ser gravado
//     if( $resultado ){
//         header('Location: http://localhost/motorapido/?cadastro=usuarioExiste');
//     } else {
//         if($usuarioObj->cadastrar()){
//             header('Location: http://localhost/motorapido/?cadastro=sucesso');
//         }else{
//             header('Location: http://localhost/motorapido/?cadastro=erro');
//         }
//     }
// }

// Verifica o login do adm
if( $tela == 'loginDoAdm' ){
    $admObj = new Adm($nome, $email, $senha);
    if( $admObj->verificarLogin() ){
        $_SESSION["admLogado"] = true;
        $_SESSION["prestadorLogado"] = true;
        $_SESSION["usuarioLogado"] = true;
        $_SESSION["admName"] = $admObj->getEmail();

        header('Location: http://localhost/motorapido/?pagina=2');
    } else {
        header('Location: http://localhost/motorapido/?pagina=4&erro=senhaInválida');
    }
}


if($_GET['page'] == 0){
    header('Location: http://localhost/motorapido/?pagina=2&page=1');
}





