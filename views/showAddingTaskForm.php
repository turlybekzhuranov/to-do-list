<div class="container" style="margin-top: 50px">
    <h3>Добавить задачу</h3>
    <div class="container" style="margin-top: 30px">

        <?php
        if ( isset($_POST['addTask']) ) {
            echo '<span style="color: green; font-weight: bold; margin-bottom: 10px; display: block;"> Ваша задача добавлена в список! </span>';
        }
        ?>
        <form method="POST" action="/?page=<?php echo $page?>&key=<?php echo $orderBy?>&sort=<?php echo $sort?>">
            <div class="form-group">
                <div class="form-row">
                    <div class="col-md-6">
                        <input class="form-control" type="text" name="name" placeholder="Name" required>
                    </div>
                    <div class="col-md-6">
                        <input class="form-control" type="email" name="email" placeholder="Email" required>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="form-row">
                    <div class="col-md-12">
                        <textarea class="form-control" name="text" placeholder="Task text ..." required></textarea>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="form-row">
                    <div class="col-auto">
                        <input class="btn btn-success" type="submit" name="addTask" value="Добавить задачу">
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>