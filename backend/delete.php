<?php
include "koneksi.php";

$id = $_GET['id'];

$sql = "DELETE FROM anggota WHERE id=$id";

if (mysqli_query($conn, $sql)) {
    header("Location: tampil.php");
} else {
    echo "Error: " . mysqli_error($conn);
}
?>
