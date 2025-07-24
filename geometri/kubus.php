<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kubus</title>
</head>
<body>
    <h1>Kubus</h1>
    <form action="" method="post">
        Sisi: <input type="number" name="sisi" required><br>
        <input type="submit" value="Hitung">
    </form>
</body>
</html>
<?php
if (isset($_POST['sisi'])) {
    $s = $_POST['sisi'];
    $luas = 6 * $s * $s;
    $volume = $s * $s * $s;
    echo "Luas: $luas<br>";
    echo "Volume: $volume";
}
?>