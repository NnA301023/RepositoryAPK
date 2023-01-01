<?php
include_once 'layouts/head.php';
require_once 'library/function.php';
$keyword = trim(stripslashes($_GET['query']));
$result = read_data("SELECT * FROM post WHERE keyword LIKE '%$keyword%' OR judul LIKE '%$keyword%'");
?>
<title>Search - Repository Unsika</title>

<body>
  <?php
  include_once 'layouts/header.php';
  ?>

  <main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">
        <div class="d-flex justify-content-between align-items-center">
          <h2>Search Result</h2>
          <ol>
            <li><a href="<?= BASEURL ?>">Home</a></li>
            <li>Search</li>
          </ol>
        </div>
      </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page pt-2">
      <div class="container">
        <div class="row mb-2">
          <div class="col-md-8 col-12">
            <h4>Kata Kunci : <?= $_GET['query'] ?></h4>
            <p>Hasil : <?= count($result); ?></p>
          </div>
          <div class="col-md-4 col-12">
            <form action="search.php" class="input-group" method="get">
              <input type="search" class="form-control" name="query" placeholder="Tuliskan kata kunci" aria-label="Tuliskan kata kunci" aria-describedby="search-addon">
              <button type="submit" class="btn btn-primary" id="search-addon">
                <span class="bx bx-search"></span>
              </button>
            </form>
          </div>
        </div>
        <div class="row">
          <?php
          foreach ($result as $data) : ?>
            <div class="col-12 mb-2">
              <div class="card">
                <div class="card-body">
                  <a href="post?id=<?= $data['id'] ?>" class="text-decoration-none">
                    <h4 class="card-title"><strong><?= $data['judul'] ?></strong></h4>
                    <h6 class="card-subtitle text-muted">
                      Keyword : <?= $data['keyword'] ?>
                    </h6>
                    <div class="card-text">
                      <span class="bx bx-user"></span> <?= $data['penulis'] ?>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          <?php
          endforeach;
          ?>
        </div>
      </div>
    </section>
  </main><!-- End #main -->
  <?php
  include_once 'layouts/footer.php';
  ?>