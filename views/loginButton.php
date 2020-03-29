<?php
    echo '<div class="container">';
    if ($_SESSION['login'] == 'admin') {
        echo '<a type="button" class="btn btn-primary" href="/models/logout.php">Выход</a>';
    }
    else {
        echo '<a type="button" class="btn btn-primary" href="views/loginPage.php">Администратор</a>';
    }

    echo '</div>';