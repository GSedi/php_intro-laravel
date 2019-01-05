<?php

require 'core/Task.php';
$query = require 'bootstrap.php';

$tasks = $query->selectAll('todos', 'Task');

require 'index.view.php';


// require 'database/Connection.php';
// require 'database/QueryBuilder.php';

// --------------------------------------

// $pdo = Connection::make();
// $query = new QueryBuilder($pdo);

// -------------------------------------


//  MAPPER
// $tasks = array_map(function ($task){

//     $t = new Task();
//     $t->description = $task->description;
//     etc.........
    

// }, $tasks);