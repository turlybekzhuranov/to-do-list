<?php
    ob_start();
?>
<div class="container">
<?php
    require '../models/login.php';
?>
    <form action="/views/loginPage.php" method="post">
        <div class="form-group">
            <div class="form-row">
                <div class="col-md-6">
                        <input class="form-control" type="text" name="userName" placeholder="Enter login" required>

                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="form-row">
                <div class="col-md-6">
                        <input class="form-control" type="password" name="password" placeholder="Enter password" required>
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