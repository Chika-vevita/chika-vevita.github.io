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
    <link href="carousel.css" rel="stylesheet">
  </head>
  <body>
    <header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <img src="https://imageshack.com/i/po3tHrsWp" width="30" height="30" style="margin: 0px 15px 0px 0px" class="inline-block" alt="logo">
    <a class="navbar-brand" style="margin: 1.5px 20px 0px 0px" href="about.php" target="_blank">
     CHI PROPERTY</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="margin-right: 10px">
          Login
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <form class="px-4 py-3.5" action="welcome2.php" method="post" action="welcome2.php" method="post">
                <div class="form-group">
                  <label for="exampleDropdownFormEmail1">Email address</label>
                  <input type="email" class="form-control" id="exampleDropdownFormEmail1" placeholder="email@example.com" name="email">
                </div>
                <div class="form-group">
                  <label for="exampleDropdownFormPassword1">Password</label>
                  <input type="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Password" name="password">
                </div>
                <button type="submit" class="btn btn-primary">Sign in</button>
              </form>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="signup.php" target="_blank">New around here? Sign up</a>
            </div>
      </li>
    <li class="nav-item" style="margin-right: 10px">
          <a class="nav-link" href="rumah.php" target="_blank">Rumah</a>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Properti
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="perabotan.php" target="_blank">Meja Makan</a>
          <a class="dropdown-item" href="perabotan.php" target="_blank">Meja Belajar</a>
          <a class="dropdown-item disabled" href="#">Almari</a>
            <a class="dropdown-item" href="perabotan.php" target="_blank">Sofa</a>
        </div>
      </li>
      </ul>
      <form class="form-inline mt-2 mt-md-0">
      </form>
    </div>
  </nav>
</header>

<main role="main">

  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><img src="https://imageshack.com/i/poxabbKej" class="d-block w-100" alt="slide1"></svg>
        <div class="container">
          <div class="carousel-caption">
              <img src="https://imageshack.com/i/po3tHrsWp" width="100" height="95" style="margin: 0px 15px 0px 0px" class="inline-block" alt="logo"><font size="7" color="#fff" face="Algerian"><a style="margin: 20px 0px 0px 0px">CHI PROPERTY</a>?</font>
            <p>Website Terpercaya Solusi Hunian Anda<br>
              Jual Beli Rumah Mudah dan Cepat</p>
            <p><a class="btn btn-lg btn-primary" href="signup.php" target="_blank" role="button">Sign up today</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><img src="https://imageshack.com/i/pmzKGComj" class="d-block w-100" alt="slide2"></svg>
        <div class="container">
          <div class="carousel-caption">
            <h1>Tersedia Berbagai Tipe Rumah</h1>
            <p>Jadikan impian rumah anda terwujud bersama kami agen terpercaya dan terkini.</p>
            <p><a class="btn btn-lg btn-primary" href="rumah.php" role="button">Browse gallery</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><img src="https://imageshack.com/i/pm3njOK8j" class="d-block w-100" alt="slide3"></svg>
        <div class="container">
          <div class="carousel-caption text-right">
            <h1>Perabotan Rumah</h1>
            <p>Belanja perabotan rumah tak perlu ribet tinggal klik langsung bisa pesan.</p>
            <p><a class="btn btn-lg btn-primary" href="perabotan.php" role="button">Browse gallery</a></p>
          </div>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="card" style="width: 320px;margin: 0px 10px 25px 50px;display: inline-block">
  <img src="https://imageshack.com/i/pnxLzKgGj" class="card-img-top" alt="">
  <div class="card-body">
      <center><h5 class="card-title">Jayana 37</h5></center>
    <p class="card-text">Jayana Valley Tipe 37/46 merupakan tipe rumah 2 lantai. Tipe 37/46 memiliki luas bangunan 37 meter<sup>2</sup> dan luas tanah 46 meter<sup>2</sup></p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Listrik : 1300 watt</li>
    <li class="list-group-item">Kamar Tidur : 2</li>
    <li class="list-group-item">Lahan : 46 m<sup>2</sup></li>
  </ul>
  <div class="card-body">
    <center><a href="rumah.php" target="_blank" class="card-link">Check page >>>></a></center>
  </div>
</div>
    
<div class="card" style="width: 320px;margin: 00px 10px 25px 10px;display: inline-block">
  <img src="https://imageshack.com/i/pmZE9uF4j" class="card-img-top" alt="state">
  <div class="card-body">
    <center><h5 class="card-title">Estate A</h5></center>
    <p class="card-text">Premier Estate 3 Tipe A merupakan tipe rumah 2 lantai yang memiliki luas bangunan 135 m<sup>2</sup> dan luas tanah 135 m<sup>2</sup>.</p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Listrik : 3500 watt</li>
    <li class="list-group-item">Kamar Tidur : 4</li>
    <li class="list-group-item">Lahan : 135 m<sup>2</sup></li>
  </ul>
  <div class="card-body">
      <center><a href="rumah.php" target="_blank" class="card-link">Check page >>>></a></center>
  </div>
</div>
    
<div class="card" style="width: 320px;margin: 0px 10px 25px 10px;display: inline-block">
  <img src="https://imageshack.com/i/poR6EWilj" class="card-img-top" alt="">
  <div class="card-body">
    <center><h5 class="card-title">Clover Hill</h5></center>
    <p class="card-text">Clover Hill Tipe New Grandia merupakan tipe rumah 2 lantai yang memiliki luas bangunan 139 m<sup>2</sup> dan luas tanah 119 m<sup>2</sup>.</p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Listrik : 3500 watt</li>
    <li class="list-group-item">Kamar Tidur : 3</li>
    <li class="list-group-item">Lahan : 119 m<sup>2</sup></li>
  </ul>
  <div class="card-body">
    <center><a href="rumah.php" target="_blank" class="card-link">Check page >>>></a></center>
  </div>
</div>
    </div><!-- /.col-lg-4 --><!-- /.row -->


    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7" style="text-align:center">
        <a href="checkout.php" target="_blank"><h2 class="featurette-heading" >Meja Makan Elegan Warna Kayu dan Putih<br>Rp. 2.050.000,-</h2></a>
        <p class="lead">Miliki segera meja makan elegan ini. Memiliki warna putih dan corak kayu. Sangat cocok menemani sarapan hingga makan malam keluarga anda</p>
      </div>
      <div class="col-md-5">
        <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" src="https://imageshack.com/i/pl1KQ0Adj" aria-label="Placeholder: 500x500"><title>Placeholder</title>
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2" style="text-align:center">
        <a href="checkout.php" target="_blank"><h2 class="featurette-heading">Meja Belajar Keren<br>Rp. 4.500.000,-</h2></a>
        <p class="lead">Jadikan belajar anak anda menjadi lebih bersemangat, dengan meja belajar keren ini. Belajar nyaman prestasi meningkat</p>
      </div>
      <div class="col-md-5 order-md-1">
        <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" src="https://imageshack.com/i/ploskFcHj" aria-label="Placeholder: 500x500"><title>Placeholder</title>
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7" style="text-align:center">
        <a href="checkout.php" target="_blank"><h2 class="featurette-heading">Sofa Nyaman Idaman<br>Rp. 5.050.000,-</h2></a>
        <p class="lead">Berkumpul dengan keluarga akan terasa semakin nyaman dengan sofa idaman. Miliki segera agar keluarga anda dapat merasakan nyamannya rumah serasa seperti liburan.</p>
      </div>
      <div class="col-md-5">
        <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" src="https://imageshack.com/i/pnthBZw9j" aria-label="Placeholder: 500x500"><title>Placeholder</title>
      </div>
    </div>

    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->
    <!-- /.container -->


  <!-- FOOTER -->
  <footer class="container">
    <p class="float-right"><a href="#">Back to top</a></p>
    <p>&copy; Chika Vevita Novelia</p>
  </footer>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"><\/script>')</script></main></body>
</html>
