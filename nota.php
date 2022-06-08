<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link rel="icon" type="image/png" href="https://imageshack.com/i/po3tHrsWp">
	<title>Chi Property</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="cover.css" rel="stylesheet">
  </head>
  <body class="text-center">
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">

  <main role="main" class="inner cover" style="margin-top: 100px">
    <img src="https://imageshack.com/i/po3tHrsWp" alt="logo" align="center" height="20%" width="20%">
    <h1 class="cover-heading">Checkout</h1>
    <?php
        define('DB_SERVER', 'localhost');
        define('DB_USERNAME', 'root');
        define('DB_PASSWORD', '');
        define('DB_NAME', 'login');
        
        $nama= $_POST["nama"];
        $email= $_POST["email"];
        $nomer= $_POST["nomer"];
        $alamat= $_POST["alamat"];
        $alamat2= $_POST["alamat2"];
        $provinsi= $_POST["provinsi"];
        $metode= $_POST["metode"];
        $connection = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
        echo "Nama : $nama <br>";
        echo "Email : $email <br>";
        echo "No Telephone : $nomer<br>";
        echo "Alamat : $alamat<br>";
        echo "Alamat2 : $alamat2<br>";
        echo "Provinsi : $provinsi<br>";
        echo "Metode : $metode<br>";
        $sqlstr="Insert into checkout (id,nama,email,nomer,alamat,alamat2,provinsi,metode) values ('','$nama','$email','$nomer','$alamat','$alamat2','$provinsi','$metode')";
        $result=mysqli_query($connection,$sqlstr) or die(mysqli_error($connection));
        ?>
    <p class="lead">
        <h4>Silahkan tunggu <br>anda akan dihubungi agen kami melalui Email untuk diskusi lebih lanjut<br><br></h4>
      <a href="index.php" class="btn btn-lg btn-secondary">Back to Main Page</a>
  </main>

  <footer class="mastfoot mt-auto">
    <div class="inner">
      <p>Chika Vevita Novelia</p>
    </div>
  </footer>
</div>
</body>
</html>