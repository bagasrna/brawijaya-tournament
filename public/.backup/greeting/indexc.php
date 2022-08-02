<?php

// change the name below for the folder you want
// $dir = $_POST['reques'];
// $dir= str_replace(" ","",$dir);
$nama=$_POST['nama'];
$linkfoto=$_POST['link'];
// echo $nama;
$dir=randomString();
function randomString($length = 6) {
	$str = "";
	$characters = array_merge(range('A','Z'), range('a','z'), range('0','9'));
	$max = count($characters) - 1;
	for ($i = 0; $i < $length; $i++) {
		$rand = mt_rand(0, $max);
		$str .= $characters[$rand];
	}
	return $str;
}
$file_to_write = 'index.html';
$content_to_write =
'<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-CARD IED MUBAROK</title>
    <link rel="stylesheet" href="http://olimpiade.ub.ac.id/greeting/css/style.css">
    <link rel="shortcut icon" href="http://olimpiade.ub.ac.id/img/logo.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="http://olimpiade.ub.ac.id/greeting/js/anim.js"></script>
    <link href="../../css/loader.css" rel="stylesheet">
    <script src="../../js/loader.js"></script>
    </head>

<body onload="myFunction()" style="margin:0;">
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
    <div id="jsi-fountain-container" style="" class="containerr">
    </div>
    <div class="text-center footer" id="myDiv">
        <div class="show1">
            <img id="foto2" src="'.$linkfoto.'" alt="">
            <h2 style="margin-top: -0.2em">"'.$nama.'"</h2>
            <h3 style="margin-top: -0.3em">SEKELUARGA </h3>
            <h3 style="margin-top: -0.1em">MENGUCAPKAN</h3>
            <h2 style="margin-top: -0.1em">SELAMAT HARI RAYA IDUL FITRI</h2>
            <h3 style="font-style: italic; margin-top: -0.3em">من العائدين والفائزين </h3>
            <h3>Mohon maaf lahir dan batin</h3>
            <br>
        </div>
        <div class="show2">
            <strong>
                <h2>"'.$nama.'"</h2>
            </strong>
            <h3 style="margin-top: -0.3em">SEKELUARGA</h3>
            <h3 style="margin-top: -0.1em">MENGUCAPKAN </h3>
            <h2 class="jarak">SELAMAT HARI RAYA
                <br> IDUL FITRI</h2>
            <h3 style="font-style: italic; margin-top: -0.3em">من العائدين والفائزين </h3>
            <h3>Mohon maaf lahir dan batin</h3>
            <img id="foto1" src="'.$linkfoto.'" alt="">
        </div>
        <p>Belum punya E-card ? <a href="http://olimpiade.ub.ac.id/"> klik disini.</a></p>
        <p>Created by PIT OLIMPIADE BRAWIJAYA</p>
    </div>
    </div>
</body>

</html>' ;

if( is_dir("../say/$dir") === false )
{
    mkdir("../say/$dir");
    $hasil='http://olimpiade.ub.ac.id/say/'.$dir.'/';
}else{
    // $hasil='link tidak bisa dipakai';
    $dir=randomString();
}

$file = fopen('../say/'.$dir . '/' . $file_to_write,"w");

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
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<link rel="stylesheet" href="../css/style.css">
<link href="../css/fontawesome-all.css" rel="stylesheet">
<link rel="shortcut icon" href="../img/logo.png">
<title>Olimpiade Brawijaya 2018</title>
<link href="../css/bootstrap.min.css" rel="stylesheet">
<link href="../css/loader.css" rel="stylesheet">
<script src="../js/loader.js"></script>
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
  <div class="container">
    <div class="row">
    <div class="col-sm-12 col-xs-12 col-md-12 col-lg-12" style="color: white; margin-top: 12vw">
        <h1 class="text-center center-block">KELUARGA BESAR</h1>
        <div class="text center-block text-center" id="randomText"></div>
        <hr width="50%">     
        <p class="text-center center-block" style="font-size: 20px; margin-top: 10px;">TAQOBBALLAHU MINNA WA MINKUM, MINAL AIDIN WAL FAIZIN, MOHON MAAF LAHIR DAN BATIN.</p>
        <input type="text" value="<?php echo $hasil ?>"  id='generate-notif' class="btn form-control btn-default center-block myButton" style="margin-top: 20px; color: white; background-color: transparent; font-size: 20px; border: none;">
        <button type="button" onclick=copyToClipboard() class="btn btn-info center-block myButton" style="margin-top:20px" >copy link</button>
      </div>
    </div>
  </div>
  <!--Akhir Konten-->
  
  <div class="footer navbar-fixed-bottom">
    <div class="row ">
      <div class="navbar-nav mySosmed" style="padding: 40px 10px; float: none; text-align: center;"> <a id="instagram" href="https://www.instagram.com/olimpiadebrawijaya/"><i class="fab fa-instagram fa-2x white-text" style="margin-right: 40px;"></i></a> <a id="twitter" href="https://twitter.com/Olimpiade_UB"><i class="fab fa-twitter fa-2x" style="margin-right: 50px;"></i></a> <a id="youtube" href="https://www.youtube.com/channel/UCKUbs4ecoWPqNlNAoZqCnNw"><i class="fab fa-youtube fa-2x" style="margin-right: 50px;"></i></a> <a id="line" href="https://line.me/R/ti/p/%40qas3529n"><i class="fab fa-line fa-2x"></i></a> </div>
    </div>
  </div>
  
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 
  <!-- Include all compiled plugins (below), or include individual files as needed --> 
  <script src="../js/bootstrap.min.js"></script> 
  <script src="../js/jquery-1.3.2.min.js" type="text/javascript"></script> 
  <script src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script> 
  <script src="../js/script2.js" type="text/javascript"></script> 
</div>
</body>
</html>
