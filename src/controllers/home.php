<?php
session_start();
if (!isset($_SESSION['id'])) {
    header("Location: /login");
    exit();
}

require 'Models/Devoir.php';
$d = new Devoir();
$ens_id = $_SESSION['id'];
if(isset($_POST['ok'])){
    $nom_ds = $_POST['nom_ds'];
    $niveau = $_POST['niveau'];
    $classe = $_POST['classe'];
    $date_ds = $_POST['date_ds'];

    // verification s'il y en a des case vide 

    $d->create($ens_id, $nom_ds,$classe , $date_ds, $niveau);
}

$all_level = $d->getLevel($ens_id);
$devoirs = [];
foreach($all_level AS $level){
    $key = $level['niveu'];
    $devoirs[$key] = $d->getAllbyLevel($ens_id, $key);
}

$title = "Acceuil";
// foreach($all_level AS $level){
//     $key = $level['niveu'];
//     var_dump($devoirs[$key]) ;
// }

require_once 'view/enseignant/home.view.php';