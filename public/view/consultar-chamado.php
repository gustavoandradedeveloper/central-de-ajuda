<?php
  require_once('../../controller/validador-acesso.php');
  if(isset($_SESSION['perfil_acesso']) && ($_SESSION['perfil_acesso'] == 'estagiario')){
    header('location: http://local.site/meus-projetos/public/view/home.php');
 } 
?>
<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk | Consultar Chamado</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      .card-consultar-chamado {
        padding: 30px 0 0 0;
        width: 100%;
        margin: 0 auto;
      }
    </style>
  </head>

  <body>
    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="../view/home.php">
        <img src="../../assets/img/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        App Help Desk | <?=  $_SESSION['perfil_acesso']?>
      </a>
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="../../controller/logoff.php">Sair</a>
        </li>
      </ul>
    </nav>

    <div class="container">    
      <div class="row">

        <div class="card-consultar-chamado">
          <div class="card">
            <div class="card-header">
              Consulta de chamado
            </div>
            
            <div class="card-body">
              
              <div class="card mb-3 bg-light">
                <div class="card-body">
                  <h5 class="card-title">Título do chamado...</h5>
                  <h6 class="card-subtitle mb-2 text-muted">Categoria</h6>
                  <p class="card-text">Descrição do chamado...</p>

                </div>
              </div>      
              <div class="card mb-3 bg-light">
                <div class="card-body">
                  <h5 class="card-title">Título do chamado...</h5>
                  <h6 class="card-subtitle mb-2 text-muted">Categoria</h6>
                  <p class="card-text">Descrição do chamado...</p>
                </div>
              </div>
              <div class="row mt-5">
                <div class="col-6">
                  <a href="../view/home.php" class="btn btn-lg btn-warning btn-block" type="submit">Voltar</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>