<?php
session_start();
include_once './layouts/head.php';
require_once '../library/config.php';
require_once '../library/function.php';
if($_SESSION['user']['role'] == 3){
  return header('location:'.BASEURL.'dashboard/index');//'<meta http-equiv="refresh" content="0; url='.BASEURL.'dashboard/index">';
}
$id = stripslashes(trim($_GET['id']));
$user = read_data("SELECT * FROM user WHERE id='$id'")[0];
?>
<title>Edit User - Repository Teknik Elektro Unsika</title>

<body>
  <?php
  include_once './layouts/header.php';
  include_once './layouts/sidebar.php';
  ?>
  <main id="main" class="main">
    <div class="pagetitle">
      <h1>Edit User</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">User</li>
          <li class="breadcrumb-item">Edit</li>
          <li class="breadcrumb-item active"><?= $user['id'] ?></li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <form method="POST" action="edit-user-action.php?id=<?= $user['id'] ?>">
        <div class="row mb-3">
          <label for="inputNama" class="col-sm-3 col-form-label">Nama</label>
          <div class="col-sm-9">
            <input type="text" name="nama" class="form-control" id="inputNama" value="<?= $user['nama'] ?>" required>
          </div>
        </div>
        <div class="row mb-3">
          <label for="inputEmail" class="col-sm-3 col-form-label">Email</label>
          <div class="col-sm-9">
            <input type="email" name="name" class="form-control" id="inputEmail" value="<?= $user['email'] ?>" disabled>
          </div>
        </div>
        <div class="row mb-3">
          <label for="inputAlamat" class="col-sm-3 col-form-label">Alamat</label>
          <div class="col-sm-9">
            <textarea name="address" class="form-control" id="inputAlamat"><?= $user['address'] ?></textarea>
          </div>
        </div>
        <div class="row mb-3">
          <label for="inputNID" class="col-sm-3 col-form-label">NID</label>
          <div class="col-sm-9">
            <input type="number" min="0" name="NID" class="form-control" id="inputNID" value="<?= $user['NID'] ?>" required>
          </div>
        </div>
        <!-- <div class="row mb-3">
          <label for="inputPassword3" class="col-sm-3 col-form-label">Password</label>
          <div class="col-sm-9">
            <input type="password" class="form-control" id="inputPassword">
          </div>
        </div> -->
        <fieldset class="row mb-3">
          <legend class="col-form-label col-sm-3 pt-0">Jenis Kelamin</legend>
          <div class="col-sm-9">
            <div class="form-check">
              <input class="form-check-input" type="radio" name="gender" id="gridRadios1" value="1" required>
              <label class="form-check-label" for="gridRadios1">
                Laki-laki
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="gender" id="gridRadios2" value="0" required>
              <label class="form-check-label" for="gridRadios2">
                Perempuan
              </label>
            </div>
          </div>
        </fieldset>
        <fieldset class="row mb-3">
          <legend class="col-form-label col-sm-3 pt-0">Role</legend>
          <div class="col-sm-9">
            <div class="form-check">
              <input class="form-check-input" type="radio" name="role" id="radioRole1" value="1" required>
              <label class="form-check-label" for="radioRole1">
                Admin
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="role" id="radioRole2" value="2" required>
              <label class="form-check-label" for="radioRole2">
                Dosen
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="role" id="radioRole3" value="3" required>
              <label class="form-check-label" for="radioRole3">
                Mahasiswa
              </label>
            </div>
          </div>
        </fieldset>
        <!-- <div class="row mb-3">
          <div class="col-sm-10 offset-sm-2">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="gridCheck1">
              <label class="form-check-label" for="gridCheck1">
                Example checkbox
              </label>
            </div>
          </div>
        </div> -->
        <div class="text-start">
          <button type="submit" class="btn btn-primary">Submit</button>
          <button type="reset" class="btn btn-secondary">Reset</button>
        </div>
      </form><!-- End Horizontal Form -->
    </section>
  </main>

  <?php
  require_once './layouts/footer.php';
  ?>
</body>

</html>