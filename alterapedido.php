<?php

session_start();

include ('base.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

	$pedido_id = isset($_POST["tf_idpedido"]) ? intval($_POST["tf_idpedido"]) : 0;
	$nomeCliente = isset($_POST["tf_nomecliente"]) ? trim($_POST["tf_nomecliente"]) : '';
    $idProduto = isset($_POST["tf_idproduto"]) ? intval($_POST["tf_idproduto"]) : 0;
    $quantidade = isset($_POST["tf_quantidade"]) ? intval($_POST["tf_quantidade"]) : 0;
	$data = isset($_POST["tf_datapedido"]) ? $_POST["tf_datapedido"] : "";


if ($pedido_id > 0) {
        
        $sql = "UPDATE pedidos SET nomeCliente = '$nomeCliente', idProduto = $idProduto, quantidade = $quantidade, data ='$data' WHERE id = $pedido_id";
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

echo "<META HTTP-EQUIV=REFRESH CONTENT='0;URL=../html/pedidos.php'>
        <script type=\"text/javascript\">
            alert(\"Dados do Pedido Alterados com Sucesso!\");
        </script>";

/*f ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    
        $servername = "localhost";
        $username = "root";
        $password = "vertrigo";
        $dbname = "bdcatcookie";

    $conn = new mysqli($servername, $username, $password, $dbname);

    
    if ($conn->connect_error) {
        die("Erro na conexão com o banco de dados: " . $conn->connect_error);
    }

    
    $idPedido = isset($_POST["tf_idpedido"]) ? intval($_POST["tf_idpedido"]) : 0;
    $nomeCliente = isset($_POST["tf_nomecliente"]) ? $_POST["tf_nomecliente"] : "";
    $idProduto = isset($_POST["tf_idproduto"]) ? intval($_POST["tf_idproduto"]) : 0;
    $quantidade = isset($_POST["tf_quantidade"]) ? intval($_POST["tf_quantidade"]) : 0;

    
    if ($idPedido > 0) {
        $sql = "UPDATE pedidos SET nomecliente = '$nomeCliente', idproduto = $idProduto, quantidade = $quantidade WHERE id = $idPedido";

        if ($conn->query($sql) === TRUE) {
            echo "Pedido atualizado com sucesso!";
        } else {
            echo "Erro na atualização do pedido: " . $conn->error;
        }
    } else {
        echo "ID de pedido inválido.";
    }

    
    $conn->close();
}*/
}
?>
