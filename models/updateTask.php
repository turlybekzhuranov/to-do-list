<?php
    $id = null;
    if ( isset($_GET['id']) ){
        $id = $_GET['id'];
    }
    $editedText = $_POST['inputText'];
    if ( isset($_POST['saveText']) ){
        $status = $pdo->query('SELECT `status` FROM `tasks` WHERE `id`=' . $id)->fetchColumn();
        if ( strpos($status, 'Отредактировано администратором') !== false ) {
            $status .= ".\nОтредактировано администратором";
        }

        $sql = "UPDATE `tasks` SET `text`=?, `status`=? WHERE `id`=?";
        $query = $pdo->prepare($sql);
        $query->bindParam(1, $editedText);
        $query->bindParam(2, $status);
        $query->bindParam(3, $id);
        $query->execute();
    }

    if ( isset($_POST['done']) ){
        $sql = "UPDATE `tasks` SET `status`='Выполнено' WHERE `id`=?";
        $query = $pdo->prepare($sql);
        $query->bindParam(1, $id);
        $query->execute();
    }
