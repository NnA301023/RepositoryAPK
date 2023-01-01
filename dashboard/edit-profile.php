
<?php
session_start();
require_once '../library/config.php';
require_once '../library/function.php';
$user = [
    'nama' => stripslashes(trim($_POST['nama'])),
    // 'email' => stripslashes(trim($_POST['email'])),
    'gender' => stripslashes(trim($_POST['gender'])),
    'address' => stripslashes(trim($_POST['address'])),
    // 'path' => stripslashes(trim($_POST['path'])),
    // 'role' => stripslashes(trim($_POST['role'])),
    'NID' => stripslashes(trim($_POST['NID'])),
];
$id = $_SESSION['user']['id'];
// var_dump($_SESSION['user']['role']);
if ($_SESSION['user']['role'] == 3) {
    $is_updated = update_data('user', "nama='$user[nama]',gender='$user[gender]',address='$user[address]',NID='$user[NID]'", "id = $id");
}else{
    $is_updated = update_data('user', "nama='$user[nama]',gender='$user[gender]',address='$user[address]',role='$user[role]',NID='$user[NID]'", "id = $id");
}
if ($is_updated) {
    header('location:profile?pesan=0');
} else {
    header('location:profile?pesan=1');
}
?>