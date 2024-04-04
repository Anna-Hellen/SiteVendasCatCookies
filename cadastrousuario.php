<?php

session_start();


//require "logadodiretor.php";


include "base.php";


$nomeusuario = isset($_POST["tf_nome"]) ? addslashes(trim($_POST["tf_nome"])) : false;
$email = isset($_POST["tf_email"]) ? addslashes(trim($_POST["tf_email"])) : false;
$senha = (strlen($_POST["tf_senha"]) > 0) ? md5(trim($_POST["tf_senha"])) : false;
$confirmasenha = (strlen($_POST["tf_confirmasenha"]) > 0) ? md5(trim($_POST["tf_confirmasenha"])) : false;


if($senha != $confirmasenha){
	echo "<META HTTP-EQUIV=REFRESH CONTENT='0;URL=.../html/cadastrousuario.html'>
            <script type=\"text/javascript\">
                alert(\"A senha digitada não é igual a confirmada!\");
            </script>"; 
	header("Location: fcadastrousuario.php");
	header("Location: cadastrousuario.php?erro=1");
	exit;
}

/*
if(!$nomeusuario || !$senha || !$confirmasenha || !$email){
	header("Location: login.php?erro=0");
	exit;
}*/

/*$sql = "SELECT idusuario FROM usuario WHERE email = '$email'";*/
$usuario = executar_SQL("SELECT idusuario FROM usuario WHERE email = '$email'");


if(!verifica_resultado($usuario)){
	
	libera_consulta($usuario);
   
	/*$sql = "INSERT INTO usuario(nomeusuario, email, senha) VALUES ('$nomeusuario', '$email', '$senha')"
	$usuario = executar_SQL($sql);*/
	$inserir = executar_SQL("INSERT INTO usuario (nomeusuario, email, senha) VALUES ('$nomeusuario', '$email', '$senha')");
}
else{
	header("Location: cadastrousuario.php?erro=2");
	exit;
}


echo "<META HTTP-EQUIV=REFRESH CONTENT='0;URL=../html/usuario.php'>
            <script type=\"text/javascript\">
                alert(\"Usuário Cadastrado com Sucesso!\");
            </script>"; 
			
?>
