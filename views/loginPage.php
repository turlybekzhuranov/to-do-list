<?php
    ob_start();

    require '../models/login.php';
    require 'header.php';

?>
<div class="container" style="margin-top: 50px;">
    <p>Введите логин и пароль для авторизации</p>
    <p style="color: red;"><?php echo $incorrectInfo; ?></p>
        <form action="/views/loginPage.php" method="post">
            <div class="form-group">
                <div class="form-row">
                    <div class="col-md-6">
                            <input class="form-control" type="text" name="userName" placeholder="Логин" required>

                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="form-row">
                    <div class="col-md-6">
                            <input class="form-control" type="password" name="password" placeholder="Пароль" required>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="form-row">
                    <div class="col-auto">
                        <input class="btn btn-primary" type="submit" name="login" value="Вход">
                    </div>
                </div>
            </div>
        </form>
</div>

<?php
    require 'footer.php';