<?php include 'koneksi.php'; ?>
<h2>Tambah Siswa</h2>

<form method="post">
    Nama Siswa: <input type="text" name="nama" required><br><br>

    Kelas:
    <select name="kelas" required>
        <option value="X">X</option>
        <option value="XI">XI</option>
        <option value="XII">XII</option>
    </select><br><br>

    Jurusan:
    <select name="jurusan" required>
        <option value="PPLG">PPLG</option>
        <option value="TJKT">TJKT</option>
        <option value="AKL">AKL</option>
        <option value="MPLB">MPLB</option>
    </select><br><br>

    <input type="submit" name="submit" value="Tambah">
</form>

<?php
if (isset($_POST['submit'])) {
    $nama    = mysqli_real_escape_string($conn, $_POST['nama']);
    $kelas   = $_POST['kelas'];
    $jurusan = $_POST['jurusan'];

    $sql = "INSERT INTO siswa (nama, kelas, jurusan) VALUES ('$nama', '$kelas', '$jurusan')";
    if (mysqli_query($conn, $sql)) {
        echo "✅ Siswa berhasil ditambahkan!<br>";
        echo '<form action="index.php">
                <button type="submit">Kembali</button>
              </form>';
    } else {
        echo "❌ Gagal menambahkan: " . mysqli_error($conn);
    }
}
?>