<?php
//untuk koneksi ke database
session_start();
include ("koneksi.php");

//proses edit
$id_alter   = $_POST['id'];
$alternatif = $_POST['nama'];
$alamat     = $_POST['alamat'];
$jenis_kelamin = $_POST['jenis_kelamin'];

$ubah = mysql_query("UPDATE tab_alternatif SET nama ='".$alternatif."', alamat ='".$alamat."', jenis_kelamin ='".$jenis_kelamin."' WHERE id_alternatif ='".$id."' ");

echo "<script>alert('Ubah Data Dengan ID = ".$id_alter." Berhasil') </script>";
echo "<script>window.location.href = \"alternatif.php\" </script>";
?>
