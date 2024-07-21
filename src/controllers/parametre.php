<?php
session_start();

$title = "Parametre";
if (!isset($_SESSION['id'])) {
    header("Location: /login");
    exit();
}

require_once 'view/enseignant/parametre.view.php';