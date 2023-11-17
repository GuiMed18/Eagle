<!DOCTYPE html>
<html lang="pt-br">
<?php
session_start();
date_default_timezone_set('America/Sao_Paulo');

// Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
	header("Location: login.php");
	exit;
}



?>
<head>

<!-- Custom fonts for this template-->
<link href="../CPDPanel/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">



  
<script src="js/jquery/jquery-3.6.0.min.js"></script>
   
<?php
include('head.php');
include('navbar.php');
include('cab_rod_cn/rodape.php');


?>

</head>


						

<body id="page-top" class="bg-gradient-light">



<?php

if(isset($_GET['setor']) && $_GET['setor'] == "cpd"){
	include('func/cpd.php');
}
if(isset($_GET['setor']) && $_GET['setor'] == "administrativo"){
	include('func/administrativo.php');
}
if(isset($_GET['setor']) && $_GET['setor'] == "gerencia"){
	include('func/gerencia.php');
}
if(isset($_GET['setor']) && $_GET['setor'] == "fcx"){
	include('func/fcx.php');
}
if(isset($_GET['setor']) && $_GET['setor'] == "loja"){
	include('func/loja.php');
}
if(isset($_GET['setor']) && $_GET['setor'] == "deposito"){
	include('func/deposito.php');
}
if(isset($_GET['tela']) && $_GET['tela'] == "monitoramento"){
	include('func/monitoramento.php');
}
?>

	
					



					
</body>

</html>
