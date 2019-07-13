<?php
// isi nama host, username mysql, dan password mysql anda
$host = mysqli_connect("localhost","root","");
if($host){
      echo "koneksi host berhasil.<br/>";
}else{
      echo "koneksi gagal.<br/>";
}
// isikan dengan nama database yang akan di hubungkan 
$db = mysql_select_db("inv-barang");
if($db){
      echo "koneksi database berhasil.";
}else{
      echo "koneksi database gagal.";
} ?>