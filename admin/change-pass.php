<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Ganti Password | Inventory Barang</title>

  <!-- Bootstrap core CSS -->
  <link href="../assets/css/bootstrap.css" rel="stylesheet">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="../assets/fonts/css/all.css">

</head>

<body>

<!-- Cek Login -->
<?php include '../inc/cek-login.php'; ?>

 <!-- Navigation -->
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
    <div class="container">
      <a class="navbar-brand" href="#">Inventory Barang</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <!-- <li class="nav-item">
            <a class="nav-link" href="index.php"><i class="fas fa-home"></i> Home
            </a>
          </li>
        </ul> -->
        <form class="form-inline">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  </form>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user"></i> <?php echo $_SESSION['username'];?>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="change-pass.php"><i class="fas fa-cog"></i> Ganti Password ..</a>
          <a class="dropdown-item" href="https://github.com/muhrizki1996/aplikasi-inventory-barang-sederhana/"><i class="fab fa-github"></i> View on GitHub ..</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
        </div>
      </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">
  <h2>Ganti Password</h2>
    <p>Ganti passwod anda disini.</p>
<?php 
      if(isset($_GET['pesan'])){
            $pesan = $_GET['pesan'];
            if($pesan == "sukses"){
                  echo "Username dan atau Password berhasil di ganti.";
            }else if($pesan == "errorkonfirmpass"){
                  echo "Error, konfirmasi password salah.";
            }else if($pesan == "error"){
                  echo "Error, password lama salah.";
            }
      }
?>

<form class="form" action="changepass-aksi.php" method="post">
<fieldset disabled>
    <div class="form-group">
      <label for="disabledTextInput">Username</label>
      <input type="text" name="akun" class="form-control mx-sm-3" value="<?php echo $_SESSION['username'];?>" required>
    </div>
    </fieldset>
  <div class="form-group">
    <label for="inputPassword6">Old Password</label>
    <input type="password" name="password" class="form-control mx-sm-3" aria-describedby="passwordHelpInline" placeholder="Password Lama" autofocus required>
    <small id="passwordHelpInline" class="text-muted">
      *required.
    </small>
  </div>
  <div class="form-group">
    <label for="inputPassword6">New Password</label>
    <input type="password" name="newpassword" class="form-control mx-sm-3" aria-describedby="passwordHelpInline" placeholder="Password Baru" required>
    <small id="passwordHelpInline" class="text-muted">
      *required.
    </small>
  </div>
  <div class="form-group">
    <label for="inputPassword6">Confirm New Password</label>
    <input type="password" name="confirmnewpassword" class="form-control mx-sm-3" aria-describedby="passwordHelpInline" placeholder="Konfirmasi Password Baru" required>
    <small id="passwordHelpInline" class="text-muted">
      *required.
    </small>
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
</form>
</div>
</body>
</html>