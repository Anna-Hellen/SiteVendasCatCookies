<?php
session_start();

include "base.php";

$sql = "SELECT * FROM usuario ORDER BY idusuario ASC";
$usuario = executar_SQL($sql);

/*$result_usuarios = $usuario->prepare($sql);*/


$dados = "";

while ($row_usuario = retorna_linha($usuario)) {
	/*var_dump($row_usuario);*/
	
    extract($row_usuario);
    $dados .= "<tr>
					<td>#################</td>
                    <td>$idusuario</td>
                    <td>$nomeusuario</td>
                    <td>$email</td>
					<td>$senha</td>
                    
                </tr>";
}

echo $dados;
?>
