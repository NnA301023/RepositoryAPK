<?php
include_once './layouts/head.php';
require_once 'library/function.php';
$artikel_num = count_data('post',"jenis='1'");
$skripsi_num = count_data('post',"jenis='2'");
$dokumen_engineering_num = count_data('post',"jenis='3'");
?>
<body>
  <?php
  include_once 'layouts/header.php';
  ?>

  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
      <div class="row justify-content-center">
        <div class="col-xl-7 col-lg-9 text-center">
          <h1>Repository Unsika</h1>
        </div>
      </div>
      <div class="col-md-6 mt-5 d-flex justify-content-center mx-auto ">
        <form action="search" class="input-group input-group-lg" method="get">
          <input type="search" class="form-control" name="query" placeholder="Tuliskan kata kunci" aria-label="Tuliskan kata kunci" aria-describedby="search-addon">
            <button type="submit" class="btn btn-primary" id="search-addon">
              <span class="bx bx-search"></span>
            </button>
        </form>
      </div>
    </div>
  </section>

  <main id="main">
    <section id="counts" class="counts section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Jelajahi Dokumen</h2>
          <p>base url = <?= BASEURL ?> Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. </p>
        </div>
        <div class="row justify-content-end">
          <div class="col-lg-4 col-md-5 col-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <span data-purecounter-start="0" data-purecounter-end="<?= $artikel_num ?>" data-purecounter-duration="2" class="purecounter"></span>
              <p>Artikel</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-5 col-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <span data-purecounter-start="0" data-purecounter-end="<?= $skripsi_num ?>" data-purecounter-duration="2" class="purecounter"></span>
              <p>Skripsi</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-5 col-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <span data-purecounter-start="0" data-purecounter-end="<?= $dokumen_engineering_num ?>" data-purecounter-duration="2" class="purecounter"></span>
              <p>Dokumen Engineering</p>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Counts Section -->

  </main><!-- End #main -->

<?php
include_once 'layouts/footer.php';
?>