<?php


// $tasks = $query->selectAll('todos', 'Task');

$tasks = $app['database']->selectAll('todos', 'Task');
$users = $app['database']->selectAll('users', 'User');

require 'views/index.view.php';