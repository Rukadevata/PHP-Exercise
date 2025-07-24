<?php
include 'koneksi.php';

$tanggal = $_POST['tanggal'];
$statusList = $_POST['status'];

foreach ($statusList as $siswa_id => $status) {
    $siswa_id = (int)$siswa_id;
    $status = mysqli_real_escape_string($conn, $status);
    $tanggal = mysqli_real_escape_string($conn, $tanggal);

    $sql = "INSERT INTO absensi (siswa_id, tanggal, status) VALUES ('$siswa_id', '$tanggal', '$status')";
    mysqli_query($conn, $sql);
}

echo "✅ Absensi berhasil disimpan. <br>";
echo '<form action="index.php">
        <button type="submit">Kembali</button>
      </form>'
?>
