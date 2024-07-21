<?php
session_start();
if (!isset($_SESSION['admin_auth'])) {
    header("Location: /admin/login");
    exit();
}
$title = "Dashboard" ;

require_once 'view/admin/dashboard.view.php';