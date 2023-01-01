<?php
session_start();
include_once './layouts/head.php';
require_once '../library/config.php';
require_once '../library/function.php';
if($_SESSION['user']['role'] == 3){
  return header('location:'.BASEURL.'dashboard/index');//'<meta http-equiv="refresh" content="0; url='.BASEURL.'dashboard/index">';
}
?>
<title>Tambah Dokumen - Repository Teknik Elektro Unsika</title>

<body>
  <?php
  include_once './layouts/header.php';
  include_once './layouts/sidebar.php';
  ?>
  <main id="main" class="main">
    <div class="pagetitle">
      <h1>Tambah Dokumen</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Dokumen</li>
          <li class="breadcrumb-item active">Tambah</li>
        </ol>
      </nav>
    </div>

    <section class="section">
      <form action="add-post-action" method="POST" enctype="multipart/form-data">
        <div class="row mb-3">
          <label for="inputJudul" class="col-sm-3 col-form-label">Judul</label>
          <div class="col-sm-9">
            <input type="text" name="judul" class="form-control" id="inputJudul" required>
          </div>
        </div>
        <div class="row mb-3">
          <label for="inputPenulis" class="col-sm-3 col-form-label">Penulis</label>
          <div class="col-sm-9">
            <input type="text" name="penulis" class="form-control" id="inputPenulis" required>
          </div>
        </div>
        <div class="row mb-3">
          <label for="inputDosbim" class="col-sm-3 col-form-label">Kontributor/Dosen Pembimbing</label>
          <div class="col-sm-9">
            <select class="form-select form-control" name="dosbim" id="inputDosbim">
              <option value="1">Arnisa Stefanie, ST, MT.</option>
              <option value="2">Dian Budhi Santoso, S.T., M.Eng.</option>
              <option value="3">Dr. Ir. Yuliarman Saragih, MT.</option>
              <option value="4">Ibrahim, ST, MT.</option>
              <option value="5">Insani Abdi Bangsa, ST., M.Sc</option>
              <option value="6">Ir. Lela Nurpulaela, MT.</option>
              <option value="7">Rahmat Hidayat, A.Md.T, S.Pd., M.Pd</option>
              <option value="8">Reni Rahmadewi, ST, MT.</option>
              <option value="9">Ulinnuha Latifa, S.T., M.T.</option>
            </select>
          </div>
        </div>
        <div class="row mb-3">
          <label for="inputSubjek" class="col-sm-3 col-form-label">Subjek</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" id="inputSubjek" name="subjek" required>
          </div>
        </div>
        <div class="row mb-3">
          <label for="inputPenerbit" class="col-sm-3 col-form-label">Penerbit</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" id="inputPenerbit" name="penerbit" required>
          </div>
        </div>
        <div class="row mb-3">
          <label for="inputKeyword" class="col-sm-3 col-form-label">Kata Kunci</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" id="keyword" name="inputKeyword" required>
          </div>
        </div>
        <div class="row mb-3">
          <label for="inputStaffInput" class="col-sm-3 col-form-label">Staf Input</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" id="inputStaffInput" name="staf_input" required>
          </div>
        </div>
        <div class="row mb-3">
          <label for="inputAbstrak" class="col-sm-3 col-form-label">Abstrak</label>
          <div class="col-sm-9">
            <textarea type="text" class="form-control" id="inputAbstrak" name="abstrak" required></textarea>
          </div>
        </div>
        <div class="row mb-3">
          <label for="inputFile" class="col-sm-3 col-form-label">Upload File</label>
          <div class="col-sm-9">
            <input class="form-control" type="file" name="file" id="inputFile" required />
          </div>
        </div>
        <fieldset class="row mb-3">
          <legend class="col-form-label col-sm-3 pt-0">Jenis Dokumen</legend>
          <div class="col-sm-9">
            <div class="form-check">
              <input class="form-check-input" type="radio" id="inputJenisDokumenArtikel" name="jenis" value="1" required>
              <label class="form-check-label" for="inputJenisDokumenArtikel">Artikel</label><br>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" id="inputJenisDokumenSkripsi" name="jenis" value="2" required>
              <label class="form-check-label" for="inputJenisDokumenSkripsi">Skripsi</label><br>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" id="inputJenisDokumenDokeng" name="jenis" value="3" required>
              <label class="form-check-label" for="inputJenisDokumenDokeng">Dokumen Engineering</label><br>
            </div>
          </div>
        </fieldset>
        <div class="text-start">
          <button type="submit" class="btn btn-primary">Tambah</button>
          <button type="reset" class="btn btn-secondary">Reset</button>
        </div>
      </form>
    </section>
  </main>

  <?php
  require_once './layouts/footer.php';
  ?>
</body>

</html>