<?php


session_start();

include ('base.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   
    $nome = isset($_POST["tf_nome"]) ? trim($_POST["tf_nome"]) : '';
    $email = isset($_POST["tf_email"]) ? trim($_POST["tf_email"]) : '';
  

    if (empty($nome) || empty($email)) {
        header("Location: cadastrousuario.php?erro=1");
        exit;
    }
	//$usuario = executar_SQL("INSERT INTO produto (nomeproduto, descricaoproduto, precoproduto, quantidadeproduto, imagemproduto) VALUES ('$nomeproduto', '$descricaoproduto', $precoproduto, $quantidadeproduto, '$imagemproduto')");
$sql = "INSERT INTO clientes (nome, email) VALUES ('$nome', '$email')";
//echo $sql . "<br>";
$usuario = executar_SQL($sql);
echo "<META HTTP-EQUIV=REFRESH CONTENT='0;URL=../html/clientes.php'>
        <script type=\"text/javascript\">
            alert(\"Cliente Cadastrado com Sucesso!\");
        </script>";
		





/*session_start();


include "base.php";


$nome = isset($_POST["tf_nome"]) ? addslashes(trim($_POST["tf_nome"])) : "";
$email = isset($_POST["tf_email"]) ? addslashes(trim($_POST["tf_email"]) ): "";


if (empty($nome) || empty($email)) {
    echo "Nome e E-mail são campos obrigatórios.";
} else {
    
    $query = "SELECT id FROM clientes WHERE email = '$email'";
    $result = mysqli_query($conexao, $query);

    if (mysqli_num_rows($result) > 0) {
        echo "Já existe um cliente com esse e-mail no sistema.";
    } else {
      
        $inserir = "INSERT INTO clientes (nome, email) VALUES ('$nome', '$email')";
        if (mysqli_query($conexao, $inserir)) {
            echo "Cliente cadastrado com sucesso!";
        } else {
            echo "Erro ao cadastrar o cliente: " . mysqli_error($conexao);
        }
    }
}


mysqli_close($conexao);*/
}
?>
