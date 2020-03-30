<?php
    ob_start();
    session_start();
    require 'config/db.php';


    require 'models/pagination.php';
    require 'models/sort.php';
    require 'models/updateTask.php';
    require 'models/addTask.php';
    require 'models/tasks.php';
    require 'models/login.php';


    require  'views/loginButton.php';
    require 'views/showTasks.php';
    require 'views/showAddingTaskForm.php';