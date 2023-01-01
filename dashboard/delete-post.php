<?php
require_once '../library/config.php';
require_once '../library/function.php';
$id_post = $_GET['id_post'];
if ($_GET['jenis'] == 4) {
    $is_deleted = delete_data('proposal',"id='$id_post'");
    if($is_deleted){
        return header("location:index?pesan=1");
    }else{
        return header("location:index?pesan=1");
    }
}
$current_file_path = read_data("SELECT path FROM post WHERE id='$id_post'")[0]['path'];
$is_file_deleted = unlink(BASEDIR.'uploads/post/'.$current_file_path);
$is_deleted = delete_data('post',"id='$id_post'");
$redirect_to = '';
switch ($_GET['jenis']) {
    case 1:
        $redirect_to = 'data-artikel';
        break;
    case 2:
        $redirect_to = 'data-skripsi';
        break;
    case 3:
        $redirect_to = 'data-dokeng';
        break;
    default:
        $redirect_to = 'index';
        break;
}
if($is_deleted && $is_file_deleted){
    header("location:$redirect_to?pesan=1");
}else{
    header("location:$redirect_to?pesan=0");
}

