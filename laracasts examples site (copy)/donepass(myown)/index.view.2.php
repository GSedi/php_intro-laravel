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
                        <?= $task; ?>
                    </strike>
                <?php else : ?>
                     <?= $task; ?>   
                <?php endif; ?>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>