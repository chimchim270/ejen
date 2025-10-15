<?php
include "../backend/koneksi.php";
$result = mysqli_query($conn, "SELECT * FROM anggota");
?>
<!DOCTYPE html>
<html>
<head>
    <title> judul </title>
</head>
<body>
    <h2> Daftar Siswa </h2>
    <a href="../backend/insert.php"> Tambah Data </a><br><br>
    <table border="1" cellpadding="5">
        <tr><th>ID</th><th>Nama</th><th>alamat</th><th>no_hp</th><th>Aksi</th></tr>
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td><?= $row['id']; ?></td>
            <td><?= $row['nama']; ?></td>
            <td><?= $row['alamat']; ?></td>
            <td><?= $row['no_hp']; ?></td>
            <td>
                <a href="../backend/update.php?id=<?= $row['id']; ?>"> Edit </a> |
                <a href="../backend/delete.php?id=<?= $row['id']; ?>" onclick="return confirm('Yakin hapus?')"> Hapus </a> |
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>