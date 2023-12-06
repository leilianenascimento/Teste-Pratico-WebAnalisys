<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <style>    
 h1{
   color: #4682b4;
    }
  label{
    color: #4682b4;
  }
  button{
    background-color: #4682b4;
           color: #fff;
           padding: 10px 10px;
           cursor: pointer;
  }
  </style>
</head>
<body>
 <h1>Controle de Usuário</h1>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
   <div class="container-fluid">
     <span class="navbar-toggler-icon"></span>
       </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
                <button class="nav-link active btn" aria-current="page" onclick="location.href='index.php'">Inicio</button>
            </li>
              <li class="nav-item">
              <button class="nav-link btn" onclick="location.href='novo-usuario.php'">Novo Usuario</button>
            </li>
            <li class="nav-item">
                        <button class="nav-link btn" onclick="location.href='listar-usuario.php'">Lista Usuario</button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col mt-5">
                <?php
                include("config.php");
                switch (@$_REQUEST["page"]) {
                    case "novo":
                        include("novo-usuario.php");
                        break;
                    case "listar":
                        include("listar-usuario.php");
                        break;
                    
                    default:
                }
                ?>
            </div>
        </div>
    </div>
</body>
</html>
