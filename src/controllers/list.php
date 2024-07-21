<?php
session_start();

if (!isset($_SESSION['id'])) {
    header("Location: /login");
    exit();
}
$title = "Genie Info G1";

require_once 'view/enseignant/list.view.php';