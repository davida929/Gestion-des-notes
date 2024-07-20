<?php
session_start();
if($_SESSION['admin_auth']){
    header("Location:/admin/dashboard");
}

require 'Database/Database.php';
require 'Models/Admin.php';

$db = getDatabase();
$error = [];
if(isset($_POST['connexion'])){
    $db = getDatabase();
    $username = $_POST['username'];
    $password = $_POST['password'];
    if(empty($username) or empty($password)){
        $error[] = "Username and Password Required";
        return;
    }
    // verification de l'admin s'il est dans le bd
    $rqt = $db->prepare("SELECT id FROM admin WHERE username = ? AND password = ? ");
    $rqt->execute( array($username, $password));

    $result = $rqt->fetch(PDO::FETCH_ASSOC);
    if( $result){
        $_SESSION['admin_auth'] = true;
        header("Location:/admin/dashboard");
        return;
    }
    $error[] = "Username or password incorrect";   
}

require_once 'view/adminLogin.view.php';