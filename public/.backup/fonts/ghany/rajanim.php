<?php
    $nim=165150401111060;
    $url =  "https://rajabrawijaya.ub.ac.id/labina/getinfo/khan.php?nim=".$nim;
    $file = file_get_contents($url);
    $data = json_decode($file,true);
    // var_dump($data);
    echo $data["nama"];
    echo $data["fak"];    
?>
