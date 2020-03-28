<?php
    $orderByArray = array('id','name','email','text','status');
    $sortArray = array('asc','desc');

    $orderBy = 'id';
    $sort = 'desc';

    if ( isset($_GET['order_by']) )
    {
        $orderBy=$_GET['order_by'];
        $sort=$_GET['sort'];
    }

    function getSortURL($orderBy){
        $sortURL = "&order_by=".$orderBy."&sort=";
        $sortType = "asc";
        if( isset($_GET['order_by']) && $_GET['order_by'] == $orderBy ){
            if( isset($_GET['sort']) && $_GET['sort'] == "asc" ){
                $sortType = "desc";
            }
        }
        $sortURL .= $sortType;
        return $sortURL;
    }
