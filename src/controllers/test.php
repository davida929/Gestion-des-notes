<?php

require 'Models/Note.php';

$e = new Note();

$e->create(9,'FSO12',12);
 var_dump($e->readAll());