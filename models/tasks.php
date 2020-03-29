<?php

    if (!in_array($orderBy, $orderByArray)) {
        echo 'Неверный формат запроса<br>';
        echo '<a href="/">Главная страница</a>';
        exit();
    }

    $tasks = $pdo->query('SELECT * FROM `tasks` ORDER BY '  . $orderBy . ' ' . $sort . ' LIMIT ' . $offset . ', ' . $perPage);
