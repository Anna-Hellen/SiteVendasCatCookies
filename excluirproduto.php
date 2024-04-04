<?php

session_start();

include ('base.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

$produto_id = isset($_POST["tf_produto_id"]) ? intval($_POST["tf_produto_id"]) : 0;

if ($produto_id > 0) {
        
        $sql = "DELETE FROM produto WHERE idproduto = $produto_id";
}

$usuario = executar_SQL($sql);

echo "<META HTTP-EQUIV=REFRESH CONTENT='0;URL=../html/produto.php'>
        <script type=\"text/javascript\">
            alert(\"Produto Excluido com Sucesso!\");
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

    
    $produto_id = $_POST["tf_produto_id"];

   
    $sql = "DELETE FROM produtos WHERE idproduto = $produto_id";

   
    if ($conn->query($sql) === TRUE) {
        echo "Produto excluído com sucesso!";
    } else {
        echo "Erro ao excluir o produto: " . $conn->error;
    }

   
    $conn->close();
}*/
}
?>
