<?php
    require 'models/tasks.php';

    echo '<div class="container" style="margin-top: 50px;">';
        echo '<div class="row">';
            echo '<table class="table table-bordered table-striped table-hover table-sm">';
                echo '<thead class="thead-dark">';
                    echo '<tr>
                           <th class="" style="width: 20%"><a href="/?page=' . $page . getSortURL("name") . '">Имя пользователя</a></th>
                           <th class="" style="width: 20%"><a href="/?page=' . $page  . getSortURL("email") . '">Email</a></th>
                           <th class="" style="width: 40%"><a href="/?page=' . $page  . getSortURL("text") . '">Текст</a></th>
                           <th class="" style="width: 20%"><a href="/?page=' . $page  . getSortURL("status") . '">Статус</a></th>
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
        echo '<div class="row justify-content-between">';
            if ($page > 1) {
                echo '<div class="float-left"> <a href="/?page=' . ($page - 1) . '&order_by=' . $orderBy . '&sort=' . $sort . '">&laquo; Прошлая страница</a> </div>';
            }
          else {
                echo '<div class="col-3"></div>';
            }
            if ($page < $totalPagesOfTasks) {
                echo '<div class="float-right"><a class="text-right" href="/?page=' . ($page + 1) . '&order_by=' . $orderBy . '&sort=' . $sort . '">Следующая страница  &raquo; </a></div>';
            }
            else {
                echo '<div class="col-3"></div>';
            }
        echo '</div>';
    echo '</div>';

