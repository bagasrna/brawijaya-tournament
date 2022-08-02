<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
  <link rel="stylesheet" href="../../assetapps/css/style.css" type="text/css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- <link rel="stylesheet" href="open-iconic/font/css/open-iconic-bootstrap.css"> -->
  <link rel="stylesheet" href="../../assetapps/css/fontawesome-all.min.css">
  <link rel="stylesheet" href="../../assetapps/css/main.css">
  <title>Olimpiade Brawijaya 2018</title>
</head>

<body>
  <!-- particles.js container -->

  <div id="particles-js"> </div>
  <section>
    <div class="container">
      <div class="row">
        <div class="col-lg-4 offset-lg-4 col-12">
          <div class="card myCard" style="border-radius: 10px; background-color: #F5F4F5">
            <div class="mt-4">
              <!--			  <img src="img/logo.svg" alt="" style="width: 140px" class="img-fluid"> -->
              <img src="<?= base_url('asset/assets/Logo Circle-01.svg') ?>" alt="">
            </div>
            <div class="text-center mt-4">
              <h4>SIAM AUTH</h4>
            </div>
            <form class="container col-lg-10" method="post" action="<?= base_url('opentalent/login') ?>">
              <div class="form-group">
                <input type="number" class="form-control mt-3" name="nim" id="nim" aria-describedby="nim" placeholder="NIM">
              </div>
              <div class="form-group">
                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
              </div>
              <button type="submit" class="btn w-100 mt-4 font-weight-bold" style="background-color: #FECB32; margin-bottom: 35px">Log In</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <script src="../../assetapps/js/script.js" type="text/javascript"></script>
  <!-- particles.js lib - https://github.com/VincentGarreau/particles.js -->
  <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
</body>

</html>