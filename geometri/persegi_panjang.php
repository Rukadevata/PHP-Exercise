<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Persegi Panjang</title>
</head>
<body>
  <h1>Persegi Panjang</h1>
  <form action="" method="post">
    Panjang: <input type="number" name="panjang" required><br>
    Lebar: <input type="number" name="lebar" required><br>
    <input type="submit" value="Hitung">
  </form>
</body>
</html>
<?php
if (isset($_POST['panjang']) && isset($_POST['lebar'])) {
  $p = $_POST['panjang'];
  $l = $_POST['lebar'];
  $luas = $p * $l;
  $keliling = 2 * ($p + $l);
  echo "Luas: $luas<br>";
  echo "Keliling: $keliling";
}
?>