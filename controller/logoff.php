<?php

    session_start();
    /* echo'<pre>';
    print_r($_SESSION);
    echo'</pre>'; */

    unset($_SESSION['autenticado']);
    header('location: ../index.php');
   
?>