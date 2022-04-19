<?php
  require_once('../controller/validador-acesso.php');
?>
<html>
  <head>
    <meta charset="utf-8"/>
    <title>App Help Desk | Home </title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      .card-home {
        padding: 30px 0 0 0;
        width: 100%;
        margin: 0 auto;
      }
    </style>
  </head>

  <body>

    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
        <img src="http://local.site/php/app-help-desk/assets/img/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        App Help Desk | <?= $_SESSION['perfil_acesso'] ?> 
      </a>
    </nav>

    <div class="container">    
      <div class="row">

        <div class="card-home">
          <div class="card">
            <div class="card-header">
              Menu
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-6 d-flex justify-content-center">
                    <a href="http://local.site/php/app-help-desk/view/abrir-chamado.php" target="_blank" title="Abrir chamado">  
                      <img src="http://local.site/php/app-help-desk/assets/img/formulario_abrir_chamado.png" width="70" height="70">
                    </a>
                </div>
                <div class="col-6 d-flex justify-content-center">
                  <a href="http://local.site/php/app-help-desk/view/consultar-chamado.php" target="_blank" title="Consultar chamado">
                    <img src="http://local.site/php/app-help-desk/assets/img/formulario_consultar_chamado.png" width="70" height="70">
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
  </body>
</html>