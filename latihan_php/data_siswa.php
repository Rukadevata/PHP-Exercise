<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
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
    <a href="tambah_siswa.php" style="margin-left:5%; display:block;">+ Tambah Siswa</a>
    <table>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Umur</th>
            <th>Email</th>
            <th>Aksi</th>
        </tr>
        <?php
        require_once('koneksi.php');
        $data = mysqli_query($koneksi, "SELECT * FROM tabel_siswa");
        $i = 1;
        while($siswa = mysqli_fetch_assoc($data)) : ?>
        <tr>
            <td><?= $i++; ?></td>
            <td><?= htmlspecialchars($siswa['nama']); ?></td>
            <td><?= $siswa['umur']; ?></td>
            <td><?= htmlspecialchars($siswa['email']); ?></td>
            <td>
                <a href="edit_siswa.php?id=<?= $siswa['id'] ?>">Edit</a> | 
                <a href="hapus_siswa.php?id=<?= $siswa['id'] ?>" onclick="return confirm('Hapus?')">Hapus</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>