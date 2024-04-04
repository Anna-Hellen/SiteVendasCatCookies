<?php
include_once "base.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Cat's Cookie Sales - Sistema de Vendas de Cookies">
  <meta name="author" content="Anna Hellen Andrade Moura">
  <meta name="generator" content="Hugo 0.104.2">
  

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  
  
  <link href="dashboard.css" rel="stylesheet">

  </style>
</head>
<body>

<header class="navbar navbar-dark sticky-top bg-pink flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="telainicial.html">Cat's Cookies Sales</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <a class="nav-link px-3" href="login.html">Sair</a>
    </div>
  </div>
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
		  <li class="nav-item">
            <a class="nav-link" href="telainicial.html"> 
              <span data-feather="file" class="align-text-bottom"></span> 
              Pagina Inicial
            </a>
          </li> 
          <li class="nav-item">
            <a class="nav-link" href="pedidos.php">
              <span data-feather="shopping-cart" class="align-text-bottom"></span>
              Pedidos
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="produto.php">
              <span data-feather="shopping-cart" class = "align-text-bottom"></span>
              Produtos
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="clientes.php">
              <span data-feather="users" class="align-text-bottom"></span>
              Clientes
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="usuario.php">
              <span data-feather="users" class="align-text-bottom"></span>
              Usuários
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="relatoriodevendas.php">
              <span data-feather="bar-chart-2" class="align-text-bottom"></span>
              Relatórios
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1>ㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤRelatórios de Vendas</h1>
      </div>
	  
      <h2 class="text-center">ㅤVeja o relatório de nossas vendas entre 26/09 e 26/10</h2>
	<!--<canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas> -->
      <div class="table-responsive">
      
	  
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">###################</th>
              <th scope="col">ID do Pedido</th>
              <th scope="col">Nome do Cliente</th>
              <th scope="col">ID do Produto</th>
              <th scope="col">Quantidade</th>
			  <th scope="col">Data</th>
            </tr>
          </thead>
          <tbody>
            
            
          </tbody>
        </table>
      </div>
    </main>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>
<script src="dashboard.js"></script>
<script src="customRelatorio.js"></script>
</body>
</html>