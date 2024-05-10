<?php

function dd($value)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
    die();
}

function page_not_found($code = 404)
{
    http_response_code($code);
    require("views/errors/".$code.".view.php");
    die();
}

function rootToController($uri, $routes){
    if (array_key_exists($uri, $routes)){
        require $routes[$uri];
    }else{
        page_not_found();
    }
}