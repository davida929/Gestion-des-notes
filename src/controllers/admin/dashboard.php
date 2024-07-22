<?php
session_start();
require 'Models/Enseignant.php';

$title = "Dashboard" ;

$teacher = new Enseignant();

$total_teacher = $teacher->count()['n'];

if (!isset($_SESSION['admin_auth'])) {
    header("Location: /admin/login");
    exit();
}

$list_teacher = $teacher->fetch_between(1,5);
require_once 'view/admin/dashboard.view.php';