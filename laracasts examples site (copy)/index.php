<?php

require 'vendor/autoload.php';

// $query = require 'core/bootstrap.php';
require 'core/bootstrap.php';

// $router = new Router;
// require 'routes.php';
// $router = Router::load('routes.php');

// $_SERVER //GET available server options
// trim(string, delimetr) // remove delimetr from string
// var_dump(trim($_SERVER['REQUEST_URI'])); // get uri requested

// $uri = trim($_SERVER['REQUEST_URI'], '/');


// require $router->direct($uri);
require Router::load('routes.php')
        ->direct(/*$uri*/Request::uri(), Request::method());