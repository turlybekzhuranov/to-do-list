<?php
    require 'config/db.php';

    $perPage = 3;
    $page = 1;

    if ( isset($_GET['page']) ){
        $page = (int) $_GET['page'];
    }

    $totalCountOfTasks = $pdo->query('SELECT COUNT(`id`) FROM `tasks`')->fetchColumn();
    $totalPagesOfTasks = ceil($totalCountOfTasks / $perPage);

    if ( $page < 1 || $page > $totalPagesOfTasks) {
        $page = 1;
    }
    $offset = $page * $perPage - $perPage;

