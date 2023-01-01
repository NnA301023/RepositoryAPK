<?php
require_once '../library/config.php';
require_once '../library/function.php';
$id = $_GET['id'];
$is_deleted = delete_data('user',"id='$id'");
if($is_deleted){
    header("location:data-user.php?pesan=1");
}else{
    header("location:data-user.php?pesan=0");
}

