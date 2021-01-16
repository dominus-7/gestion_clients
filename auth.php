<?php
    session_start();
    $login = $_GET['login'];
    $password = $_GET['pass'];

    if($login == "toto" && $password == "toto"){
        $_SESSION['auth'] = $login;
        unset ($_SESSION['error']);
        header('location:sessions.php');
    }else{
        $_SESSION['error'] = 'Login ou Mot de passe incorrect';
        header('location:form.php'); 
    }