const tbody = document.querySelector("tbody");

const listarProduto = async () => {
    const dados = await fetch("listProduto.php");
    const resposta = await dados.text();
    tbody.innerHTML = resposta;
}

listarProduto();