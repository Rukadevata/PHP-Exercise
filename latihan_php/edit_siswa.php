<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Siswa</title>
</head>
<body>

<h1>Edit Data Siswa</h1>

<?php
require_once('koneksi.php');
$id = $_GET['id'] ?? 0;
$data = mysqli_query($koneksi, "SELECT * FROM tabel_siswa WHERE id='$id'");
$data_siswa = mysqli_fetch_assoc($data);

if(!$data_siswa){
    echo "Data tidak ditemukan.";
    exit;
}
?>

<form action="" method="post">
    <input type="text" name="nama" value="<?= htmlspecialchars($data_siswa['nama']); ?>" required><br><br>
    <input type="number" name="umur" value="<?= $data_siswa['umur']; ?>" required><br><br>
    <input type="email" name="email" value="<?= htmlspecialchars($data_siswa['email']); ?>" required><br><br>
    <button type="submit" name="ubah">Simpan Perubahan</button>
</form>

<?php
if(isset($_POST['ubah'])) {
    $nama = $_POST['nama'];
    $umur = $_POST['umur'];
    $email = $_POST['email'];

    $result = mysqli_query($koneksi, "UPDATE tabel_siswa SET nama='$nama', umur='$umur', email='$email' WHERE id='$id'");

    if($result) {
        echo "<script>alert('Data berhasil diubah!'); window.location.href='data_siswa.php';</script>";
    } else {
        echo "<script>alert('Gagal mengubah data!');</script>";
    }
}
?>

</body>
</html>