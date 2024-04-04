<?php
   

session_start();

include ('base.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

	$idProduto = isset($_POST["tf_produto_id"]) ? intval($_POST["tf_produto_id"]) : 0;
	$nomeproduto = isset($_POST["tf_nomeproduto"]) ? trim($_POST["tf_nomeproduto"]) : '';
    $descricaoproduto = isset($_POST["tf_descricaoproduto"]) ? trim($_POST["tf_descricaoproduto"]) : '';
    $precoproduto = isset($_POST["tf_precoproduto"]) ? floatval($_POST["tf_precoproduto"]) : 0.0;
    $quantidadeproduto = isset($_POST["tf_quantidadeproduto"]) ? intval($_POST["tf_quantidadeproduto"]) : 0; 
    $imagemproduto = isset($_POST["tf_imagemproduto"]) ? trim($_POST["tf_imagemproduto"]) : '';

if ($idProduto > 0) {
        
        $sql = "UPDATE produto SET nomeproduto = '$nomeproduto', descricaoproduto = '$descricaoproduto', precoproduto = '$precoproduto', quantidadeproduto = $quantidadeproduto, imagemproduto = '$imagemproduto' WHERE idProduto = $idProduto";
}
       

$usuario = executar_SQL($sql);
echo "<META HTTP-EQUIV=REFRESH CONTENT='0;URL=../html/produto.php'>
        <script type=\"text/javascript\">
            alert(\"Dados do Produto Alterados com Sucesso!\");
        </script>";
		


}











/*session_start();

include ('base.php');
/*include "base.php"*/

/*if ($_SERVER['REQUEST_METHOD'] === 'POST') {

	$idProduto = isset($_POST["tf_produto_id"]) ? intval($_POST["tf_produto_id"]) : 0;
    $nomeproduto = isset($_POST["tf_nomeproduto"]) ? trim($_POST["tf_nomeproduto"]) : '';
    $descricaoproduto = isset($_POST["tf_descricaoproduto"]) ? trim($_POST["tf_descricaoproduto"]) : '';
    $precoproduto = isset($_POST["tf_precoproduto"]) ? floatval($_POST["tf_precoproduto"]) : 0.0;
    $quantidadeproduto = isset($_POST["tf_quantidadeproduto"]) ? intval($_POST["tf_quantidadeproduto"]) : 0; 
    $imagemproduto = isset($_POST["tf_imagemproduto"]) ? trim($_POST["tf_imagemproduto"]) : '';

if ($idProduto  > 0) {
        
		/*$sql = "UPDATE `produto` SET `nomeproduto` = '$nomeproduto', `descricaoproduto` = '$descricaoproduto', `precoproduto` = $precoproduto, `quantidadeproduto` = $quantidadeproduto WHERE `produto`.`idProduto` = $idProduto";*/
		
        /* $sql = "UPDATE produto SET nomeproduto = '$nomeproduto', descricaoproduto = '$descricaoproduto', precoproduto = $precoproduto, quantidadeproduto = $quantidadeproduto, imagemproduto = '$imagemproduto' WHERE idProduto = $idProduto ";
		 $usuario = executar_SQL($sql);
		 desconectar($usuario);
}                                                                                                                                                                                      /*WHERE `produto`.`idProduto` = 9;*/
        

 
/*
echo "<META HTTP-EQUIV=REFRESH CONTENT='0;URL=../html/produto.php'>
        <script type=\"text/javascript\">
            alert(\"Dados do Produto Alterados com Sucesso!\");
        </script>";

}*/
?>
