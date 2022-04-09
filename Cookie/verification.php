<?php
session_start();
    $username = 'Arthur';
    $password = '1234';
    if($username !== "" && $password !== ""){
        if($username == "Arthur" && $password == "1234"){ // nom d'utilisateur et mot de passe correctes
            header('Location: main.php');
        }else{
            header('Location: login.php?erreur=1'); // utilisateur ou mot de passe incorrect
        }
    }else{
        header('Location: login.php?erreur=2'); // utilisateur ou mot de passe vide
    }
?>