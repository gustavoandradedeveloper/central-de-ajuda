<?php
   session_start();
   if(isset($_SESSION['autenticado']) && ($_SESSION['autenticado'] == 'nao')){
    header('location: http://local.site/meus-projetos/central-de-ajuda/index.php?login=erro');
  }
   if(!isset($_SESSION['autenticado']) && ($_SESSION['autenticado'] != 'sim')){
      header('location: http://local.site/meus-projetos/central-de-ajuda/index.php?login=erro2');
   }
?>