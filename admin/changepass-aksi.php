<?php 
 
include '../inc/koneksi.php';

// membaca pass lama, dan baru dari form

$akun = $_POST['akun'];
$username = $_POST['username'];
$password = $_POST['password'];
$newpassword = $_POST['newpassword'];
$confirmnewpassword = $_POST['confirmnewpassword'];

// cek benar tidaknya password dan username yang lama

$query = "SELECT * FROM admin WHERE username = '$akun'";
$hasil = mysql_query($query);
$data  = mysql_fetch_array($hasil);

// ganti username

// if($data['username'] == ($akun))
// {
//     $query = "UPDATE admin SET username = '$username' WHERE username = '$akun' ";
//     $hasil1 = mysql_query($query);
//     if ($hasil1) header("location:pass.php?pesan=sukses");
// }

// ganti password

if ($data['password'] == md5($password))
{
    // jika password lama benar, maka cek kesesuaian password baru 1 dan 2
    if ($newpassword == $confirmnewpassword)
    {
        // jika password baru 1 dan 2 sama, maka proses update password dilakukan

        // enkripsi password baru sebelum disimpan ke db

        $passwordbaruenkrip = md5($newpassword);

        $query = "UPDATE admin SET password = '$passwordbaruenkrip' WHERE username = '$akun' ";
        $hasil = mysql_query($query);
        if ($hasil) header("location:logout.php");
    }
    else header("location:pass.php?pesan=errorkonfirmpass");
}
else header("location:pass.php?pesan=error");
      ?>