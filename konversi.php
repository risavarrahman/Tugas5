<html>
  <head>
    <title>Konversi Tipe</title>
  </head>
  <body>
    <?php
      // deklarasi variable a
      $a = 300.4;

      // menampilkan nilai a, tipe double, integer dan string
      echo $a;
      echo "<br>";
      echo "tipe Double : ", doubleval($a), "<br>";
      echo "tipe Integer : ", intval($a), "<br>";
      echo "tipe String : ", strval($a);
    ?>
  </body>
</html>