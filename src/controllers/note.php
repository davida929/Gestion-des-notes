<?php
session_start();

$title = "Note";
if (!isset($_SESSION['id'])) {
    header("Location: /login");
    exit();
}

require_once 'view/enseignant/note.view.php';