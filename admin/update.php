<?php 
 
include '../inc/koneksi.php';
$id = $_POST['id'];
$nama_barang = $_POST['nama_barang'];
$status_barang = $_POST['status_barang'];
$penyimpanan_barang = $_POST['penyimpanan_barang'];
$harga_barang = $_POST['harga_barang'];
 
mysql_query("UPDATE barang SET id='$id', nama_barang='$nama_barang', status_barang='$status_barang', penyimpanan_barang='$penyimpanan_barang', harga_barang='$harga_barang' WHERE id='$id'");
 
header("location:index.php?pesan=update");
?>