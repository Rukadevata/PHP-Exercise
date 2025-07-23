<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
    <style>
        table {
        width: 90%;
        margin: 30px auto;
        }
        table, tr, th, td {
            border: 1px solid;
            border-collapse: collapse;
            text-align: center;
        }
    </style>
</head>
<body>
    <h1 align="center">Data Siswa</h1>
    <table>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Umur</th>
            <th>Email</th>
        </tr>
        <?php
        // memanggil data table dari database
        require_once('koneksi.php');
        $data = mysqli_query($koneksi, "SELECT * FROM tabel_siswa");

        // tampilkan data siswa
        while($siswa = mysqli_fetch_assoc($data)) : ?>
        <tr>
            <td><?= isset($i) ? ++$i : $i = 1; ?></td>
            <td><?= $siswa['nama']; ?></td>
            <td><?= $siswa['umur']; ?></td>
            <td><?= $siswa['email']; ?></td>
        </tr>
        <?php
        endwhile;
        ?>
    </table>
</body>
</html>