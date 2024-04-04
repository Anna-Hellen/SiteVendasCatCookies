<?php

session_start();

include ('base.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

$pedido_id = isset($_POST["tf_pedido_id"]) ? intval($_POST["tf_pedido_id"]) : 0;

if ($pedido_id > 0) {
        
        $sql = "DELETE FROM pedidos WHERE id = $pedido_id";
}

$usuario = executar_SQL($sql);

echo "<META HTTP-EQUIV=REFRESH CONTENT='0;URL=../html/pedidos.php'>
        <script type=\"text/javascript\">
            alert(\"Pedido Excluido com Sucesso!\");
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

  
    $pedido_id = $_POST["tf_pedido_id"];

   
    $sql = "DELETE FROM pedidos WHERE id = $pedido_id";

   
    if ($conn->query($sql) === TRUE) {
        echo "Pedido excluído com sucesso!";
    } else {
        echo "Erro ao excluir o pedido: " . $conn->error;
    }

   
    $conn->close();
	}*/
	}
?>
