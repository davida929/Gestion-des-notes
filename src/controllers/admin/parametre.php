<?php
session_start();
if (!isset($_SESSION['admin_auth'])) {
    header("Location: /admin/login");
    exit();
}
$title = "Parametre" ;

require_once 'view/admin/parametre.view.php';