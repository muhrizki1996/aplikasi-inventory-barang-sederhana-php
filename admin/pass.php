<!DOCTYPE html>
<html>
<head>
      <title>Ganti Password</title>

<!-- CSS -->
<link rel="stylesheet" type="text/css" href="../assets/css/style.css">
</head>
<body>
<?php include '../inc/cek-login.php'; ?>
<div class="body-layout">
<b><br><br>
<form action="changepass-aksi.php" method="post">
<div class="result">Anda Log In Sebagai "<?php echo $_SESSION['username'];?>"</div><br>
<center>
<?php 
      if(isset($_GET['pesan'])){
            $pesan = $_GET['pesan'];
            if($pesan == "sukses"){
                  echo "Password berhasil di ganti.";
            }else if($pesan == "errorkonfirmpass"){
                  echo "Error, konfirmasi password salah.";
            }else if($pesan == "error"){
                  echo "Error, password lama salah.";
            }
      }
?></center><br>
        <input type="hidden" name="akun" class="text-input" value="<?php echo $_SESSION['username'];?>" required>
        <!-- <input type="username" name="username" placeholder="Username Baru" class="text-input" autofocus required> -->
        <input type="password" name="password" placeholder="Password Lama" class="text-input" autofocus required>
        <input type="password" name="newpassword" placeholder="Password Baru" class="text-input" required>
        <input type="password" name="confirmnewpassword" placeholder="Ulangi Password Baru" class="text-input" required>
        <br><br>
        <center>
        <input type="reset" value="Clear" class="clear" /> <input type="submit" name="submit" value="Ganti" class="tombol">
        </center>
    </form>
</div>
</body>
</html>