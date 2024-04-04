<?php

session_start();

include ('base.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

$cliente_id = isset($_POST["tf_cliente_id"]) ? intval($_POST["tf_cliente_id"]) : 0;

if ($cliente_id > 0) {
        
        $sql = "DELETE FROM clientes WHERE id = $cliente_id";
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
            alert(\"Cliente Excluido com Sucesso!\");
        </script>";
		


/*{
    
    $servername = "localhost";
    $username = "root";
    $password = "vertrigo";
    $dbname = "bdcatcookie";

    $conn = new mysqli($servername, $username, $password, $dbname);

   
    if ($conn->connect_error) {
        die("Falha na conexão com o banco de dados: " . $conn->connect_error);
    }

   
    

    if ($cliente_id > 0) {
        
        $sql = "DELETE FROM clientes WHERE id = $cliente_id";

        if ($conn->query($sql) === TRUE) {
            
            header("Location: telainicial.html");
            exit;
        } else {
            
            echo "Erro ao excluir o cliente: " . $conn->error;
        }
    } else {
        
        echo "ID de cliente inválido.";
    }

    
    $conn->close();
}*/
	}
?>

