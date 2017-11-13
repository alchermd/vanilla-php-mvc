<?php require 'views/layouts/top.php' ?>

<header>
    <h1>Tasks</h1>
    <ul>
        <?php foreach ($tasks as $task) : ?>
            <li><strong>Description</strong> - <?= $task->description; ?></li>
            <li><strong>Completed</strong> - <?= $task->isComplete() ? "&check;" : "&cross;" ?></li>
            <hr>
        <?php endforeach; ?>     
    </ul>
</header>

<?php require 'views/layouts/bottom.php' ?>