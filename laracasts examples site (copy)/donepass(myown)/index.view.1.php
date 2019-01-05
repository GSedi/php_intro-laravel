<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
</head>
<body>
    
    <ul>
        <?php foreach($tasks as $task) : ?>
            <li>
                <?php if($task->isComplete()) : ?>
                    <strike>
                        <?= $task ?>
                    </strike>
                <?php else : ?>
                     <?= $task ?>   
                <?php endif; ?>
            </li>
        <?php endforeach; ?>
    </ul>

</body>
</html>

<!-- Variables -->
<!-- <?php
    // $greeting = "Hello world!";
    $greeting = 'Hello';
    $name = 'Sedi';
    echo $greeting . ', ' . $name;
    echo "$greeting, $name"
    ?> -->
<!-- <?= "Hello, World!!!"?> -->

<!-- Variable(cont.) -->
<!-- <style>
        header{
            background: #e3e3e3;
            padding: 2em;
            text-align: center;
        }


    </style> -->
<!-- <header>
        <h1>
            <?php
                // $name = $_GET['name'];

                echo "Hello," . htmlspecialchars($name);
            ?>
        </h1>
    </header> -->

<!-- Arrays -->
<!-- <ul>
        <?php foreach($names as $name) : ?>

            <li><?= $name ?></li>
        
        <?php endforeach;?>

        <?php 
            foreach($names as $name){
                echo "<li>$name</li>";
            }
        ?>

    </ul> -->

<!-- Associative arrays -->
<!-- <ul>
        <?php foreach ($person as $key => $value) : ?>
            <li>
                <strong><?= $key ?></strong> <?= $value ?>
            </li>
        <?php endforeach; ?>
    </ul> -->



<!-- Booleans -->
<!-- <h1>Task For The Day</h1>

<ul>
    <li>
        <strong>Name: </strong><?= $task['title']?>
    </li>
    <li>
        <strong>Due Date: </strong><?= $task['due']?>
    </li>
    <li>
        <strong>Person Responsible: </strong><?= $task['assigned_to']?>
    </li>
    <li>
        true ? 'do something' : 'do something else'
        <strong>Status: </strong><?= $task['completed'] ? 'Complete' : 'Incomplete' ?>
    </li>
</ul>

<ul>

    <?php foreach ($task as $key => $value) : ?>
        <li>
            <strong>
                <?= ucwords($key); ?>:
            </strong>
            <?= $value; ?>
        </li>
    <?php endforeach; ?>

</ul> -->

<!-- COnditionals -->
<!-- <h1>Task For The Day</h1>

<ul>
    <li>
        <strong>Name: </strong><?= $task['title']?>
    </li>
    <li>
        <strong>Due Date: </strong><?= $task['due']?>
    </li>
    <li>
        <strong>Person Responsible: </strong><?= $task['assigned_to']?>
    </li>
    <li>
        <strong>Status: </strong>

        <?php if(task['completed']) : ?>

            <span class='icon'>  &#9989</span>

        <?php else : ?>

            <span class='icon'> Incomplete</span>

        <?php endif; ?>

        <?php 
            if($task['completed']){
                echo '&#9989';                    
            }
            else{
                echo 'Incomplete';
            }
        ?>
    </li>
</ul> -->
