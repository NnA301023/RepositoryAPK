<?php
session_start();
include_once './layouts/head.php';
require_once '../library/config.php';
require_once '../library/function.php';
if ($_SESSION['user']['role'] == 3) {
  return header('location:' . BASEURL . 'dashboard/index'); //'<meta http-equiv="refresh" content="0; url='.BASEURL.'dashboard/index">';
}
$id = stripslashes(trim($_GET['id']));
$query = read_data("SELECT * FROM `post` WHERE `jenis` = 2  ORDER BY `id`");
?>
<title>Plagiarism Checker - Repository Teknik Elektro Unsika</title>

<body>
  <?php
  include_once './layouts/header.php';
  include_once './layouts/sidebar.php';
  ?>
  <main id="main" class="main">
    <div class="pagetitle">
      <h1>Plagiarism Checker</h1>
      <p class="mb-4">Pengecekan plagiasi pada abstraksi ide riset dengan data terdahulu</p>
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
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>Kaliamat Plagiat</th>
              <th>Persentase Plagiasi</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <?php
                // Upload to databses
                $id_prop = $_GET['id_prop'];
                $sql1 = "SELECT `abstrak` FROM `proposal` WHERE `id` = $id_prop";
                $sql2 = "SELECT `abstrak` FROM `proposal` WHERE `abstrak` NOT IN (SELECT `abstrak` FROM `proposal` WHERE `id` = $id_prop)";

                $query1 = $conn->query($sql1);
                $query2 = $conn->query($sql2);
                $data1 = $query1->fetch_assoc();
                $text_full = [];
                while ($data = $query2->fetch_assoc()) {
                  $text_full = array_merge($text_full, $data);
                }
                $text_satu = $data1['abstrak'];

                $exp_satu = explode(".", $text_satu);
                // $exp_dua = explode(".", $text_dua);
                $total_percentage = 0;
                $total_text = 0;

                foreach ($exp_satu as $text1) {
                  foreach ($text_full as $text_full_idx) {
                    $exp_dua = explode(".", $text_full_idx);
                    foreach ($exp_dua as $text2) {
                      $sim = similar_text(strtoupper($text1), strtoupper($text2), $simpercentage);
                      if ($simpercentage > 50) {
                        echo "<button type='button' class='btn btn-danger'>" . round($simpercentage) . "%.</button>";
                        echo "<button type='button' class='btn btn-warning'>" . $text1 . "</button>" . "<button type='button' class='btn btn-success'>Simmilar to </button>" . "<button type='button' class='btn btn-warning'>" . $text2 . "</button><br>";
                      }
                      $total_percentage = $total_percentage + round($simpercentage);
                      $total_text = $total_text + 1;
                    }
                  }
                }
                $total_plag = $total_percentage / (count($exp_satu) * 10);
                ?>
              </td>
              <td><?= $total_plag ?> %</td>
            </tr>
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