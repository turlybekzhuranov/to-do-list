<?php
    require 'models/tasks.php';

    echo '<div class="container">';
        echo '<table class="table table-bordered table-striped">';
            echo '<thead>';
                echo '<tr>
                       <th class="col-md-2"><a href="/sort.php?key=name&sort='. $sort . '">Имя пользователя</a></th>
                       <th class="col-md-2"><a href="/sort.php?key=email&sort=' . $sort. '">Email</a></th>
                       <th class="col-md-2"><a href="/sort.php?key=text&sort=' . $sort .'">Текст</a></th>
                       <th class="col-md-2"><a href="/sort.php?key=status&sort=' . $sort .'">Статус</a></th>
                    </tr>';
            echo '</thead>';
            echo '<tbody>';
            while ($task = $tasks->fetch(PDO::FETCH_OBJ)){
                echo '<tr>';
                    echo '<td>' . $task->name . '</td>';
                    echo '<td>' . $task->email . '</td>';
                    echo '<td>' . $task->text . '</td>';
                    echo '<td>' . $task->status . '</td>';
                 echo '</tr>';
            }
            echo '</tbody>';
        echo '</table>';
    echo '</div>';

