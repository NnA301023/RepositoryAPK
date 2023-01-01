<?php
session_start();
require_once '../library/config.php';
require_once '../library/function.php';
$pesan = '';

$file_name = $_FILES['file']['name'];
$judul = $_POST['judul'];
$penulis = $_POST['penulis'];
$kontributor = $_POST['kontributor'];
$penerbit = $_POST['penerbit'];
$subjek = $_POST['subjek'];
$keyword = $_POST['keyword'];
$staf_input = $_POST['staf_input'];
$jenis = $_POST['jenis'];
$abstrak = $_POST['abstrak'];
$tgl_input = date('Y-m-d');

$is_added = false;
if ($_SESSION['user']['role'] == 1) {
  $is_added = add_data('post',"'','$judul', '$penulis', '$kontributor', '$jenis', '$penerbit', '$subjek', '$keyword', '$staf_input', '$tgl_input', '$file_name', '$abstrak', '1'");
} else {
  $is_added = add_data('post',"'','$judul', '$penulis', '$kontributor', '$jenis', '$penerbit', '$subjek', '$keyword', '$staf_input', '$tgl_input', '$file_name', '$abstrak', '0'");
}

$targetfolder = BASEDIR."uploads/post/";
$targetfolder = $targetfolder . basename($_FILES['file']['name']);
$is_uploaded = false;
if (move_uploaded_file($_FILES['file']['tmp_name'], $targetfolder)) {
  $is_uploaded = true;
  $pesan = "The file " . basename($_FILES['file']['name']) . " is uploaded";
} else {
  $pesan = "Problem uploading file";
}

if($_SESSION['user']['role'] == 3){
  if ($is_added && $is_uploaded) {
    return header('location:ajukan-dokumen?pesan=1');
  }else{
    return header('location:ajukan-dokumen?pesan=0');
  }
}
if ($is_added && $is_uploaded) {
  if ($jenis == 1) {
    return header("Location:data-artikel.php?pesan=1");
  }else if ($jenis == 2) {
    return header("Location:data-skripsi.php?pesan=1");
  }else {
    return header("Location:data-dokeng.php?pesan=1");
  }
} else {
  return header("Location:add-post.php?pesan=0");
}
