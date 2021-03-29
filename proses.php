<?php
// memanggil inc.php
include "inc.php";
// menampilkan nilai dari variabel angka
echo $angka;
echo "<br>";

if ($angka==100) {
  // jika nilai 100
  echo "Memuaskan";
} elseif ($angka < 100 && $angka >= 85) {
  // jika nilai <100 dan >=85
  echo "Sangat Baik";
} elseif ($angka < 85 && $angka >= 70) {
  // jika nilai <85 dan >=70
  echo "Baik";
} elseif ($angka < 70 && $angka >= 55) {
  // jika nilai <70 dan >=55
  echo "Cukup";
} elseif ($angka < 55 && $angka >= 0) {
  // jika nilai <55 dan >=0
  echo "Kurang";
}
?>