<?php 
include '../inc/koneksi.php';
$id = $_POST['id'];
$nama_barang = $_POST['nama_barang'];
$status_barang = $_POST['status_barang'];
$penyimpanan_barang = $_POST['penyimpanan_barang'];
$harga_barang = $_POST['harga_barang'];
 
mysql_query("INSERT INTO barang VALUES('$id','$nama_barang','$status_barang','$penyimpanan_barang','$harga_barang')");
 
header("location:index.php?pesan=input");
?>