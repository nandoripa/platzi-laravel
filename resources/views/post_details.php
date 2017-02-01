<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Platzi blog in PHP</title>
</head>
<body>
    <ul>
        <?php   /**@type \PlatziPHP\Post $post
                */
        ?>
            <h1><?= $post->getTitle() ?></h1>
            <small><?= $post->getAuthor() ?></small>
            <p><?= $post->getBody() ?></p>
</body>
</html>