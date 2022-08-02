<?php

// change the name below for the folder you want
$dir = $_POST['reques'];
$dir= str_replace(" ","",$dir);
$link=$_POST['link'];

$file_to_write = 'index.html';
$content_to_write =
'<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <meta http-equiv="refresh" content="0;url='.$link.'" />
  <link rel="stylesheet" href="../../css/style.css">
  <link href="../../css/fontawesome-all.css" rel="stylesheet">
  <link rel="shortcut icon" href="../../img/logo.png">
  <title>Olimpiade Brawijaya 2018</title>
  <!-- Bootstrap -->
  <link href="../../css/bootstrap.min.css" rel="stylesheet">
  <link href="../../css/loader.css" rel="stylesheet">
  <script src="../../js/loader.js"></script>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-122948845-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag("js", new Date());
  
    gtag("config", "UA-122948845-1");
  </script>
  
</head>
<body onload="myFunction()" style="margin:0;">
  <div class="universe">
    <div class="universe-container">
      <div class="content">
        <canvas id="universe"></canvas>
      </div>
    </div>
  </div>
  <div id="wp">
    <div id="loader">
      <div class="dot"></div>
      <div class="dot"></div>
      <div class="dot"></div>
      <div class="dot"></div>
      <div class="dot"></div>
      <div class="dot"></div>
      <div class="dot"></div>
      <div class="dot"></div>
    </div>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="../../js/bootstrap.min.js"></script>
  <script src="./js/jquery-1.3.2.min.js" type="text/javascript"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
  <script src="../../js/script3.js" type="text/javascript"></script>
</div>
</body>

</html>' ;

if( is_dir("../to/$dir") === false )
{
    mkdir("../to/$dir");
    $hasil='https://olimpiade.ub.ac.id/to/'.$dir.'/';
}else{
    $hasil='link tidak bisa dipakai';
}

$file = fopen('../to/'.$dir . '/' . $file_to_write,"w");

// a different way to write content into
// fwrite($file,"Hello World.");

fwrite($file, $content_to_write);

// closes the file
fclose($file);

// this will show the created file from the created folder on screen
// include $dir . '/disini' . $file_to_write;

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <link rel="stylesheet" href="../css/style.css">
  <link href="../css/fontawesome-all.css" rel="stylesheet">
  <link rel="shortcut icon" href="../img/logo.png">
  <title>Olimpiade Brawijaya 2018</title>
  <!-- Bootstrap -->
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <style type="text/css">
    h1 {
      font-family: 'boldbold';
      font-size: 35px;
    }
    input,h4{
      font-family: 'boldbold';
      font-size: 20px;
    }

    @font-face {
      font-family: 'boldbold';
      src: url("../webfonts/cunia-webfont.woff") format('woff'), url("../webfonts/cunia-webfont.woff2") format('woff2');
      font-weight: normal;
    }
  </style>
  <link href="../css/loader.css" rel="stylesheet">
  <script src="../js/loader.js"></script>
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>-->
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <!--    <![endif]-->
  <style>
    input {
      margin-bottom: 15px;
    }
    .outline-inward {
      /* display: inline-block; */
      position: relative;
      background-color: transparent;
      color: #f5f5f5;
      width: 37%;
      /* text-align: center; */
      padding: 4px 0;
      font-size: 20px;
      font-family: 'Oswald-Light';
      font-weight: bold;
      cursor: pointer;
      border: 1px solid #f5f5f5;
    }

    .outline-inward:hover {
      color: #FFF;
      text-decoration: none;
    }

    .outline-inward:before {
      content: '';
      position: absolute;
      border: #ececec solid 4px;
      top: -16px;
      right: -16px;
      bottom: -16px;
      left: -16px;
      opacity: 0;
      -webkit-transition-duration: .3s;
      transition-duration: .3s;
      -webkit-transition-property: top right bottom left;
      transition-property: top right bottom left;
    }

    .outline-inward:hover:before {
      top: -8px;
      right: -8px;
      bottom: -8px;
      left: -8px;
      opacity: 1;
    }

    .jarak {
      padding-top: 12%;
    }

    @media screen and (max-width: 700px) {
      .jarak {
        padding-top: 30%;
      }
    }
  </style>
  <script type="text/javascript">
    function copyToClipboard() {
      $("#generate-notif").select();
      document.execCommand("copy");
      alert("berhasil di copy");
    }
  </script>
</head>

<body onload="myFunction()" style="margin:0;">
  <div class="universe">
    <div class="universe-container">
      <div class="content">
        <canvas id="universe"></canvas>
      </div>
    </div>
  </div>
  <div id="wp">
    <div id="loader">
      <div class="dot"></div>
      <div class="dot"></div>
      <div class="dot"></div>
      <div class="dot"></div>
      <div class="dot"></div>
      <div class="dot"></div>
      <div class="dot"></div>
      <div class="dot"></div>
    </div>
  </div>
  <div id="myDiv">
    <!--Awal Konten-->
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-xs-12 col-md-12 col-lg-12 jarak" style="color: white;">
          <h1 class="text-center center-block">LINKIN OB</h1>
          <div class="text center-block text-center" id="randomText"></div>
          <input type='text' class='form-control' value="<?php echo $hasil?>" style="color: white; background-color: transparent;" name='code' readonly='true' id='generate-notif'>
          <button class="btn btn-default center-block myButton outline-inward" style="margin-top: 20px; color: white; background-color: transparent; font-size: 17px; border: solid 1px; border-radius: 0;" type='button' onclick=copyToClipboard()><h4>Copy Link</h4></button>
        </div>
      </div>
    </div>
    <!--Akhir Konten-->

    <div class="footer navbar-fixed-bottom" style="margin-bottom: -15px">
      <div class="row ">
        <div class="navbar-nav mySosmed" style="padding: 40px 10px; float: none; text-align: center;">
          <a id="instagram" href="https://www.instagram.com/olimpiadebrawijaya/">
            <i class="fab fa-instagram fa-2x white-text" style="margin-right: 40px;"></i>
          </a>
          <a id="twitter" href="https://twitter.com/Olimpiade_UB">
            <i class="fab fa-twitter fa-2x" style="margin-right: 50px;"></i>
          </a>
          <a id="youtube" href="https://www.youtube.com/channel/UCKUbs4ecoWPqNlNAoZqCnNw">
            <i class="fab fa-youtube fa-2x" style="margin-right: 50px;"></i>
          </a>
          <a id="line" href="https://line.me/R/ti/p/%40qas3529n">
            <i class="fab fa-line fa-2x"></i>
          </a>
        </div>
      </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>
    <script src="./js/jquery-1.3.2.min.js" type="text/javascript"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <script src="../js/script3.js" type="text/javascript"></script>
  </div>
</body>

</html>