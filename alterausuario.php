<?php

session_start();

include ('base.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

$id_usuario = isset($_POST["tf_idusuario"]) ? intval($_POST["tf_idusuario"]) : 0;
$nomeusuario = isset($_POST["tf_nome"]) ? addslashes(trim($_POST["tf_nome"])) : false;
$email = isset($_POST["tf_nomeusuario"]) ? addslashes(trim($_POST["tf_nomeusuario"])) : false;
$senha = (strlen($_POST["tf_senha"]) > 0) ? md5(trim($_POST["tf_senha"])) : false;

if ($id_usuario > 0) {
        
        $sql = "UPDATE usuario SET nomeusuario = '$nomeusuario', email = '$email', senha = '$senha' WHERE idusuario = $id_usuario";
}
        /*if ($conn->query($sql) === TRUE) {
            
            header("Location: telainicial.html");
            exit;
        } else {
            
            echo "Erro ao excluir o cliente: " . $conn->error;
        }
    } else {
        
        echo "ID de cliente inválido.";
    */

$usuario = executar_SQL($sql);
echo "<META HTTP-EQUIV=REFRESH CONTENT='0;URL=../html/usuario.php'>
        <script type=\"text/javascript\">
            alert(\"Dados do Usuario Alterados com Sucesso!\");
        </script>";


/*if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $servername = "localhost";
    $username = "root";
    $password = "vertrigo";
    $dbname = "bdcatcookie";

    
    $conexao = new mysqli($servidor, $usuario, $senha, $banco);

   
    if ($conexao->connect_error) {
        die("Erro na conexão com o banco de dados: " . $conexao->connect_error);
    }

    
    $nome = $_POST["tf_nome"];
    $nomeUsuario = $_POST["tf_nomeusuario"];
    $email = $_POST["tf_email"];
    $senha = $_POST["tf_senha"];

    
    $sql = "UPDATE usuarios SET nome = ?, nomeusuario = ?, email = ?, senha = ? WHERE idusuario = ?";

   
    $stmt = $conexao->prepare($sql);

    if ($stmt) {
    
        $stmt->bind_param("ssssi", $nome, $nomeUsuario, $email, $senha, $idDoUsuario);

        
        $idDoUsuario = 1; 
        $stmt->execute();

        if ($stmt->affected_rows > 0) {
            echo "Usuário atualizado com sucesso!";
        } else {
            echo "Nenhum registro atualizado. Verifique os dados.";
        }

        $stmt->close();
    } else {
        echo "Erro na preparação da consulta: " . $conexao->error;
    }

   
    $conexao->close();
} else {
  
    header("Location: telainicial.html");
    exit();
}*/
}
?>
