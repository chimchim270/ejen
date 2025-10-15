<?php
include "koneksi.php";

if (isset($_POST['simpan'])) {
    $nama      = $_POST['nama'];
    $alamat    = $_POST['alamat'];
    $no_hp     = $_POST['no_hp'];
    
    $sql = "INSERT INTO anggota (nama, alamat, no_hp) VALUES ('$nama', '$alamat', '$no_hp')";
    if (mysqli_query($conn, $sql)) {
        header("Location: tampil.php");
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html>
<head><title> Tambah Data </title></head>
<body>
    <h2> Tamabah Data Siswa </h2>
    <form method="POST">
        Nama: <input type="text" name="nama"><br>
        Alamat: <input type="text" name="alamat"><br>
        no_hp: <input type="text" name="no_hp"><br>
        <button type="submit" name="simpan"> Simpan </button>
    </form>
</body>
</html>