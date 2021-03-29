<?php 
// Menyeleksi inputan
if (empty($_POST['inputnama'] && $_POST['inputemail'])) {
    header("Location:redirectlatihan_no2.php");
} else {
    echo "<center>Nama :".$_POST['inputnama']."</center><br>";
    echo "<center>Email :".$_POST['inputemail']."</center><br>";
    echo "<center> Anda login pada :".date("d-F-Y")."</center>";
}
?>