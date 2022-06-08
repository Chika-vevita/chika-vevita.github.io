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
    <link href="form-validation.css" rel="stylesheet">
  </head>
    <form action="nota.php" method="post">
  <body class="bg-light">
    <div class="container">
  <div class="py-5 text-center">
    <img class="d-block mx-auto mb-4" src="https://imageshack.com/i/po3tHrsWp" alt="" width="80" height="72">
    <h2>Checkout</h2>
    <p class="lead">Isi form untuk melakukan pemesanan.</p>
  </div>

  <div class="row">
    <div class="col-md-4 order-md-2 mb-4">
      <ul class="list-group mb-3">
        <center><h4>Terima Kasih<br></h4>
        <p>Telah belanja disini</p></center>
      </ul>
        
    </div>
    <div class="col-md-8 order-md-1">
      <div class="mb-3">
          <label for="name">Nama</label>
          <input type="text" class="form-control" name="nama" placeholder="" required>
          <div class="invalid-feedback">
            Valid Name is required.
          </div>
        </div>

        <div class="mb-3">
          <label for="email">Email <span class="text-muted">(Opsional)</span></label>
          <input type="email" class="form-control" name="email" placeholder="kamu@contoh.com">
          <div class="invalid-feedback">
            Please enter a valid email address for shipping updates.
          </div>
        </div>
        
        <div class="mb-3">
          <label for="nomer">No. Telephone</label>
          <input type="text" class="form-control" name="nomer" placeholder="" required>
        </div>

        <div class="mb-3">
          <label for="address">Alamat</label>
          <input type="text" class="form-control" name="alamat" placeholder="Ds. Kembang" required>
          <div class="invalid-feedback">
            Please enter your shipping address.
          </div>
        </div>

        <div class="mb-3">
          <label for="address2">Alamat 2 <span class="text-muted">(Opsional)</span></label>
          <input type="text" class="form-control" name="alamat2" placeholder="Apartemen atau sebagainya">
        </div>

        <div class="row">
          <div class="col-md-5 mb-3">
            <label for="country">Provinsi</label>
            <select class="custom-select d-block w-100" name="provinsi" required>
              <option>Pilih...</option>
              <option>Sumatra Utara</option>
                <option>Sumatra Barat</option>
                <option>Jawa Barat</option>
                <option>Jawa Tengah</option>
                <option>Jawa Timur</option>
                <option>Kalimantan Selatan</option>
                <option>Kalimantan Barat</option>
                <option>Sulawesi Utara</option>
                <option>Bali</option>
                <option>dan lain-lain</option>
            </select>
            <div class="invalid-feedback">
              Please select a valid country.
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <label for="zip">Kode pos</label>
            <input type="text" class="form-control" name="kode pos" placeholder="" required>
            <div class="invalid-feedback">
              Zip code required.
            </div>
          </div>
        </div>

        <h4 class="mb-3">Metode Pembayaran</h4>

        <div class="d-block my-3">
          <div class="custom-control custom-radio">
            <input id="credit" name="metode" type="radio" class="custom-control-input" checked required>
            <label class="custom-control-label" for="credit">Transfer ATM</label>
          </div>
          <div class="custom-control custom-radio">
            <input id="debit" name="metode" type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="debit">Pembayaran melalui Alfamart dan Indomart</label>
          </div>
          <div class="custom-control custom-radio">
            <input id="paypal" name="metode" type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="paypal">COD (Cash On Delivery)</label>
          </div>
        </div>
        <hr class="mb-4">
        <button class="btn btn-primary btn-lg btn-block" type="submit">Lanjutkan checkout</button>
    </div>
  </div>

  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; Chika Vevita Novelia</p>
  </footer>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script></body>
    </form></html>