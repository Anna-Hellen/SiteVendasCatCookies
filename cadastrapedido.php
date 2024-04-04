 <?php


session_start();

include ('base.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   
   
    $nomeCliente = isset($_POST["tf_nomecliente"]) ? trim($_POST["tf_nomecliente"]) : '';
    $idProduto = isset($_POST["tf_idproduto"]) ? intval($_POST["tf_idproduto"]) : 0;
	/*$nomeProduto = isset($_POST["tf_nomecliente"]) ? trim($_POST["tf_nomecliente"]) : '';*/
    $quantidade = isset($_POST["tf_quantidade"]) ? intval($_POST["tf_quantidade"]) : 0;
	$data = isset($_POST["tf_datapedido"]) ? $_POST["tf_datapedido"] : "";

    
    if (empty($nomeCliente) || $idProduto <= 0 || $quantidade <= 0) {
        header("Location: cadastrousuario.php?erro=1");
        exit;
    }
	
	//$usuario = executar_SQL("INSERT INTO produto (nomeproduto, descricaoproduto, precoproduto, quantidadeproduto, imagemproduto) VALUES ('$nomeproduto', '$descricaoproduto', $precoproduto, $quantidadeproduto, '$imagemproduto')");
 $sql = "INSERT INTO pedidos (nomeCliente, idProduto, quantidade, data) VALUES ('$nomeCliente', $idProduto,$quantidade,'$data' )";
//echo $sql . "<br>";
$usuario = executar_SQL($sql);
echo "<META HTTP-EQUIV=REFRESH CONTENT='0;URL=../html/pedidos.php'>
        <script type=\"text/javascript\">
            alert(\"Pedido Cadastrado com Sucesso!\");
        </script>";


/*session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
   
    $nomeCliente = isset($_POST["tf_nomecliente"]) ? addslashes(trim($_POST["tf_nomecliente"])) : "";
    $idProduto = isset($_POST["tf_idproduto"]) ? intval($_POST["tf_idproduto"]) : 0;
    $quantidade = isset($_POST["tf_quantidade"]) ? intval($_POST["tf_quantidade"]) : 0;

   
    if (empty($nomeCliente) || $idProduto <= 0 || $quantidade <= 0) {
        echo "Por favor, preencha todos os campos obrigatórios.";
        exit;
    }

    try {
     
        $host = "localhost";
        $db = "bdcatcookie";
        $usuario = "root";
        $senha = "vertrigo";

      
        $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $usuario, $senha);

     
        $stmt = $pdo->prepare("INSERT INTO Pedidos (nomeCliente, idProduto, quantidade) VALUES (?, ?, ?)");

    
        $stmt->execute([$nomeCliente, $idProduto, $quantidade]);

        echo "Pedido cadastrado com sucesso!";
    } catch (PDOException $e) {
        echo "Erro ao cadastrar o pedido: " . $e->getMessage();
    }
} else {
    echo "Acesso inválido. Por favor, envie o formulário corretamente.";
}*/}
?>
