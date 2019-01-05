<?php require('partials/head.php'); ?>

    <h1>Home Page</h1>
    
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

<?php require('partials/footer.php'); ?>