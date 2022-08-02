<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Promosi OB APPS</title>
    <link rel="icon" href="<?php echo base_url()?>asset/img/core-img/logo(2).png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <br><br>
        <div class="text-center">
            <h2>GAME PROMOSI OB APPS</h2>
        </div>
        <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col" class="text-center">Rank</th>
                            <th scope="col">KODE</th>
                            <th scope="col">NIM</th>
                            <th scope="col">NAMA</th>
                            <th scope="col" class="text-center">Total</th>
                        </tr>
                    </thead>
                    <tbody style="color:green">
                        <?php
                            $i=1;
                            foreach ($data as $cetak) {
                        ?>
                        <tr <?php if($cetak['DATA_ENROLL']<10){ echo 'style="color: red"';} ?>>
                            <th scope="col" class="text-center"><?php echo $i; ?></th>
                            <th scope="col"><?php echo $cetak['ENROLL_KEY']; ?></th>
                            <th scope="col"><?php echo $cetak['NIM_PANITIA']; ?></th>
                            <th scope="col"><?php echo $cetak['NAMA_PANITIA']; ?></th>
                            <th scope="col" class="text-center"><?php echo $cetak['DATA_ENROLL']; ?></th>
                        </tr>

                        <?php
                            $i++;
                            }

                        ?>
                    </tbody>
                </table>
    </div>
</body>
</html>