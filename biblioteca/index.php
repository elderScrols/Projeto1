<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sistema de biblioteca</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-expand-lg bg-dark"
	data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Biblioteca</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
       
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Atendente
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?page=atendente-cadastrar">Cadastrar</a></li>
            <li><a class="dropdown-item" href="?page=atendente-listar">Listar</a></li>
           
          </ul>
        </li><li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Usuário
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?page=atendente-cadastrar">Cadastrar</a></li>
            <li><a class="dropdown-item" href="?page=atendente-listar">Listar</a></li>
           
          </ul>
        </li><li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Categoria
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?page=atendente-cadastrar">Cadastrar</a></li>
            <li><a class="dropdown-item" href="?page=atendente-listar">Listar</a></li>
           
          </ul>
        </li><li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            livro
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?page=atendente-cadastrar">Cadastrar</a></li>
            <li><a class="dropdown-item" href="?page=atendente-listar">Listar</a></li>
           
          </ul>
        </li><li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Empréstimos
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?page=atendente-cadastrar">Cadastrar</a></li>
            <li><a class="dropdown-item" href="?page=atendente-listar">Listar</a></li>
           
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
	<div class="container">
		<div class="row mt-3">
			<div class="col-lg-12">
				<?php
					switch (@$_REQUEST['page']) {
						//atendente
						case 'atendente-cadastrar':
							include('atendente-cadastrar.php');
							break;
							case 'atendente-listar':
							include('atendente-listar.php');
							break;
							case 'atendente-editar':
							include('atendente-editar.php');
							break;
							case 'atendente-salvar':
							include('atendente-salvar.php');
							break;

						//usuario
						case 'usuario-cadastrar':
							include('usuario-cadastrar.php');
							break;
							case 'usuario-listar':
							include('usuario-listar.php');
							break;
							case 'usuario-editar':
							include('usuario-editar.php');
							break;
							case 'usuario-salvar':
							include('usuario-salvar.php');
							break;

						//categoria
						case 'categoria-cadastrar':
							include('categoria-cadastrar.php');
							break;
							case 'categoria-listar':
							include('categoria-listar.php');
							break;
							case 'categoria-editar':
							include('categoria-editar.php');
							break;
							case 'categoria-salvar':
							include('categoria-salvar.php');
							break;

						//livro
						case 'livro-cadastrar':
							include('livro-cadastrar.php');
							break;
							case 'livro-listar':
							include('livro-listar.php');
							break;
							case 'livro-editar':
							include('livro-editar.php');
							break;
							case 'livro-salvar':
							include('livro-salvar.php');
							break;
							
						//emprestimo
						case 'emprestimo-cadastrar':
							include('emprestimo-cadastrar.php');
							break;
							case 'emprestimo-listar':
							include('emprestimo-listar.php');
							break;
							case 'emprestimo-editar':
							include('emprestimo-editar.php');
							break;
							case 'emprestimo-salvar':
							include('emprestimo-salvar.php');
							break;
						
						default:
							print "<h3> Bem-vindo ao Biblioteca</h3>";
							print "<p><em>Onde a paixão pela leitura é tecnológica<em></p>";
							break;
					}
				?>
			</div>
		</div>
	</div>


</body>
</html>