<?php
require_once '../library/config.php';
require_once '../library/function.php';

$id_prop = $_GET['id_prop'];

$pesan = $_GET['pesan'];

$is_updated = false;
if ($pesan == 1) {
    $is_updated = update_data('post',"`status` = '1'","`id`= $id_prop");
}else if ($pesan == 2) {
    $is_updated = update_data('post',"`status` = '2'","`id`= $id_prop");
}else if ($pesan == 3) {
    $is_updated = update_data('post',"`status` = '0'","`id`= $id_prop");
}else {
    $is_updated = update_data('post',"`status` = '1'","`id`= $id_prop");
}

if ($is_updated) {
    header("Location: antrian-dokumen.php?pesan=1");
} else {
    header("Location: antrian-dokumen.php?pesan=0");
}