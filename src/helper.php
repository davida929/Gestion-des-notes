<?php

function basePath( $path ){
    return __DIR__."/$path" ;
}

function loadController( $control ) {
    require basePath( "controllers/".$control.".php" );
}

function loadView( $view ) {
    require basePath( "view/".$view.".view.php" );
}