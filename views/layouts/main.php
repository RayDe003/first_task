<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="../../public/css/style.css">
    <title>емае ненавижу этот сайт</title>
</head>
<body>
<?php
if (app()->auth::check()):
?>
<header class="header">
    <nav class="header_nav wrapper">
        <div class="header_nav_links">
            <a class="header_nav_a" href="<?= app()->route->getUrl('/libAdd') ?>">Добавить</a>
            <!--༼ つ ◕_◕ ༽つ¯\_(ツ)_/¯¯\_(ツ)_/¯¯\_(ツ)_/¯.______.-->
            <a class="header_nav_a" href="<?= app()->route->getUrl('/login') ?>">Читатели</a>
            <a class="header_nav_a" href="<?= app()->route->getUrl('/signup') ?>">Книги </a>
            <a class="header_nav_a" href="<?= app()->route->getUrl('/signup') ?>">Выдача </a>
        </div>

            <a class="header_nav_a exit" href="<?= app()->route->getUrl('/logout') ?>">Выход(<?= app()->auth::user()->name ?>)</a>

    </nav>
</header>
        <?php
endif;
?>



<main class="wrapper">
    <?= $content ?? '' ?>
</main>

</body>
</html>
