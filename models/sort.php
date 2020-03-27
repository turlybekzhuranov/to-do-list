<?php
    $key_array = array('id','name','email','text','status');
    $sort_array = array('asc','desc');

    $key = "id";
    $sort = "asc";
    if ( isset($_GET['key']) )
    {
        $key=$_GET['key'];
        $sort=$_GET['sort'];
    }

    if($sort=='asc')
    {
        $sort='desc';
    }
    else
    {
        $sort='asc';

    }
