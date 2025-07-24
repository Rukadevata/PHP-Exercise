<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Persegi</title>
</head>
<body>
    <h1>Persegi</h1>
    <form action="" method="post">
        Sisi: <input type="text" name="sisi"><br>
        <input type="submit" value="Hitung">
    </form>
</body>
</html>
<?php
if (isset($_POST['sisi'])) {
    $s = $_POST['sisi'];
    $luas = $s * $s;
    $keliling = 4 * $s;
    echo "Luas: $luas<br>";
    echo "Keliling: $keliling<br>";
}
?>