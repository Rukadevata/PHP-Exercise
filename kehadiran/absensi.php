<?php include 'koneksi.php'; ?>
<h2>Form Absensi Siswa</h2>

<form method="post" action="simpan.php">
    Tanggal: <input type="date" name="tanggal" required><br><br>

    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Jurusan</th>
            <th>Status</th>
        </tr>

        <?php
        $result = mysqli_query($conn, "SELECT * FROM siswa ORDER BY nama");
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                <td>{$row['nama']}</td>
                <td>{$row['kelas']}</td>
                <td>{$row['jurusan']}</td>
                <td>
                    <select name='status[{$row['id']}]'>
                        <option value='HADIR'>HADIR</option>
                        <option value='TIDAK HADIR'>TIDAK HADIR</option>
                        <option value='IZIN'>IZIN</option>
                        <option value='SAKIT'>SAKIT</option>
                    </select>
                </td>
            </tr>";
        }
        ?>
    </table><br>

    <input type="submit" value="Simpan Absensi">
</form>
