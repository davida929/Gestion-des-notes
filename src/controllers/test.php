<?php

require 'Database/Database.php';


$database = getDatabase();

$rqt = $database->prepare("SELECT * FROM admin");
$rqt->execute();

var_dump($rqt->fetchAll());