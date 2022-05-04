<?php
    
    session_start();
    $usuario_autenticado = false;


    $usuarios_app = array(
        array(
            'nome' => 'gustavo andrade',
            'email' => 'guga@gmail.com',
            'senha' => '123',
            'perfil_acesso' =>'adm'
        ),
        array(
            'nome' => 'Felipe andrade',
            'email' => 'felipe@gmail.com',
            'senha' => '456',
            'perfil_acesso' =>'user'
        ),
        array(
            'nome' => 'Maria Santana',
            'email' => 'maria@gmail.com',
            'senha' => '123456',
            'perfil_acesso' =>'estagiario'
        ),
    );


        $email =  $_POST['txtEmail'];
        $senha =  $_POST['txtSenha'];



        foreach($usuarios_app as $usuario){
            if(($usuario['email']== $email) && ($usuario['senha'] == $senha)){
                $usuario_autenticado = true ;  
                $_SESSION['perfil_acesso'] = $usuario['perfil_acesso'];      
            }
        }


        if($usuario_autenticado){
            $_SESSION['autenticado'] = 'sim';
            
            header("location: ../public/view/home.php");
        }else{
            $_SESSION['autenticado'] = 'nao';
            header('location: ../index.php?login=erro');
            
        }
?>