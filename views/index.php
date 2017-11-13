<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home :: PHP Basics</title>
</head>
<body>
    <?php require 'views/layouts/nav.php' ?>

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
</body>
</html>