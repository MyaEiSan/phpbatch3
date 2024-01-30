<?php

// echo "Hello I am mainpage index from view";
?>

<!DOCTYPE html>
<html>
    <head>
        <title><?php echo APPNAME ?></title>
    </head>
    <body>
        <h1><?php //echo $data['greeting'] ?></h1>
        <h3><?php echo URLROOT; ?></h3>
        <h3><?php echo APPROOT; ?></h3>

        <h1><?php echo $data["title"] ?></h1>

        <ul>
            <?php foreach($data['articles'] as $article): ?>
            <li><?php echo $article->title; ?></li>
            <?php endforeach ?>
        </ul>

    </body>
</html>

