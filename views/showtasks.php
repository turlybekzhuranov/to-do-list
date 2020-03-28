<?php
    require 'models/tasks.php';
    $direction = array(
        'name' => '',
        'email' => '',
        'text' => '',
        'status' => ''
    );
    if ($sort == 'asc') {
        switch ($orderBy) {
            case 'name':
                $direction['name'] = '^';
                break;
            case 'email':
                $direction['email'] = '^';
                break;
            case 'text':
                $direction['text'] = '^';
                break;
            case 'status':
                $direction['status'] = '^';
                break;
        }
    } else if ($sort == 'desc'){
        switch ($orderBy){
            case 'name':
                $direction['name'] = 'v';
                break;
            case 'email':
                $direction['email'] = 'v';
                break;
            case 'text':
                $direction['text'] = 'v';
                break;
            case 'status':
                $direction['status'] = 'v';
                break;
        }
    }
    echo '<div class="container">';
        echo '<div class="row">';
            echo '<table class="table table-bordered table-striped">';
                echo '<thead>';
                    echo '<tr>
                           <th class="col-md-2"><a href="/?page=' . $page . getSortURL("name") . '">Имя пользователя<br>' . $direction["name"] .'</a></th>
                           <th class="col-md-2"><a href="/?page=' . $page  . getSortURL("email") . '">Email<br>' . $direction["email"] .'</a></th>
                           <th class="col-md-2"><a href="/?page=' . $page  . getSortURL("text") . '">Текст<br>' . $direction["text"] .'</a></th>
                           <th class="col-md-2"><a href="/?page=' . $page  . getSortURL("status") . '">Статус<br>' . $direction["status"] .'</a></th>
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
                echo '<div class="col-3"> <a href="/?page=' . ($page - 1) . '&order_by=' . $orderBy . '&sort=' . $sort . '">&laquo; Прошлая страница</a> </div>';
            } else {
                echo '<div class="col-3"></div>';
            }
            if ($page < $totalPagesOfTasks) {
                echo '<div class="col-3"><a class="text-right" href="/?page=' . ($page + 1) . '&order_by=' . $orderBy . '&sort=' . $sort . '">Следующая страница  &raquo; </a></div>';
            } else {
                echo '<div class="col-3"></div>';
            }
        echo '</div>';
    echo '</div>';

