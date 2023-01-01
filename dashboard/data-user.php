<?php
session_start();
include_once './layouts/head.php';
require_once '../library/config.php';
require_once '../library/function.php';
if($_SESSION['user']['role'] == 3){
  return header('location:'.BASEURL.'dashboard/index');//'<meta http-equiv="refresh" content="0; url='.BASEURL.'dashboard/index">';
}
$data = read_data("SELECT * FROM user");
?>
<title>Data User - Repository Teknik Elektro Unsika</title>

<body>
  <?php
  include_once './layouts/header.php';
  include_once './layouts/sidebar.php';
  ?>


  <main id="main" class="main">
    <div class="pagetitle">
      <h1>Data User <a href="add-user" class="btn btn-primary btn-sm"><span class="bi bi-plus"></span></a></h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">User</li>
          <li class="breadcrumb-item active">Data</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="table-responsive">
        <table class="table table-striped datatable">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Nama</th>
              <th scope="col">Email</th>
              <th scope="col">Alamat</th>
              <th scope="col">NID</th>
              <th scope="col">Jenis Kelamin</th>
              <th scope="col">Role</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $no = 1;
            foreach ($data as $row):?>
              <tr>
              <th scope="row"><?= $no++; ?></th>
              <td><?= $row['nama'] ?></td>
              <td><?= $row['email'] ?></td>
              <td><?= $row['address'] ?></td>
              <td><?= $row['NID'] ?></td>
              <td>
                <?= ($row['gender'] == 1) ? 'Laki-laki':'Perempuan' ?>
              </td>
              <td>
                <?php 
                switch ($row['role']) {
                  case 1:
                    echo 'admin';
                    break;
                  case 2:
                    echo 'dosen';
                    break;
                  default:
                    echo 'mahasiswa';
                    break;
                }
                ?>
              </td>
              <td>
                <a role="button" href="<?= BASEURL ?>dashboard/edit-user?id=<?= $row['id'] ?>" class="btn btn-sm btn-warning rounded">Edit</a>
                <a role="button" href="<?= BASEURL ?>dashboard/delete-user?id=<?= $row['id'] ?>" class="btn btn-sm btn-danger rounded" onclick="return confirm('Apa anda yakin?')">Hapus</a>
              </td>
            </tr>
            <?php
            endforeach;
            ?>
          </tbody>
        </table>
      </div>
    </section>
  </main>

  <?php
  require_once './layouts/footer.php';
  ?>
</body>

</html>