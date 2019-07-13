<!DOCTYPE html>
<html>
<head>
      <title></title>
</head>
<body>
<?php include 'cek-login.php'; ?>
<h1>HALAMAN ADMIN</h1>
<h3><?php echo "Selamat Datang, Pak ".$_SESSION['username']; ?></h3>
<a href="logout.php">Logout</a>
</body>
</html>