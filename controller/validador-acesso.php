<?php
   session_start();
   if(isset($_SESSION['autenticado']) && ($_SESSION['autenticado'] == 'nao')){
    header('location: http://local.site/php/app-help-desk/index.php?login=erro');
  }
   if(!isset($_SESSION['autenticado']) && ($_SESSION['autenticado'] != 'sim')){
      header('location: http://local.site/php/app-help-desk/index.php?login=erro2');
   }
?>