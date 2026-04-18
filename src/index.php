<!DOCTYPE html>
 <html>
 <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Aeroporto</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
 </head>
 <body>

<nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">VoeBem</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Funcionários
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?page=cadastrar-funcionario">Cadastrar</a></li>
            <li><a class="dropdown-item" href="?page=listar-funcionario">Listar</a>
            </li>
          </ul>
        </li>
       <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Passageiros
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?page=cadastrar-passageiro">Cadastrar</a></li>
            <li><a class="dropdown-item" href="?page=listar-passageiro">Listar</a>
            </li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Aviões
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?page=cadastrar-aviao">Cadastrar</a></li>
            <li><a class="dropdown-item" href="?page=listar-aviao">Listar</a>
            </li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Viagens
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?page=cadastrar-viagem">Cadastrar</a></li>
            <li><a class="dropdown-item" href="?page=listar-viagem">Listar</a>
            </li>
          </ul>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
 
 <div class="container mt-3">
     <div class="row">
         <div class="col">
             <?php

             include('config.php');
                switch (@$_REQUEST['page']) {
                    //funcionario
                    case 'cadastrar-funcionario':
                        include('cadastrar-funcionario.php');
                        break;
                    case 'listar-funcionario':
                        include('listar-funcionario.php');
                        break;
                    case 'editar-funcionario':
                        include('editar-funcionario.php');
                        break;
                    case 'salvar-funcionario':
                        include('salvar-funcionario.php');
                        break;

                        //passageiro
                    case 'cadastrar-passageiro':
                        include('cadastrar-passageiro.php');
                        break;
                    case 'listar-passageiro':
                        include('listar-passageiro.php');
                        break;
                    case 'editar-passageiro':
                        include('editar-passageiro.php');
                        break;
                    case 'salvar-passageiro':
                        include('salvar-passageiro.php');
                        break;

                        //aviao
                    case 'cadastrar-aviao':
                        include('cadastrar-aviao.php');
                        break;
                    case 'listar-aviao':
                        include('listar-aviao.php');
                        break;
                    case 'editar-aviao':
                        include('editar-aviao.php');
                        break;
                    case 'salvar-aviao':
                        include('salvar-aviao.php');
                        break;

                     //viagem
                    case 'cadastrar-viagem':
                        include('cadastrar-viagem.php');
                        break;
                    case 'listar-viagem':
                        include('listar-viagem.php');
                        break;
                    case 'editar-viagem':
                        include('editar-viagem.php');
                        break;
                    case 'salvar-viagem':
                        include('salvar-viagem.php');
                        break;

                    default:
                        print "<h1>Seja bem vindo ao sistema da VoeBem</h1>";
                }
               ?>
         </div>
     </div>
 </div>
  <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
 </body>
 </html>