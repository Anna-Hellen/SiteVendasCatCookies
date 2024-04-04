<?php

session_start();

include ('base.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

$id_usuario = isset($_POST["tf_idusuario"]) ? intval($_POST["tf_idusuario"]) : 0;

if ($id_usuario > 0) {
        
        $sql = "DELETE FROM usuario WHERE idusuario = $id_usuario";
}

$usuario = executar_SQL($sql);

echo "<META HTTP-EQUIV=REFRESH CONTENT='0;URL=../html/usuario.php'>
        <script type=\"text/javascript\">
            alert(\"Usuario Excluido com Sucesso!\");
        </script>";




/*if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $servername = "localhost";
    $username = "root";
    $password = "vertrigo";
    $dbname = "bdcatcookie";

    $conn = new mysqli($servername, $username, $password, $dbname);

   
    if ($conn->connect_error) {
        die("Erro na conexão com o banco de dados: " . $conn->connect_error);
    }

   
    $nome_usuario = $_POST["tf_nomeusuario"];

    $sql = "DELETE FROM usuarios WHERE nomeusuario = '$nome_usuario'";

   
    if ($conn->query($sql) === TRUE) {
        echo "Usuário excluído com sucesso!";
    } else {
        echo "Erro ao excluir o usuário: " . $conn->error;
    }

    
    $conn->close();
}*/
}
?>
