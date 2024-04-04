<?php


session_start();

include ('base.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

$cliente_id = isset($_POST["tf_cliente_id"]) ? intval($_POST["tf_cliente_id"]) : 0;
$nome = isset($_POST["tf_nome"]) ? trim($_POST["tf_nome"]) : '';
$email = isset($_POST["tf_email"]) ? trim($_POST["tf_email"]) : '';

if ($cliente_id > 0) {
        
        $sql = "UPDATE clientes SET nome = '$nome', email = '$email' WHERE id = $cliente_id";
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
echo "<META HTTP-EQUIV=REFRESH CONTENT='0;URL=../html/clientes.php'>
        <script type=\"text/javascript\">
            alert(\"Dados do Cliente Alterados com Sucesso!\");
        </script>";
		







/*if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    if (isset($_POST["cliente_id"]) && is_numeric($_POST["cliente_id"])) {
        $cliente_id = $_POST["cliente_id"];
        $novo_nome = $_POST["tf_nome"];
        $novo_email = $_POST["tf_email"];

        
        $servername = "localhost";
        $username = "root";
        $password = "vertrigo";
        $dbname = "bdcatcookie";

        $conn = new mysqli($servername, $username, $password, $dbname);

        
        if ($conn->connect_error) {
            die("Erro na conexão com o banco de dados: " . $conn->connect_error);
        }

       
        $sql = "UPDATE clientes SET nome = '$novo_nome', email = '$novo_email' WHERE id = $cliente_id";

        if ($conn->query($sql) === TRUE) {
           
            header("Location: cliente.html");
            exit;
        } else {
            echo "Erro na atualização: " . $conn->error;
        }

        $conn->close();
    } else {
        echo "ID do cliente inválido.";
    }
} else {
    echo "Acesso inválido ao script.";
}*/
}
?>
