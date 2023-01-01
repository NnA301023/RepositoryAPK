<?php
session_start();
require_once '../library/config.php';
require_once '../library/function.php';
$oldpassword = stripslashes(trim($_POST['password']));
$newpassword = stripslashes(trim($_POST['newpassword']));
$renewpassword = stripslashes(trim($_POST['renewpassword']));
$id = $_SESSION['user']['id'];
$is_password_match = password_verify($oldpassword,read_data("SELECT password FROM user WHERE id='$id'")[0]['password']);
if ($newpassword == $renewpassword and $is_password_match) {
    $newpassword = password_hash($newpassword,PASSWORD_BCRYPT);
    $is_updated = update_data('user', "password='$newpassword'", "id = '$id'");
    if ($is_updated) {
        header("location:profile?pesan=1");
    } else {
        header("location:profile?pesan=0");
    }
}else{
    header("location:profile?pesan=0");
}
