<?php
session_start();
if (!isset($_SESSION['id'])) {
    header("Location: /login");
    exit();
}

$title = "Acceuil";

require_once 'view/enseignant/home.view.php';