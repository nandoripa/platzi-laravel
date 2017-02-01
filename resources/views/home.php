<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Platzi blog in PHP</title>
</head>
<body>
    <ul>
        <?php   /** @type \PlatziPHP\Post[] $posts 
                    @type \PlatziPHP\Post $firstPost
                */
        foreach ($posts as $post): ?>
            <li>
                <h2><?= $post->getTitle() ?></h2>
                <small><?= $post->getAuthor() ?></small>
                <?php if($post == $firstPost): ?>
                    <p><?= $post->getBody() ?></p>
                <?php else: ?>
                    <p>Summary...</p>
                <?php endif; ?>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>