<?php
session_start();
include_once './layouts/head.php';
require_once '../library/config.php';
require_once '../library/function.php';
if($_SESSION['user']['role'] == 3){
  return header('location:'.BASEURL.'dashboard/index');//'<meta http-equiv="refresh" content="0; url='.BASEURL.'dashboard/index">';
}
$query = read_data("SELECT * FROM `post` WHERE `jenis` = 3 AND `status` = 1  ORDER BY `id`");
?>
<title>Artikel - Repository Teknik Elektro Unsika</title>

<body>
  <?php
  include_once './layouts/header.php';
  include_once './layouts/sidebar.php';
  ?>
  <main id="main" class="main">
    <div class="pagetitle">
      <h1>Dokumen Engineering</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index">Home</a></li>
          <li class="breadcrumb-item active">Dokumen Engineering</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">

      <div class="table-responsive">
        <table class="table table-bordered datatable">
          <thead>
            <tr>
              <th>Nomor</th>
              <th>Judul</th>
              <th>Penulis</th>
              <th>Tanggal Upload</th>
              <th>Staff Input</th>
              <th>Dokumen</th>
            </tr>
          </thead>

          <tbody>
            <?php
            $nomor = 1;
            foreach ($query as $data) :
            ?>
              <tr>
                <td><?= $nomor++; ?></td>
                <td><?= $data['judul']; ?></td>
                <td><?= $data['penulis']; ?></td>
                <td><?= $data['tgl_input']; ?></td>
                <td><?= $data['staf_input']; ?></td>
                <td>
                  <a role="button" class="btn btn-success" href="<?= BASEURL ?>uploads/post/<?= $data['path']; ?>">Lihat</a>
                  <a role="button" class="btn btn-danger" href="delete-post.php?id_post=<?= $data['id'] . "&jenis=" . $data['jenis']; ?>" onclick="return confirm ('Apakah anda benar ingin menghapus <?= $data['judul']; ?> dari daftar Dokumen Engineering?')">Hapus</a>
                </td>
              </tr>
            <?php
            endforeach;
            ?>
          </tbody>
        </table>
      </div>
    </section>
  </main><!-- End #main -->
  <?php
  require_once './layouts/footer.php';
  ?>
</body>
</html>