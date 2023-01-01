<?php
require_once '../library/config.php';
require_once '../library/function.php';

$grafik['jumlah_post_jan'] = count_data('post',"MONTH(tgl_input) = 1 AND YEAR(tgl_input) = date('Y');");
$grafik['jumlah_post_feb'] = count_data('post',"MONTH(tgl_input) = 2 AND YEAR(tgl_input) = date('Y');");
$grafik['jumlah_post_mar'] = count_data('post',"MONTH(tgl_input) = 3 AND YEAR(tgl_input) = date('Y');");
$grafik['jumlah_post_apr'] = count_data('post',"MONTH(tgl_input) = 4 AND YEAR(tgl_input) = date('Y');");
$grafik['jumlah_post_may'] = count_data('post',"MONTH(tgl_input) = 5 AND YEAR(tgl_input) = date('Y');");
$grafik['jumlah_post_jun'] = count_data('post',"MONTH(tgl_input) = 6 AND YEAR(tgl_input) = date('Y');");
$grafik['jumlah_post_jul'] = count_data('post',"MONTH(tgl_input) = 7 AND YEAR(tgl_input) = date('Y');");
$grafik['jumlah_post_aug'] = count_data('post',"MONTH(tgl_input) = 8 AND YEAR(tgl_input) = date('Y');");
$grafik['jumlah_post_sep'] = count_data('post',"MONTH(tgl_input) = 9 AND YEAR(tgl_input) = date('Y');");
$grafik['jumlah_post_okt'] = count_data('post',"MONTH(tgl_input) = 10 AND YEAR(tgl_input) = date('Y');");
$grafik['jumlah_post_nov'] = count_data('post',"MONTH(tgl_input) = 11 AND YEAR(tgl_input) = date('Y');");
$grafik['jumlah_post_des'] = count_data('post',"MONTH(tgl_input) = 12 AND YEAR(tgl_input) = date('Y');");

return $grafik;