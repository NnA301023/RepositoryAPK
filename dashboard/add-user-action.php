<?php
require_once '../library/config.php';
require_once '../library/function.php';
$user = [
  'nama' => stripslashes(trim($_POST['nama'])),
  'email' => stripslashes(trim($_POST['email'])),
  'password' => password_hash(stripslashes(trim($_POST['password'])),PASSWORD_BCRYPT),
  'gender' => stripslashes(trim($_POST['gender'])),
  'address' => stripslashes(trim($_POST['address'])),
  'path' => 'profile-img.jpg',//stripslashes(trim($_POST['path'])),
  'role' => stripslashes(trim($_POST['role'])),
  'NID' => stripslashes(trim($_POST['NID'])),
];
$is_added = add_data('user',"'','$user[nama]','$user[email]','$user[password]','$user[gender]','$user[address]','$user[path]','$user[role]','$user[NID]'");
if($is_added){
  header("location:data-user.php?pesan=1");
}else{
  header("location:data-user.php?pesan=0");
}
