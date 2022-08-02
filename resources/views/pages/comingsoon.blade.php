<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brawijaya Tournament 2021</title>

    <link rel="icon" type="image/png" href="{{url('/frontend/coming-soon/logo.png')}}" sizes="16x16">
    <link rel="icon" type="image/png" href="{{url('/frontend/coming-soon/logo.png')}}" sizes="32x32">
    <link rel="icon" type="image/png" href="{{url('/frontend/coming-soon/logo.png')}}" sizes="96x96">
</head>
<style>
    body {
        background-color: #EC5F5B;
        font-family: Tahoma;
        font-weight: bold;
        color: white;
    }

    .ornamen {
        background: #9D4643;
        margin: auto;
        position: absolute;
        top: 30%;
        left: 50%;
        transform: translate(-50%, -50%);
        height: 175px;
        width: 350px;
        border-radius: 250px 250px 0 0;
        z-index: -1;
    }

    .ornamen2 img{
        margin: auto;
        position: absolute;
        top: 32%;
        left: 50%;
        transform: translate(-50%, -50%);
        height: 220px;
    }

    .tulisan {
        margin: 370px auto 0 auto;
    }

    .judul {
        font-size: 64px;
        margin: auto;
        text-align: center;
    }

    .sub-judul {
        font-size: 24px;
        margin: 15px auto;
        text-align: center;
    }

    .sosmed {
        font-size: 24px;
        margin: 120px auto 0 auto;
        text-align: center;
    }

    .icon img {
        margin: 25px 15px;
        position: relative;
        text-decoration: none;
    }

    @media only screen and (max-width: 600px) {
        .ornamen {
            background: #9D4643;
            margin: auto;
            position: absolute;
            top: 32%;
            left: 50%;
            transform: translate(-50%, -50%);
            height: 140px;
            width: 280px;
            border-radius: 250px 250px 0 0;
            z-index: -1;
        }

        .ornamen2 img{
            margin: auto;
            position: absolute;
            top: 32%;
            left: 50%;
            transform: translate(-50%, -50%);
            height: 170px;
        }

        .tulisan {
            margin: 320px auto 0 auto;
        }

        .judul {
            font-size: 48px;
            margin: auto;
            text-align: center;
        }

        .sub-judul {
            font-size: 20px;
            margin: 15px auto;
            text-align: center;
        }

        .sosmed {
            font-size: 20px;
            margin: 140px auto 0 auto;
            text-align: center;
        }
    }
</style>
<body>
    <div class="ornamen"></div>
    <div class="ornamen2">
        <img src="{{url('/frontend/coming-soon/cs-lg.svg')}}">
    </div>

    <div class="tulisan">
        <div class="judul">Coming Soon</div>
        <div class="sub-judul">Website Brawijaya Tournament 2021</div>
    </div>

    <div class="sosmed">
        <span>Catch us at :</span>
        <div class="icon">
            <a href="https://www.instagram.com/brawijayatournament/"><img src="{{url('/frontend/coming-soon/instagram.svg')}}" height="35px"></a>
            <a href="https://line.me/R/ti/p/@640atdxb"><img src="{{url('/frontend/coming-soon/Line.svg')}}" height="35px"></a>
            <a href="https://vt.tiktok.com/ZGJDECFaj/"><img src="{{url('/frontend/coming-soon/Tiktok.svg')}}" height="35px"></a>
            <!--<a href=""><img src="coming-soon/spotify.svg" height="35px"></a>-->
            <a href="https://twitter.com/BT_Brawijaya"><img src="{{url('/frontend/coming-soon/twitter.svg')}}" height="35px"></a>
        </div>
    </div>
    
</body>
</html>