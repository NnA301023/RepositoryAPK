<?php
include_once './layouts/head.php';
?>
<title>Not Found 404 - Repository Teknik Elektro Unsika</title>
<body>
  <?php
  include_once 'layouts/header.php';
  ?>
  <main>
    <div class="container">

      <section class="section error-404 min-vh-100 d-flex flex-column align-items-center justify-content-center">
        <h1>404</h1>
        <h2>The page you are looking for doesn't exist.</h2>
        <button class="btn btn-primary" onclick="window.history.back()">
          <i class="bi bi-arrow-return-left"></i> Back to home
        </button>
        <img src="<?= BASEURL ?>assets/img/not-found.svg" class="img-fluid py-5" alt="Page Not Found">
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </section>

    </div>
  </main><!-- End #main -->
  <?php
  include_once 'layouts/footer.php';
  ?>