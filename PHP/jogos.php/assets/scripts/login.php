<?php

    session_start();

    $email_cadastrado = $_SESSION['email'];
    $senha_cadastrado = $_SESSION['senha'];

    $email = $_REQUEST['email'];
    $senha = $_REQUEST['senha'];

        if($senha == $senha_cadastrado && $email == $email_cadastrado){
            echo "Logado com sucesso!";
        }
        else{
            echo "Senha ou login incorreto! Tente novamente";
        }
?>