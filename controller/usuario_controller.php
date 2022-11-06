<?php
//Iniciando a session
@session_start();
@include_once '../model/conexao.php';
@include_once '../model/usuario.php';

$email =  ( $_SERVER["REQUEST_METHOD"] == "POST" && !empty( $_POST['email']) )? $_POST['email'] : null; 
$senha =  ( $_SERVER["REQUEST_METHOD"] == "POST" && !empty( $_POST['senha']) )? $_POST['senha'] : null;
$tela =  ( $_SERVER["REQUEST_METHOD"] == "POST" && !empty( $_POST['tela']) ) ? $_POST['tela'] : null;
$idUsuario =  ( $_SERVER["REQUEST_METHOD"] == "POST" && !empty( $_POST['id']) )? $_POST['id'] : null;
$BuscaUsuario =  ( $_SERVER["REQUEST_METHOD"] == "POST" && !empty( $_POST['termo']) )? $_POST['termo'] : null;
$idRemoverUsuario = ($_SERVER["REQUEST_METHOD"] == "GET" && !empty( $_GET['idRemoverUsuario']) ) ? $_GET['idRemoverUsuario']: null;
$termo = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty( $_POST['search']) ) ? $_POST['search']: null;
$nomeBusca = ($_SERVER["REQUEST_METHOD"] == "GET" && !empty( $_GET['search']) ) ? $_GET['search']: null;

if(!Usuario::barrarUsuario()){
    header('Location: http://localhost/motorapido/?erro=nãoLogado');
}

if($_GET['sair']){
    session_destroy();
    header('Location: http://localhost/motorapido/?saiu');
}

if($tela == 'cadastroDeUsuario'){
    $usuarioObj = new Usuario($email, $senha);
    $resultado = $usuarioObj->buscarPorEmail( $usuarioObj->getEmail() );
    //Se existir o email cadastrado no bd ele não deve ser gravado
    if( $resultado ){
        header('Location: http://localhost/motorapido/?cadastro=usuarioExiste');
    } else {
        if($usuarioObj->cadastrar()){
            header('Location: http://localhost/motorapido/?cadastro=sucesso');
        }else{
            header('Location: http://localhost/motorapido/?cadastro=erro');
        }
    }
}

// Verifica o login do usuário
if($tela == 'loginDoUsuario'){
    $usuarioObj = new Usuario($email, $senha);
    if($usuarioObj->verificarLogin()){
        $_SESSION["usuarioLogado"] = true;
        $_SESSION["usuarioName"] = $usuarioObj->getEmail();
        header('Location: http://localhost/motorapido/?pagina=1&page=1');
    } else {
        header('Location: http://localhost/motorapido/?erro=senhaInválida');
    }
}

// Verifica edição do usuário
if($tela == 'updateUsuarioAdm'){
    $usuarioObj = new Usuario($email, $senha);
    $usuarioObj->editar($idUsuario);
    header('Location: http://localhost/motorapido/?pagina=5&editarSucesso');
}

// Verifica da busca do usuario
if($tela == 'buscarUsuarioAdm') {
    header("Location: http://localhost/motorapido/?pagina=5&page=1&search=$termo");
}

if($tela == 'buscarPrestador') {
    header("Location: http://localhost/motorapido/?pagina=1&page=1&search=$termo");
}

//Remover Usuários
if($_GET['removerUsuarioAdm']) {
    $usuarioObj = new Usuario($email, $senha);
    $usuarioObj->deletar($idRemoverUsuario);
    header('Location: http://localhost/motorapido/?pagina=5&pageAdm=1&UsuarioRemovido');
}

if($_GET['page'] == 0 and $_GET['pagina'] == '1'){
    header('Location: http://localhost/motorapido/?pagina=1&page=1');
}

if($_GET['pageAdm'] == 0 and $_GET['pagina'] == '5'){
    header('Location: http://localhost/motorapido/?pagina=5&pageAdm=1');
}

if(isset($_GET['search']) and $_GET['pagina'] == '1') {
    $prestadorObj = new Prestador(null, null, null, null, null, null, null, null, null);
    $listaPrestador = $prestadorObj->listarPorNome($nomeBusca);
} else {
    $prestadorObj = new Prestador(null, null, null, null, null, null, null, null, null);
    $listaPrestador = $prestadorObj->listarJoin();
    $pages = $prestadorObj->countId();
}


if(isset($_GET['search']) and $_GET['pagina'] == '5') {
    $usuarioObj = new Usuario($email, $senha);
    $listaUsuariosAdm = $usuarioObj->buscar($nomeBusca);
} else {
    $usuarioObj = new Usuario(null, null);
    $listaUsuariosAdm = $usuarioObj->listarUsuarios();
    $pagesUsuariosAdm = $usuarioObj->countIdUsuarios();
}


