<?php

session_start();


//require "/php/base.php";
include ('base.php');


$email = isset($_POST["tf_email"]) ? addslashes(trim($_POST["tf_email"])) : false;
//$senha = (strlen($_POST["tf_senha"]) > 0) ? md5(trim($_POST["tf_senha"])) : false;
$senha = (strlen($_POST["tf_senha"]) > 0) ? trim($_POST["tf_senha"]) : false;
//echo $email . "<br>";
//echo $senha . "<br>";
$usuario = executar_SQL("SELECT idusuario, nomeusuario, email FROM usuario WHERE email = '$email' AND Senha = '$senha'");


if(verifica_resultado($usuario)){
	
	$us = retorna_linha($usuario);
	
	
	libera_consulta($usuario);
	
	
	$_SESSION["sidusuario"] = $us["idusuario"];
	$_SESSION["snomeusuario"] = $us["email"];
	$_SESSION["snome"] = $us["nomeusuario"];
}

else{
	echo "<META HTTP-EQUIV=REFRESH CONTENT='0;URL=../html/login.html'>
            <script type=\"text/javascript\">
                alert(\"Usuario ou Senha Incorretos!\");
            </script>"; 
	/*header("Location: ../html/login.html?erro=0");*/
	exit;
}

// Redireciona para a página de confirmação de Login (Dashboard)
echo "<META HTTP-EQUIV=REFRESH CONTENT='0;URL=../html/telainicial.html'>
            <script type=\"text/javascript\">
                alert(\"Login Efetuado com Sucesso!\");
            </script>"; 

?>