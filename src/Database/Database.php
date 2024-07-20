<?php

require 'config.php';

function getDatabase() {
    $dsn = "mysql:host=" .DB_HOST . ";dbname=" . DB_SCH ; 
    return new PDO($dsn, DB_USER, DB_PASS);
}