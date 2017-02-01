<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Platzi blog in PHP</title>
</head>
<body>
    <ul>
        <?php foreach ($posts as $post): ?>
            <li>
                <h2><?= $post->getTitle() ?></h2>
                <p><?= $post->getBody() ?></p>
                <small><?= $post->getAuthor() ?></small>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>