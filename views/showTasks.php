<?php
    echo '<div class="container" style="margin-top: 50px;">';
        echo '<div class="row">';
            echo '<table class="table table-bordered table-striped border-primary">';
                echo '<thead class="thead-dark">';
                    echo '<tr>
                           <th class="" style="width: 15%"><a href="/?page=' . $page . getSortURL("name") . '">Имя пользователя</a></th>
                           <th class="" style="width: 15%"><a href="/?page=' . $page  . getSortURL("email") . '">Email</a></th>
                           <th class="" style="width: 35%"><a href="/?page=' . $page  . getSortURL("text") . '">Текст</a></th>
                           <th class="" style="width: 30%"><a href="/?page=' . $page  . getSortURL("status") . '">Статус</a></th>
                        </tr>';
                echo '</thead>';
                echo '<tbody>';
                while ($task = $tasks->fetch(PDO::FETCH_OBJ)){
                    echo '<tr>';
                        echo '<td>' . $task->name . '</td>';
                        echo '<td>' . $task->email . '</td>';
                        if ( $_SESSION['login'] == 'admin' ){
                            echo '<td>';
                            echo '<form action="/?id=' . $task->id . '" method="post">
                                    <input type="text" style="width: 70%; height: 50px" name="inputText" value="' . $task->text . '">
                                    <input type="submit" class="btn btn-success float-right" name="saveText" value="Сохранить">
                                   </form>';
                            echo '</td>';

                            echo '<td><textarea readonly="readonly" style="width: 70%; height: 50px;">' . $task->status . '</textarea>';
                            if (strpos($task->status, 'Не выполнено') !== false){
                                echo '<form action="/?id=' . $task->id . '" method="post" style="display: inline">
                                        <input type="submit" class="btn btn-success float-right" name="done" value="Сделано">
                                      </form>';
                            }
                            echo '</td>';
                        }
                        else {
                            echo '<td>' . $task->text . '</td>';
                            echo '<td>' . $task->status . '</td>';
                        }
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

