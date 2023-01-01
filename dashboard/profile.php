<?php
session_start();
include_once './layouts/head.php';
require_once '../library/config.php';
require_once '../library/function.php';
?>

<body>
  <?php
  include_once './layouts/header.php';
  include_once './layouts/sidebar.php';
  ?>
  <main id="main" class="main">
    <div class="pagetitle">
      <h1>Profile</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index">Home</a></li>
          <li class="breadcrumb-item active">Profile</li>
        </ol>
      </nav>
    </div>

    <section class="section profile">
      <div class="row">
        <div class="col-xl-4">

          <div class="card">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

              <img src="<?= BASEURL ?>assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
              <h2><?= $_SESSION['user']['nama'] ?></h2>
              <h3>
                <?php
                switch ($_SESSION['user']['role']) {
                  case 1:
                    echo 'Admin';
                    break;
                  case 1:
                    echo 'Dosen';
                    break;
                  default:
                    echo 'Mahasiswa';
                    break;
                }
                ?>
              </h3>
            </div>
          </div>

        </div>

        <div class="col-xl-8">

          <div class="card">
            <div class="card-body pt-3">
              
              <ul class="nav nav-tabs nav-tabs-bordered">

                <li class="nav-item">
                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profil</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Ganti Password</button>
                </li>
              </ul>
              <div class="tab-content pt-2">
                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                  <?php
                  $user_id = $_SESSION['user']['id'];
                  $profil = read_data("SELECT * FROM user WHERE id='$user_id'");
                  foreach ($profil as $data) : ?>
                    <h5 class="card-title">Detail Profil</h5>
                    <div class="row">
                      <div class="col-lg-3 col-md-4 label">Nama Lengkap</div>
                      <div class="col-lg-9 col-md-8"><?= $data['nama'] ?></div>
                    </div>
                    <div class="row">
                      <div class="col-lg-3 col-md-4 label">Email</div>
                      <div class="col-lg-9 col-md-8"><?= $data['email'] ?></div>
                    </div>
                    <div class="row">
                      <div class="col-lg-3 col-md-4 label">Alamat</div>
                      <div class="col-lg-9 col-md-8"><?= $data['address'] ?></div>
                    </div>
                    <div class="row">
                      <div class="col-lg-3 col-md-4 label">Jenis Kelamin</div>
                      <div class="col-lg-9 col-md-8"><?= ($data['gender'] == 1) ? 'Laki-laki' : 'Perempuan' ?></div>
                    </div>
                  <?php
                  endforeach;
                  ?>
                </div>
                <div class="tab-pane fade profile-edit pt-3" id="profile-edit">
                  <form method="POST" action="edit-profile">
                    <div class="row mb-3">
                      <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
                      <div class="col-md-8 col-lg-9">
                        <img src="<?= BASEURL ?>assets/img/profile-img.jpg" alt="Profile">
                        <div class="pt-2">
                          <input type="file" name="file" class="form-control" id="foto" aria-placeholder="Upload Foto Profil">
                        </div>
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label for="inputNama" class="col-md-4 col-lg-3 col-form-label">Nama Lengkap</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="nama" type="text" class="form-control" id="inputNama" value="<?= $data['nama'] ?>" required>
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label for="inputAlamat" class="col-md-4 col-lg-3 col-form-label">Alamat</label>
                      <div class="col-sm-9">
                        <textarea name="address" class="form-control" id="inputAlamat" required><?= $data['address'] ?></textarea>
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label for="inputNID" class="col-md-4 col-lg-3 col-form-label">NID</label>
                      <div class="col-sm-9">
                        <input type="number" min="0" name="NID" class="form-control" id="inputNID" value="<?= $data['NID'] ?>" required>
                      </div>
                    </div>
                    <fieldset class="row mb-3">
                      <legend class="col-md-4 col-lg-3 col-form-label pt-0">Jenis Kelamin</legend>
                      <div class="col-sm-9">
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="gender" id="gridRadios1" value="1" <?= ($data['gender'] == 1) ? 'checked' : '' ?> required>
                          <label class="form-check-label" for="gridRadios1">
                            Laki-laki
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="gender" id="gridRadios2" value="0" <?= ($data['gender'] == 0) ? 'checked' : '' ?> required>
                          <label class="form-check-label" for="gridRadios2">
                            Perempuan
                          </label>
                        </div>
                      </div>
                    </fieldset>
                    <?php 
                    if($_SESSION['user']['role'] != 3):?>
                    <fieldset class="row mb-3">
                      <legend class="col-md-4 col-lg-3 col-form-label pt-0">Role</legend>
                      <div class="col-sm-9">
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="role" id="radioRole1" value="1" <?= ($data['role'] == 1) ? 'checked': '' ?> required>
                          <label class="form-check-label" for="radioRole1">
                            Admin
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="role" id="radioRole2" value="2" <?= ($data['role'] == 2) ? 'checked': '' ?> required>
                          <label class="form-check-label" for="radioRole2">
                            Dosen
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="role" id="radioRole3" value="3" <?= ($data['role'] == 3) ? 'checked': '' ?> required>
                          <label class="form-check-label" for="radioRole3">
                            Mahasiswa
                          </label>
                        </div>
                      </div>
                    </fieldset>
                    <?php endif; ?>
                    <div class="text-center">
                      <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                  </form>
                </div>
                <div class="tab-pane fade pt-3" id="profile-change-password">
                  
                  <form method="POST" action="change-password">
                    <div class="row mb-3">
                      <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current Password</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="password" type="password" class="form-control" id="currentPassword">
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New Password</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="newpassword" type="password" class="form-control" id="newPassword">
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter New Password</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="renewpassword" type="password" class="form-control" id="renewPassword">
                      </div>
                    </div>
                    <div class="text-center">
                      <button type="submit" class="btn btn-primary">Change Password</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <?php
  include_once 'layouts/footer.php';
  ?>
  
</body>

</html>