<?php
    require 'config/db.php';

    require 'models/sort.php';


    if (!in_array($key, $key_array)) {
        echo 'Неверный формат запроса<br>';
        echo '<a href="/">Главная страница</a>';
        exit();
    }

    $tasks = $pdo->query('SELECT * FROM `tasks` ORDER BY ' . $key . ' ' . $sort);
