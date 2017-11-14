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

<section>
    <h1>Add new Task</h1>
    <form action="/tasks" method="post">
        <textarea name="description" cols="30" rows="10"></textarea>
        <input type="submit" value="Submit">
    </form>
</section>

<?php require 'views/layouts/bottom.php' ?>