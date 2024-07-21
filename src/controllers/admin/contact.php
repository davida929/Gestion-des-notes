<?php
session_start();
if (!isset($_SESSION['admin_auth'])) {
    header("Location: /admin/login");
    exit();
}

$title = "Contact" ;
require_once 'view/admin/contact.view.php';