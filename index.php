<?php
//Iniciando a session
@session_start();
//Constante
define("ENDERECO-SITE","http://localhost/motorapido/");

//Por padrão todo usuario inicia deslogado
if (!isset($_SESSION["admLogado"])) {
    $_SESSION["admLogado"] = false;
}
if (!isset($_SESSION["admName"])) {
    $_SESSION["admName"] = false;
}
if (!isset($_SESSION["usuarioLogado"])) {
    $_SESSION["usuarioLogado"] = false;
}
if (!isset($_SESSION["usuarioName"])) {
    $_SESSION["usuarioName"] = false;
}
if (!isset($_SESSION["prestadorLogado"])) {
    $_SESSION["prestadorLogado"] = false;
}
if (!isset($_SESSION["prestadorName"])) {
    $_SESSION["prestadorName"] = false;
}
if (!isset($_GET["sair"])) {
    $_GET["sair"] = false;
}
if (!isset($_GET['addViagem'])) {
    $_GET['addViagem'] = false;
}
if (!isset($_GET["page"])) {
    $_GET["page"] = 1;
}
if (!isset($_GET["pageAdm"])) {
    $_GET["pageAdm"] = 1;
}
if (!isset($pagesUsuariosAdm)) {
    $pagesUsuariosAdm = 1;
}
if (!isset($pages)) {
    $pages = 1;
}
if (!isset($_GET["pageAdm"])) {
    $_GET["pageAdm"] = 1;
}
if (!isset($_GET["removerPrestadorAdm"])) {
    $_GET["removerPrestadorAdm"] = false;
}
if (!isset($_GET["removerUsuarioAdm"])) {
    $_GET["removerUsuarioAdm"] = false;
}


//localhost/diogo/uec?pagina=3
// var_dump($_SESSION["admLogado"]);
// var_dump($_SESSION["admName"]);
// var_dump($_SESSION["usuarioLogado"]);
// var_dump($_SESSION["usuarioName"]);
// var_dump($_SESSION["prestadorLogado"]);
// var_dump($_SESSION["prestadorName"]);


//Operador ternario
$pagina = ($_SERVER["REQUEST_METHOD"] == "GET" && !empty( $_GET['pagina']) ) ? $_GET['pagina'] : 999 ;
$id = ($_SERVER["REQUEST_METHOD"] == "GET" && !empty( $_GET['id']) ) ? $_GET['id']: 0;
$alert = ($_SERVER["REQUEST_METHOD"] == "GET" && !empty( $_GET['alert']) ) ? $_GET['alert']: 0;
$termoBusca = ($_SERVER["REQUEST_METHOD"] == "GET" && !empty( $_GET['termo']) ) ? $_GET['termo']: 0;


if($pagina === '1'){
    // Usuario Logado
    include_once 'model/conexao.php';
    include_once 'model/usuario.php';
    include_once 'model/upload.php';
    include_once 'model/prestador.php';
    include_once 'controller/usuario_controller.php';
    include_once 'view/template/motoRapido/header.php';
    include_once 'view/viewMotoRapido/view_usuarioLogado.php';
    include_once 'view/template/motoRapido/footer.php';
    
}else if($pagina === '2'){
    //ADM Logado
    include_once 'model/conexao.php';
    include_once 'model/adm.php';
    include_once 'model/prestador.php';
    include_once 'model/usuario.php';
    include_once 'controller/adm_controller.php';
    include_once 'controller/prestador_controller.php';
    include_once 'controller/usuario_controller.php';
    include_once 'view/template/adm/header.php';
    include_once 'view/viewAdm/view_admLogado.php';
    include_once 'view/template/adm/footer.php';
    

}else if($pagina === '3'){
    //Prestador Logado
    include_once 'model/conexao.php';
    include_once 'model/prestador.php';
    include_once 'model/upload.php';
    include_once 'controller/prestador_controller.php';
    include_once 'view/template/motoRapido/header.php';
    include_once 'view/viewMotoRapido/view_prestadorLogado.php';
    include_once 'view/template/motoRapido/footer.php'; 


}else if($pagina === '4'){                                                                                  
    //Login ADM
    include_once 'view/template/adm/header.php';
    include_once 'view/viewAdm/view_loginAdm.php';
    include_once 'view/template/adm/footer.php';
    
}else if($pagina === '5'){
    //ADM Usuarios
    include_once 'model/conexao.php';
    include_once 'model/adm.php';
    include_once 'model/prestador.php';
    include_once 'model/usuario.php';
    include_once 'controller/adm_controller.php';
    include_once 'controller/prestador_controller.php';
    include_once 'controller/usuario_controller.php';
    include_once 'view/template/adm/header.php';
    include_once 'view/viewAdm/view_admUsuario.php';
    include_once 'view/template/adm/footer.php';
   
} 
// else if($pagina === '6'){
//     //lista de buscar
//     include_once 'model/conexao.php';
//     include_once 'model/usuario.php';
//     include_once 'controller/usuario_controller.php';
//     include_once "view/template/topo.php";
//     include_once 'view/view_lista_usuario.php';
//     include_once "view/template/rodape.php"; 
// }
else{
    //login Main Page
    include_once 'model/conexao.php';
    include_once 'model/usuario.php';
    include_once 'model/upload.php';
    include_once 'model/prestador.php';
    include_once 'controller/main_controller.php';
    include_once 'view/template/motoRapido/header.php';
    include_once 'view/viewMotoRapido/view_main-page.php';
    include_once 'view/template/motoRapido/footer.php';
    
}

