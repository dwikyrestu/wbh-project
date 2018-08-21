<?php
echo date('m-Y');
for ($i = 1; $i < 6; $i++) {
  echo date('F-Y', strtotime("-$i month"));
}
$bulan="August";
$tahun="2018";
echo "</br>";
echo $bultah = $bulan."-".$tahun;

?>
