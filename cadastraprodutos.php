<?php

session_start();

include ('base.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   
    $nomeproduto = isset($_POST["tf_nomeproduto"]) ? trim($_POST["tf_nomeproduto"]) : '';
    $descricaoproduto = isset($_POST["tf_descricaoproduto"]) ? trim($_POST["tf_descricaoproduto"]) : '';
    $precoproduto = isset($_POST["tf_precoproduto"]) ? floatval($_POST["tf_precoproduto"]) : 0.0;
    $quantidadeproduto = isset($_POST["tf_quantidadeproduto"]) ? intval($_POST["tf_quantidadeproduto"]) : 0; 
    $imagemproduto = isset($_POST["tf_imagemproduto"]) ? trim($_POST["tf_imagemproduto"]) : '';

    if (empty($nomeproduto) || empty($descricaoproduto) || $precoproduto <= 0 || $quantidadeproduto <= 0) {
        header("Location: cadastrousuario.php?erro=1");
        exit;
    }
	//$usuario = executar_SQL("INSERT INTO produto (nomeproduto, descricaoproduto, precoproduto, quantidadeproduto, imagemproduto) VALUES ('$nomeproduto', '$descricaoproduto', $precoproduto, $quantidadeproduto, '$imagemproduto')");
$sql = "INSERT INTO produto (nomeproduto, descricaoproduto, precoproduto, quantidadeproduto, imagemproduto) VALUES ('$nomeproduto', '$descricaoproduto', $precoproduto, $quantidadeproduto , '$imagemproduto')";
/*echo $sql;*/
$usuario = executar_SQL($sql);
echo "<META HTTP-EQUIV=REFRESH CONTENT='0;URL=../html/produto.php'>
        <script type=\"text/javascript\">
            alert(\"Produto Cadastrado com Sucesso!\");
        </script>";
 
}
?>