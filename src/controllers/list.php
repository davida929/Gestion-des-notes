<?php
session_start();

require_once 'Models/Etudiant.php';
require_once 'Models/Note.php';

if (!isset($_SESSION['id'])) {
    header("Location: /login");
    exit();
}
if(isset($_GET['dev_id'])){
    $_SESSION['dev_id'] = $_GET['dev_id'];
    $_SESSION['class'] = $_GET['class'];
    $_SESSION['titre'] = $_GET['titre'];
}

$title = "Genie Info G1";

$dev_id = $_SESSION['dev_id'];
$classe = $_SESSION['class'];
$name = $_SESSION['titre'];

$etudiant = new Etudiant();
$notes = new Note();



if(isset($_POST['ok'])){
    $code_massar = $_POST['code_massar'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $note = $_POST['note'];

    if($etudiant->read($code_massar)){
        var_dump("User already exits");
        // update the user in the database ... 
    }
    else {
        var_dump("User doesn't exists");
        $etudiant->create($code_massar, $nom, $prenom);
        $notes->create($dev_id, $code_massar, $note);
    }
}

$notes_all = $notes->fetchAll($dev_id); 
if(isset($_GET['ok'])){
    $search_key = $_GET['search_key'];
    $notes_all = $notes->find($dev_id, $search_key); 

}
$d_code = "";
$d_nom = "";
$d_prenom = "";
$d_note = "";
if(isset($_GET['modify'])){
    $d_code = $_GET['code_massar'];
    $d_nom = $_GET['nom'];
    $d_prenom = $_GET['prenom'];
    $d_note = $_GET['note'];
}

require_once 'view/enseignant/list.view.php';