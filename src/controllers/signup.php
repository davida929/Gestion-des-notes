<?php
require_once 'Models/Enseignant.php';

$title = "Inscription";

if( isset($_POST['ok'])){
    // validation 
    // inscription
    $enseignant = new Enseignant();

    $enseignant->create(
        $_POST['matricule'],
        $_POST['nom'],
        $_POST['prenom'],
        $_POST['genre'],
        $_POST['dateDeNaissance'],
        $_POST['tel'],
        $_POST['email'],
        $_POST['pwd'],

    );
    header("location: /login");
}


require_once 'view/signup.view.php';