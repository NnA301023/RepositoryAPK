<?php
session_start();
require_once '../library/config.php';
require_once '../library/function.php';
$pesan = '';

$judul = $_POST['judul'];
$penulis = $_POST['penulis'];
$dosbim = $_POST['dosbim'];
$penerbit = $_POST['penerbit'];
$subjek = $_POST['subjek'];
$keyword = $_POST['keyword'];
$abstrak = $_POST['abstrak'];
$tgl_input = date('Y-m-d');
$id_input = $_SESSION['user']['id'];

$is_added = add_data('proposal', "'','$judul', '$penulis', '$dosbim', '$abstrak', '$keyword', '0', '$tgl_input', $id_input");

if ($is_added) {
    return header("Location:index.php?pesan=1");
} else {
    return header("Location:add-post.php?pesan=0");
}
