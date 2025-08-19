<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Energi Kinetik</title>
</head>
<body>
    <h1>Energi Kinetik</h1>
    <form action="" method="post">
        Massa: <input type="number" name="massa" required>
        Volume: <input type="number" name="volume" required >
        <input type="submit" value="Hitung">
    </form>
</body>
</html>

<?php
if (isset($_POST['massa']) && isset($_POST['volume'])) {
    $m = $_POST['massa'];
    $v = $_POST['volume'];
    $ek = 0.5 * $m * $v *$v;
    echo"Energi Kinetik: $ek";
}
?>