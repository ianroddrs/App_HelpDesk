<?php

    // $_GET['email'];
    // $_GET['senha'];

    // print_r($_GET);
    // echo '<br>';
    // print_r($_POST);

    session_start();

    $usuario_autenticado = false;

    $usuarios_app = array(
        array('email' => 'adm@teste.com.br', 'senha' => '12345'),
        array('email' => 'teste@teste.com', 'senha' => 'testeteste')
    );

    foreach($usuarios_app as $user){
        if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
            $usuario_autenticado = true;
        }
    }

    if($usuario_autenticado){
        $_SESSION['autenticado'] = true;
        header('location: home.php?');
    }else{
        $_SESSION['autenticado'] = false;
        header('location: index.php?login=erro');
    }
?>