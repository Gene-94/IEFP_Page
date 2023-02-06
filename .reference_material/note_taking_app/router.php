<?php

$routes = require('routes.php');


function route($uri, $routes){
    if(array_key_exists($uri, $routes)) {
        return (require $routes[$uri]);
    } else {
        status_err(404);
    }
}

function status_err($err_code) {
    http_response_code($err_code);
    
    require "views/service/$err_code.php";
    
    die();
}


$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

route($uri, $routes);


// dd($uri);