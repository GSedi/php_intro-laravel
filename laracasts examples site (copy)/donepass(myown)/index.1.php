<?php

require 'functions.php';

class Task {
    protected $description;
    protected $completed = false;

    public function __construct($description)
    {
        $this->description = $description;
    }

    public function isComplete()
    {
        return $this->completed;        
    }

    public function complete()
    {
        $this->completed = true;
    }

    public function __toString()
    {
        return $this->description;
    }
}

$task = new Task('Go to the university');

//$task->description;  call public property of class
// dd($task);

// $task->complete();
// dd($task->isComplete());

$tasks = [
    new Task('Go to the store'),
    new Task('finish my screencast'),
    new Task('Clean my room')
];

$tasks[0]->complete();

// dd($tasks);

// ---------------------------------------------------MySQL---------------------
// mysql
// show databases
// show tables
// use database
// create table
// insert into  table


// --------------------------------------------------FUnctions-------------------------
// if(check_age(21)){
//     echo 'Common in';
// }
// else{
//     echo 'You no old enough(';
// }

// function dd($data){
//     echo '<pre>';
//     die(var_dump($data));
//     echo '<?pre>';
// }

// $animals = ['dog', 'cat'];

// dd('Hello World');
// dd($animals);



// -----------------Booleans, Conditionals ------------------------------------
// $task = [

//     'title' => 'Finish homework',
//     'due' => 'today',
//     'assigned_to' => 'Jeffrey',
//     'completed' => false

// ];

    
// ----------------------Associative araays------------------
// $person = [
//     'age' => 31,
//     'hair' => 'brown',
//     'career' => 'web developer'
// ];

// $person['name'] = 'Jeffrey';
// unset($person['age']);

// echo $person['age'];
// echo '<pre>';
// var_dump($person);
// echo '</pre>';

// die();
// die(var_dump($person));

// -------------------------------Araays-------------------------------------------------
// $name = $_GET['name'];

// $names = [
//     'Jefrey',
//     'John',
//     'Mary'
// ];

// $names[] = 'Sedi;

// foreach ($names as $name) {
//     echo $name . ', ';
// }

require 'index.view(1).php';