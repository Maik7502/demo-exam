<?php
require_once "db/db.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Мой не сам <?php echo $pagetitle ?></title>
    <link rel='icon' href='images/screen-7.jpg'>
    <link rel='stylesheet' href='style/style.css'>
</head>

<body>
<header> 
        <img src='images/screen-7.jpg' alt='логотип'>
        <h1>Мой не сам</h1>
    </header>

    <nav>
        <a href="/demo-exam/moy_ne_sam">Авторизация</a>
        <a href="/demo-exam/moy_ne_sam/zaivka.php">Заявки</a>
        <a href="/demo-exam/moy_ne_sam/admin.php">Админ-панель</a>
        <a href="/demo-exam/moy_ne_sam/registration.php">Регистрация</a>
        <a href="/demo-exam/moy_ne_sam/create-zayavka.php">Создание заявки</a>
    </nav>

    <main>
        <h1>
            <?php
            echo $pagetitle;
            ?>
        </h1>
        <div class="content">
            <?php
            echo $pagecontent ?? "";
            ?>
        </div>
        <footer>
            <h3>2025</h3>
        <footer>
    </main>

<script src="script/script.js"></script>
</body>
</html>