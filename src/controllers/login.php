<?php

session_start();

require 'Models/Enseignant.php';

$title = "Connexion";
$isError = false;
if (isset($_POST['ok'])){
    $mail = $_POST['email'];
    $pwd = $_POST['password'];

    $e = new Enseignant();
    $result = $e->login($mail, $pwd);
    if($result){
        $full_name = $e->read($result['matr']);
        $_SESSION['id'] = $result['matr'];
        $_SESSION['full_name'] = $full_name['nom'] . " " . $full_name['prenom'];
        header("location: /home");
    } else {
        $isError = true ;
    }

}

require_once 'view/login.view.php';