<?php
include 'inc/koneksi.php';

$username = $_POST['username'];
$password = md5($_POST['password']);

$query = mysql_query("select * from admin where username='$username' and password='$password'");
$cek = mysql_num_rows($query);
if($cek > 0){
      session_start();
      $_SESSION['username'] = $username;
      $_SESSION['status'] = 'login';
header("location:admin/index.php"); 
            }
            else {
                  header("location:index.php");
                  }
?>