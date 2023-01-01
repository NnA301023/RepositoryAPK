<?php
session_start();
include_once './layouts/head.php';
require_once '../library/config.php';
require_once '../library/function.php';
if($_SESSION['user']['role'] == 3){
  return header('location:'.BASEURL.'dashboard/index');//'<meta http-equiv="refresh" content="0; url='.BASEURL.'dashboard/index">';
}
$result = [];
$result = read_data("SELECT * FROM `proposal` ORDER BY `status`");
?>
<title>Antrian Proposal - Repository Teknik Elektro Unsika</title>

<body>
  <?php
  include_once './layouts/header.php';
  include_once './layouts/sidebar.php';
  ?>
  <main id="main" class="main">
    <div class="pagetitle">
      <h1>Antrian Proposal Riset</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index">Home</a></li>
          <li class="breadcrumb-item">Antrian</li>
          <li class="breadcrumb-item active">Proposal</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="table-responsive">
        <table class="table table-bordered datatable" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Nomor</th>
              <th>Judul</th>
              <th>Penulis</th>
              <th>Tanggal Upload</th>
              <?= ($_SESSION['user']['role'] == 1) ? '<th>Dosen Pembimbing</th>' : ''; ?>
              <th>Status</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $nomor = 1;
            foreach ($result as $data) :
            ?>
              <tr>
                <td><?= $nomor++; ?></td>
                <td><?= $data['judul']; ?></td>
                <td><?= $data['penulis']; ?></td>
                <td><?= $data['tgl_input']; ?></td>
                <?php
                if ($_SESSION['user']['role'] == 1) {
                  $pembimbing = $data['pembimbing'];
                  switch ($pembimbing) {
                    case 1:
                      echo "<td>Arnisa Stefanie, ST, MT.</td>";
                      break;
                    case 2:
                      echo "<td>Dian Budhi Santoso, S.T., M.Eng.</td>";
                      break;
                    case 3:
                      echo "<td>Dr. Ir. Yuliarman Saragih, MT.</td>";
                      break;
                    case 4:
                      echo "<td>Ibrahim, ST, MT.</td>";
                      break;
                    case 5:
                      echo "<td>Insani Abdi Bangsa, ST., M.Sc</td>";
                      break;
                    case 6:
                      echo "<td>Ir. Lela Nurpulaela, MT.</td>";
                      break;
                    case 7:
                      echo "<td>Rahmat Hidayat, A.Md.T, S.Pd., M.Pd</td>";
                      break;
                    case 8:
                      echo "<td>Reni Rahmadewi, ST, MT.</td>";
                      break;
                    case 9:
                      echo "<td>Ulinnuha Latifa, S.T., M.T.</td>";
                      break;
                    default:
                      echo "<td>Ulinnuha Latifa, S.T., M.T.</td>";
                      break;
                  }
                }
                ?>
                </td>
                <td>
                  <?php
                  if ($data['status'] == 0) {
                    echo '<span class="badge bg-warning text-dark"><i class="bi bi-clock-history me-1"></i> Menunggu</span>';
                  } else if ($data['status'] == 1) {
                    echo '<span class="badge bg-success"><i class="bi bi-check-circle me-1"></i> Diterima</span>';
                  } else if ($data['status'] == 2) {
                    echo '<span class="badge bg-danger"><i class="bi bi-exclamation-circle me-1"></i> Ditolak</span>';
                  }
                  ?>
                </td>
                <td>
                  <?php
                  $id_post = $data['id'];
                  $judul = $data['judul'];
                  if ($data['status'] == 0) {
                    echo "<a role='button' class='btn btn-success btn-sm' href='aksi-proposal.php?id_prop=$id_post&pesan=1'>Setujui</a>";
                    echo "<a role='button' class='btn btn-danger btn-sm' href='aksi-proposal.php?id_prop=$id_post&pesan=2'>Tolak</a>";
                  } else if ($data['status'] == 1) {
                    echo "<a role='button' class='btn btn-success btn-sm' href='aksi-proposal.php?id_prop=$id_post&pesan=3'>Batalkan Penerimaan</a>";
                  } else if ($data['status'] == 2) {
                    echo "<a role='button' class='btn btn-danger btn-sm' href='aksi-proposal.php?id_prop=$id_post&pesan=3'>Batalkan Penolakan</a>";
                  }
                  echo "<a role='button' class='btn btn-primary btn-sm' href='plagiarism.php?id_prop=$id_post'>Cek Plagiasi</a>";
                  ?>
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