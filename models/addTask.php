<?php

    $name =  strip_tags($_POST['name']);
    $email = $_POST['email'];
    $text = strip_tags($_POST['text']);
    $status = 'Не выполнено.';

if ( isset($_POST['addTask']) ) {
    $sql = "INSERT INTO `tasks` (`name`, `email`, `text`, `status`) VALUES (?, ?, ?, ?)";
    $query = $pdo->prepare($sql);
    $query->bindParam(1, $name);
    $query->bindParam(2, $email);
    $query->bindParam(3, $text);
    $query->bindParam(4, $status);
    $query->execute();
}
