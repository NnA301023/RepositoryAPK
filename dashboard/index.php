<?php
session_start();
include_once './layouts/head.php';
require_once '../library/config.php';
require_once '../library/function.php';
?>
<title>Dashboard - Repository Teknik Elektro Unsika</title>

<body>
  <?php
  include_once './layouts/header.php';
  include_once './layouts/sidebar.php';
  ?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">
        <?php
        if ($_SESSION['user']['role'] != 3) :
        ?>
          <div class="col-xxl-4 col-md-6">
            <div class="card info-card shadow text-primary">
              <div class="card-body">
                <h5 class="card-title">Jumlah Pengguna</h5>
                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-person"></i>
                  </div>
                  <div class="ps-3">
                    <h6><?= count_data('user') ?></h6>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xxl-4 col-md-6">
            <div class="card info-card shadow text-success">
              <div class="card-body">
                <h5 class="card-title">Jumlah Artikel</h5>
                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-newspaper"></i>
                  </div>
                  <div class="ps-3">
                    <h6><?= count_data('post', "jenis='1'") ?></h6>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xxl-4 col-md-6">
            <div class="card info-card shadow text-info">
              <div class="card-body">
                <h5 class="card-title">Jumlah Skripsi</h5>
                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-mortarboard"></i>
                  </div>
                  <div class="ps-3">
                    <h6><?= count_data('post', "jenis='2'") ?></h6>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xxl-4 col-md-6">
            <div class="card info-card shadow text-warning">
              <div class="card-body">
                <h5 class="card-title">Jumlah Dokumen Engineering</h5>
                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-journal"></i>
                  </div>
                  <div class="ps-3">
                    <h6><?= count_data('post', "jenis='3'") ?></h6>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Jumlah Dokumen Tersimpan <span>Bulanan</span></h5>
                <div>
                  <canvas id="myChart"></canvas>
                </div>
                <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                <?php
                include_once 'grafik.php';
                ?>
                <script>
                  function number_format(number, decimals, dec_point, thousands_sep) {
                    // *     example: number_format(1234.56, 2, ',', ' ');
                    // *     return: '1 234,56'
                    number = (number + '').replace(',', '').replace(' ', '');
                    var n = !isFinite(+number) ? 0 : +number,
                      prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
                      sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
                      dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
                      s = '',
                      toFixedFix = function(n, prec) {
                        var k = Math.pow(10, prec);
                        return '' + Math.round(n * k) / k;
                      };
                    // Fix for IE parseFloat(0.55).toFixed(0) = 0;
                    s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
                    if (s[0].length > 3) {
                      s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
                    }
                    if ((s[1] || '').length < prec) {
                      s[1] = s[1] || '';
                      s[1] += new Array(prec - s[1].length + 1).join('0');
                    }
                    return s.join(dec);
                  }
                  const ctx = document.getElementById('myChart');
                  let lineChart = new Chart(ctx, {
                    type: 'line',
                    data: {
                      labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                      datasets: [{
                        label: "Jumlah Tersimpan",
                        lineTension: 0.3,
                        backgroundColor: "rgba(78, 115, 223, 0.05)",
                        borderColor: "rgba(78, 115, 223, 1)",
                        pointRadius: 3,
                        pointBackgroundColor: "rgba(78, 115, 223, 1)",
                        pointBorderColor: "rgba(78, 115, 223, 1)",
                        pointHoverRadius: 3,
                        pointHoverBackgroundColor: "rgba(78, 115, 223, 1)",
                        pointHoverBorderColor: "rgba(78, 115, 223, 1)",
                        pointHitRadius: 10,
                        pointBorderWidth: 2,
                        data: [<?= $grafik['jumlah_post_jan'] . "," .  $grafik['jumlah_post_feb'] . "," . $grafik['jumlah_post_mar'] . "," . $grafik['jumlah_post_apr'] . "," . $grafik['jumlah_post_may'] . "," . $grafik['jumlah_post_jun'] . "," . $grafik['jumlah_post_jul'] . "," . $grafik['jumlah_post_aug'] . "," . $grafik['jumlah_post_sep'] . "," . $grafik['jumlah_post_okt'] . "," . $grafik['jumlah_post_nov'] . "," . $grafik['jumlah_post_des'] ?>, ],
                      }]
                    },
                    options: {
                      maintainAspectRatio: false,
                      layout: {
                        padding: {
                          left: 10,
                          right: 25,
                          top: 25,
                          bottom: 0
                        }
                      },
                      scales: {
                        xAxes: [{
                          time: {
                            unit: 'date'
                          },
                          gridLines: {
                            display: false,
                            drawBorder: false
                          },
                          ticks: {
                            maxTicksLimit: 7
                          }
                        }],
                        yAxes: [{
                          ticks: {
                            maxTicksLimit: 5,
                            padding: 10,
                            callback: function(value, index, values) {
                              return number_format(value);
                            }
                          },
                          gridLines: {
                            color: "rgb(234, 236, 244)",
                            zeroLineColor: "rgb(234, 236, 244)",
                            drawBorder: false,
                            borderDash: [2],
                            zeroLineBorderDash: [2]
                          }
                        }],
                      },
                      legend: {
                        display: false
                      },
                      tooltips: {
                        backgroundColor: "rgb(255,255,255)",
                        bodyFontColor: "#858796",
                        titleMarginBottom: 10,
                        titleFontColor: '#6e707e',
                        titleFontSize: 14,
                        borderColor: '#dddfeb',
                        borderWidth: 1,
                        xPadding: 15,
                        yPadding: 15,
                        displayColors: false,
                        intersect: false,
                        mode: 'index',
                        caretPadding: 10,
                        callbacks: {
                          label: function(tooltipItem, chart) {
                            var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
                            return number_format(tooltipItem.yLabel);
                          }
                        }
                      }
                    }
                  });
                </script>
              </div>
            </div>
          </div>
        <?php
        else :
        ?>
          <div class="col-12">
            <div class="card info-card shadow text-primary">
              <div class="card-body">
                <h5 class="card-title">Jumlah Proposal <span>yang Diajukan</span></h5>
                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-upload"></i>
                  </div>
                  <div class="ps-3">
                    <h6><?= count_data('proposal', 'id_input=' . $_SESSION['user']['id']) ?></h6>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-12">
            <div class="card info-card shadow">
              <div class="card-body">
                <h5 class="card-title">Pengajuan Terakhir</h5>
                <?php
                $id = $_SESSION['user']['id'];
                $data = (read_data("SELECT * FROM `proposal` WHERE `id_input` = $id ORDER BY tgl_input DESC LIMIT 1")[0]) ?? [];
                ?>
                <table>
                  <tr>
                    <th>Judul</th>
                    <td> : <?= ($data['judul']) ?? '-' ?></td>
                  </tr>
                  <tr>
                    <th>Tanggal Mengajukan</th>
                    <td> : <?= ($data['tgl_input']) ?? '-' ?></td>
                  </tr>
                  <tr>
                    <th>Status</th>
                    <td> : 
                      <?php
                      if (($data['status']) ?? '-' == 0) {
                        echo '<span class="badge bg-warning text-dark"><i class="bi bi-clock-history me-1"></i> Menunggu</span>';
                      } else if ($data['status'] == 1) {
                        echo '<span class="badge bg-success"><i class="bi bi-check-circle me-1"></i> Diterima</span>';
                      } else if ($data['status'] == 2) {
                        echo '<span class="badge bg-danger"><i class="bi bi-exclamation-circle me-1"></i> Ditolak</span>';
                      }else{
                        echo '-';
                      }
                      ?>
                    </td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
        <?php
        endif;
        ?>
      </div>
    </section>
  </main><!-- End #main -->

  <?php
  require_once './layouts/footer.php';
  ?>

</body>

</html>