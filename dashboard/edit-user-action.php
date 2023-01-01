<?php
require_once '../library/config.php';
require_once '../library/function.php';
$user = [
  'nama' => stripslashes(trim($_POST['nama'])),
  // 'email' => stripslashes(trim($_POST['email'])),
  'gender' => stripslashes(trim($_POST['gender'])),
  'address' => stripslashes(trim($_POST['address'])),
  // 'path' => stripslashes(trim($_POST['path'])),
  'role' => stripslashes(trim($_POST['role'])),
  'NID' => stripslashes(trim($_POST['NID'])),
];
$id = $_GET['id'];
$is_updated = update_data('user',"nama='$user[nama]',gender='$user[gender]',address='$user[address]',role='$user[role]',NID='$user[NID]'","id = $id");
if($is_updated){
  header("location:data-user.php?pesan=1");
}else{
  header("location:data-user.php?pesan=0");
}
