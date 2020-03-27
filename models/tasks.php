<?php
    require 'config/db.php';

    $tasks = $pdo->query('SELECT * FROM `tasks` ORDER BY `id` DESC');