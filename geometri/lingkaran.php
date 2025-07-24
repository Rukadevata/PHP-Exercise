<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lingkaran</title>
</head>
<body>
    <h1>Lingkaran</h1>
    <form action="" method="post">
        Jari-jari: <input type="number" name="jari" required><br>
        <input type="submit" value="Hitung">
    </form>
</body>
</html>
<?php
if (isset($_POST['jari'])) {
    $r = $_POST['jari'];
    $luas = 3.14 * $r * $r;
    $keliling = 2 * 3.14 * $r;
    echo "Luas: $luas<br>";
    echo "Keliling: $keliling";
}
?>