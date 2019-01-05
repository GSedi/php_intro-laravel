<?php

// var_dump($_SERVER);
// var_dump($_REQUEST);
// var_dump($_GET);
// var_dump($_POST);

// echo "You type ". $_POST['name'];

$app['database']->insert(
    
    'users',

    [
        'name' => $_POST['name'],
    ]

);


header('Location: /');
