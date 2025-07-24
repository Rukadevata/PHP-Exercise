<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Segitiga</title>
</head>
<body>
    <h1>Segitiga</h1>
    <form action="" method="post">
        Alas: <input type="text" name="alas"><br>
        Tinggi: <input type="text" name="tinggi"><br>
        <input type="submit" value="Hitung">
    </form>
</body>
</html>
<?php
if (isset($_POST['alas']) && isset($_POST['tinggi'])) {
    $a = $_POST['alas'];
    $t = $_POST['tinggi'];
    $luas = 1/2 * $a * $t;
    echo "Luas: $luas<br>";
}
?>