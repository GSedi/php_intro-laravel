<?php require('partials/head.php'); ?>

    <h1>Submit your name</h1>

    <!-- <form action="/names" method="GET"> -->
    <form action="/names" method="POST">

        <input type="text" name="name">

        <button type="submit">Submit</button>

    </form>

    <ul>
    <?php foreach($users as $user) : ?>
            <li>
                
                <?= $user; ?>
                
            </li>
        <?php endforeach; ?>
    </ul>

<?php require('partials/footer.php'); ?>
 

<!-- <h1>Home Page</h1>

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
    </ul> -->
