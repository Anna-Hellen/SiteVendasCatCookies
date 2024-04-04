<?php
session_start();

include "base.php";

$sql = "SELECT * FROM pedidos ORDER BY id ASC";
$usuario = executar_SQL($sql);

/*$result_usuarios = $usuario->prepare($sql);*/


$dados = "";

while ($row_usuario = retorna_linha($usuario)) {
	/*var_dump($row_usuario);*/
	
    extract($row_usuario);
    $dados .= "<tr>
					<td>#######</td>
                    <td>$id</td>
                    <td>$nomeCliente</td>
                    <td>$idProduto</td>
					<td>$quantidade</td>
					<td>$data</td>
                   
                </tr>";
}

echo $dados;
?>
