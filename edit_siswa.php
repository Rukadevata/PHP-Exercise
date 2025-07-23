<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Siswa</title>
</head>
<body>
    
<h1>Ubah Data Siswa</h1>

<?php
require_once('koneksi.php');
$data=mysqli_query($koneksi, "SELECT * FROM tabel_siswa WHERE id= 1");
$data_siswa=mysqli_fetch_assoc($data);
// var_dump($data_siswa);
?>

<form action="" method="get">
    <input type="text" name="nama_siswa" id="nama_siswa" value="<?=$data_siswa['nama']; ?>">
    <input type="number" name="umur" id="umur" value="<?=$data_siswa['umur']; ?>">
    <input type="email" name="email" id="email" value="<?=$data_siswa['email']; ?>">
    <button type="submit" name="tambah">Tambah</button>
</form>

<?php
// mengambil data dari form menggunakan $_POST
// pengecekan ketika data di ubah
if(isset($_POST['ubah'])) {
    $nama = $_POST['nama'];
    $umur = $_POST['umur'];
    $email = $_POST['email'];

    // koneksi ke database
    require_once('koneksi.php');

    // update data
    $result = mysqli_query($koneksi, "UPDATE tabel_siswa SET nama='$nama', umur='$umur', email='$email' WHERE id=1") or die (mysqli_error($koneksi));

    // cek apabila data berhasil diinput
    if($result) {
        echo "<script>window.alert('data berhasil ditambahkan!');</script>";
    }
}


?>

</body>
</html>