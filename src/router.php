<?php
$routes = require('routes.php');
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];





function controllerToView($routes, $uri){
    if( array_key_exists($uri, $routes)){
        loadController($routes[$uri]);
    }
    else {
        abort();
    }
}

function abort(){
    http_response_code(404);
    die();
}

controllerToView($routes, $uri);