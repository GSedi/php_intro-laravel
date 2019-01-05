<?php

require 'functions.php';
require 'Task.php';

$pdo = connectToDb();
$tasks = fetchAllTasks($pdo);

require 'index.view.php';



// try{
//     $pdo = new PDO('mysql:host=127.0.0.1;dbname=mytodo', 'root', '');
// }catch(PDOException $e){
//     dd($e->getMessage());
// }


// $statement = $pdo->prepare('select * from todos');

// $statement->execute();

// // dd($statement->fetchAll(PDO::FETCH_OBJ));

// // $tasks = $statement->fetchAll(PDO::FETCH_OBJ);

// // var_dump($results[0]->description);

// $tasks = $statement->fetchAll(PDO::FETCH_CLASS, 'Task');