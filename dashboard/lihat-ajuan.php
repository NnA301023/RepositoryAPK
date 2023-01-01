<?php
session_start();
include_once './layouts/head.php';
require_once '../library/config.php';
require_once '../library/function.php';
if($_SESSION['user']['role'] != 3){
  return header('location:'.BASEURL.'dashboard/index');//'<meta http-equiv="refresh" content="0; url='.BASEURL.'dashboard/index">';
}
$id_post = $_GET['id'];
$idr = $_GET['idr'];
$data = read_data("SELECT * FROM `proposal` WHERE id='$id_post' AND `id_input` = $idr ")[0];

?>
<title>Detail Ajuan - Repository Teknik Elektro Unsika</title>

<body>
  <?php
  include_once './layouts/header.php';
  include_once './layouts/sidebar.php';
  ?>
  <main id="main" class="main">
    <div class="pagetitle">
      <h1>Detail Ajuan</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Ajuan</li>
          <li class="breadcrumb-item active"><?= $data['id'] ?></li>
        </ol>
      </nav>
    </div>

    <section class="section">
      <div class="row mb-3">
        <label for="inputJudul" class="col-sm-3 col-form-label">Judul</label>
        <div class="col-sm-9">
          <input type="text" name="judul" class="form-control" id="inputJudul" value="<?= $data['judul'] ?>" readonly disabled>
        </div>
      </div>
      <div class="row mb-3">
        <label for="inputPenulis" class="col-sm-3 col-form-label">Penulis</label>
        <div class="col-sm-9">
          <input type="text" name="penulis" class="form-control" id="inputPenulis" value="<?= $data['penulis'] ?>" readonly disabled>
        </div>
      </div>
      <div class="row mb-3">
        <label for="inputDosbim" class="col-sm-3 col-form-label">Dosen Pembimbing</label>
        <div class="col-sm-9">
          <input type="text" name="pembimbing" class="form-control" id="inputPembimbing" value="<?= $data['pembimbing'] ?>" readonly disabled>
        </div>
      </div>
      <div class="row mb-3">
        <label for="inputKeyword" class="col-sm-3 col-form-label">Kata Kunci</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="keyword" name="inputKeyword" value="<?= $data['keyword'] ?>" readonly disabled>
        </div>
      </div>
      <div class="row mb-3">
        <label for="inputAbstrak" class="col-sm-3 col-form-label">Abstrak</label>
        <div class="col-sm-9">
          <textarea type="text" class="form-control" id="inputAbstrak" name="abstrak" readonly disabled><?= $data['abstrak'] ?></textarea>
        </div>
      </div>
    </section>
  </main>
<!-- 
  <?php
  require_once './layouts/footer.php';
  ?>
</body>

</html> -->