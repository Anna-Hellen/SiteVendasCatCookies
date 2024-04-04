<?php
session_start();

include "base.php";

$sql = "SELECT * FROM produto ORDER BY idProduto ASC";
$usuario = executar_SQL($sql);

/*$result_usuarios = $usuario->prepare($sql);*/


$dados = "";

while ($row_usuario = retorna_linha($usuario)) {
	/*var_dump($row_usuario);*/
	
    extract($row_usuario);
    $dados .= "<tr>
					<td>######################</td>
                    <td>$idProduto</td>
                    <td>$nomeproduto</td>
					<td>$descricaoproduto</td>
					<td>$precoproduto</td>
					<td>$quantidadeproduto</td>
                    
                    
                </tr>";
}

echo $dados;
?>
