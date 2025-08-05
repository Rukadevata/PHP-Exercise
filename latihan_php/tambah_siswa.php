<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Siswa</title>
</head>
<body>

<h1>Tambah Data Siswa</h1>

<form action="" method="post">
    <input type="text" name="nama_siswa" placeholder="Isi Nama..." required><br><br>
    <input type="number" name="umur" placeholder="Isi Umur..." required><br><br>
    <input type="email" name="email" placeholder="Isi Email..." required><br><br>
    <button type="submit" name="tambah">Tambah</button>
</form>

<?php
if(isset($_POST['tambah'])) {
    require_once('koneksi.php');
    $nama = $_POST['nama_siswa'];
    $umur = $_POST['umur'];
    $email = $_POST['email'];

    $result = mysqli_query($koneksi, "INSERT INTO tabel_siswa (nama, umur, email) VALUES ('$nama', '$umur', '$email')");

    if($result) {
        echo "<script>alert('Data berhasil ditambahkan!'); window.location.href='data_siswa.php';</script>";
    } else {
        echo "<script>alert('Gagal menambahkan data!');</script>";
    }
}
?>

</body>
</html>