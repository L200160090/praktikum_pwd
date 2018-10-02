<html>
  <head>
    <title>Program Penjumlahan</title>
  </head>
  <body>
    <form method="post" action="tugas.php" autocomplete="off">
      <p>Nilai A adalah <input type="text" name="nilaiA"></p>
      <p>Nilai B adalah <input type="text" name="nilaiB"></p>
      <p><input type="submit" name="submit" value="Jumlahkan"></p>
    </form>

    <?php
      error_reporting(E_ALL ^ E_NOTICE);
      $nilaiA = $_POST['nilaiA'];
      $nilaiB = $_POST['nilaiB'];
      $submit = $_POST['submit'];
      $hasil = ($nilaiA + $nilaiB);
      if($submit) {
      echo "Nilai A adalah $nilaiA<br>";
      echo "Nilai B adalah $nilaiB<br>";
      echo "Jadi Nilai A ditambah Nilai B adalah $hasil";
    }
    ?>
  </body>
</html>
