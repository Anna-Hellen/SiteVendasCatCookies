const tbody = document.querySelector("tbody");

const listarPedidos = async () => {
    const dados = await fetch("listRelatorio.php");
    const resposta = await dados.text();
    tbody.innerHTML = resposta;
}

listarPedidos();