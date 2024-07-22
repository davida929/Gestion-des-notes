<?php

session_start();
if (!isset($_SESSION['id'])) {
    header("Location: /login");
    exit();
}

require_once 'Models/Note.php';

$n = new Note();

$id = $_GET['id'];
$n->delete($id);
header("location: /list");