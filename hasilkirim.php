<?php
// jika kosong maka akan redirect ke kosong.php
if (empty($_POST['nama'])) {
  header("Location:kosong.php");
} else {
  // menampilkan nama
  echo "<center>Nama : " .$_POST['nama']."</center><br>";
}
?>