<?php
include "koneksi.php";
$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM anggota WHERE id=$id");
$data = mysqli_fetch_assoc($result);

if (isset($_POST['update'])) {
    $nama     = $_POST['nama'];
    $alamat   = $_POST['alamat'];
    $no_hp    = $_POST['no_hp'];

    $sql = "UPDATE anggota SET nama='$nama', alamat='$alamat', no_hp='$no_hp' WHERE id=$id";
    if (mysqli_query($conn, $sql)) {
        header("Location: tampil.php");
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html>
<head><title>Edit Data</title></head>
<body>
    <h2>Edit Data Siswa</h2>
    <form method="POST">
        Nama: <input type="text" name="nama" value="<?= $data['nama']; ?>"><br>
        Alamat: <input type="text" name="alamat" value="<?= $data['alamat']; ?>"><br>
        no_hp: <input type="text" name="no_hp" value="<?= $data['no_hp']; ?>"><br>
        <button type="submit" name="update">Update</button>
    </form>
</body>
</html>