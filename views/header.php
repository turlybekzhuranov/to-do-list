<!--<!DOCTYPE html>-->
<!--<html>-->
<!--<head>-->
<!--    <meta charset="UTF-8">-->
<!--    <meta name="viewport" content="width=device-width;initial-scale=1.0;">-->
<!--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">-->
<!--    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">-->
<!--</head>-->
<!--<body style="background-color: #EFF0F3">-->
<!--    <header>-->
<!--        --><?php
//            echo '<div class="container" style="margin-top: 20px">';
//            if ($_SESSION['login'] == 'admin') {
//                echo '<a type="button" class="btn btn-primary float-right" href="/models/logout.php">Выход</a>';
//            }
//            else {
//                echo '<a type="button" class="btn btn-primary float-right" href="views/loginPage.php">Администратор</a>';
//            }
//
//            echo '</div>';
//        ?>
<!--    </header>-->
<!--</body>-->
<!--</html>-->
<!---->


<?php
    session_start();
    $login = $_SESSION['login'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width;initial-scale=1.0;">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Приложение-задачник</title>
</head>
<body>
    <header class="bg-dark">
            <div class="row">
                <div class="col-10">
                    <h1 class=""><a style="text-decoration: none; color: gray; margin-left: 30px" href="/">Приложение-задачник</a></h1>
                </div>
                <div class="col-2 my-auto float-right">
                    <?php
                    if ($login == 'admin'){
                        echo '<a type="button" class="btn btn-secondary" href="/models/logout.php">Выход</a>';
                    }
                    else {
                        echo '<a type="button" class="btn btn-secondary" href="views/loginPage.php">Администратор</a>';
                    }
                    ?>

                </div>
            </div>
    </header>
</body>
</html>