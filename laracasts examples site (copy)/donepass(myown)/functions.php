<?php

function dd($data){
    echo '<pre>';
    die(var_dump($data));
    echo '<?pre>';
}

function check_age($age){
    if ($age >= 21){
        return true;
    }
    else{
        return false;
    }
}

function connectToDb(){
    try{
        return new PDO('mysql:host=127.0.0.1;dbname=mytodo', 'root', '');
    }catch(PDOException $e){
        dd($e->getMessage());
    }
    
}

function fetchAllTasks($pdo){
    
    $statement = $pdo->prepare('select * from todos');
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_CLASS, 'Task');


}