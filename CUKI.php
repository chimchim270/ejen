<?php
include "koneksi.php";
$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM siswa WHERE id=$id");
$data = mysqli_fetch_assoc($result);

if (isset($_POST['update'])) {
    $nama     = $_POST['nama'];
    $jurusan  = $_POST['jurusan'];
    $angkatan = $_POST['angkatan'];

    $sql = "UPDATE siswa SET nama='$nama', jurusan='$jurusan', angkatan='$angkatan' WHERE id=$id"; 
    if (mysqli_query($conn, $sql)) {
        header("Location: tampil.php");
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html>
<head> <title> Edit Data </title></head>
<body>
    <h2> Edit Data Siswa </h2>
    <form method="POST">
        Nama: <input type="text" name="nama" value="<?= $data['nama']; ?>"><br>
        Jurusan: <input type="text" name="jurusan" value="<?= $data['jurusan']; ?>"><br>
        Angkatan: <input type="text" name="angkatan" value="<?= $data['angkatan']; ?>"><br>
        <button type="submit" name="update"> Update </button>
    </form>
</body>
</html>