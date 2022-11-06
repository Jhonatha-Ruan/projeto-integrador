<?php 
@include_once '../model/conexao.php';
@include_once '../model/usuario.php';


$prestadorObj = new Prestador(null, null, null, null, null, null, null, null, null);
$listaPrestador = $prestadorObj->listarJoin();

?>