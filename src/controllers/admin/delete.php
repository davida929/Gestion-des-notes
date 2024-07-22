<?php
session_start();

require 'Models/Enseignant.php';

if (!isset($_SESSION['admin_auth'])  or !isset($_GET['id'])) {
    header("Location: /admin/login");
    exit();
}
if(isset($_GET['id'])){
    $teacher = new Enseignant();
    $mat = $_GET['id'];
    $teacher->delete($mat);
    header("location: /admin/dashboard");

}
