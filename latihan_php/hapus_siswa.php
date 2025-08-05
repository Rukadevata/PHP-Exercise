<?php
require_once('koneksi.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = mysqli_query($koneksi, "DELETE FROM tabel_siswa WHERE id='$id'");

    if($query) {
        echo "<script>alert('Data berhasil dihapus'); window.location.href='data_siswa.php';</script>";
    } else {
        echo "<script>alert('Gagal menghapus data!'); window.location.href='data_siswa.php';</script>";
    }
} else {
    echo "<script>alert('ID tidak ditemukan!'); window.location.href='data_siswa.php';</script>";
}
?>