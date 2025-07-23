<?php
// menampilkan string/variable
echo "Bama<br><br>";

// membuat variable
$var = 1;

$angka = [1,2,3,4,5,6,7,8,9];
echo $angka[8] . "<br><br>";

// data siswa dalam bentuk array asosiatif
$siswa = [
    [
        "nama" => "Bama",
        "umur" => 15,
        "email" => "bama123@gmail.com"
    ],
    [
        "nama" => "Maulana",
        "umur" => 17,
        "email" => "maulana99@gmail.com"
    ],
    [
        "nama" => "Wibisana",
        "umur" => 18,
        "email" => "wibisana@gmail.com"
    ],
];

// Menampilkan semua data siswa
foreach ($siswa as $data) {
    echo "Nama: " . $data["nama"] . "<br>";
    echo "Umur: " . $data["umur"] . "<br>";
    echo "Email: " . $data["email"] . "<br><br>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan</title>
</head>
<body>
    <h1>Latihan</h1>
    <p>Ini adalah latihan</p>

    
    <!-- Menampilkan data siswa dalam bentuk tabel-->
    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Umur</th>
            <th>Email</th>
        </tr>
        <?php
        $no = 1;
        foreach ($siswa as $data) {
            echo "<tr>";
            echo "<td>" . $no++ . "</td>";
            echo "<td>" . $data["nama"] . "</td>";
            echo "<td>" . $data["umur"] . "</td>";
            echo "<td>" . $data["email"] . "</td>";
            echo "</tr>";
       }
       ?>
    </table>
</body>
</html>