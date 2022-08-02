<?php
    $xml="hello";
	function getData($str){
		return $this->xml->CONTENT->USER;
    }

    $nim = 165150401111060;
	$pass = "ghanyersa24";
	$password = md5('123ab'.$pass).'_'.$nim;
	$ip = $_SERVER['REMOTE_ADDR'];
	$url_login = 'https://api.bais.ub.ac.id/login.php/?userid='.$nim.'&passport='.$password.'&challenge=123ab&appid=EKS2&ipaddr='.$ip;
	$curl = curl_init();
	curl_setopt_array($curl, array(
		CURLOPT_RETURNTRANSFER => 1,
		CURLOPT_URL => $url_login,
		CURLOPT_SSL_VERIFYPEER=>FALSE,
	));
	$resp = curl_exec($curl);
	$xml = simplexml_load_string($resp);
	$xml= $xml;
	$pass = $xml->CONTENT->AUTHORITY->PASSWD ;
	$berhak = $xml->CONTENT->AUTHORITY->BERHAK ;
	curl_close($curl);
	// echo $xml->CONTENT->USER->NAMA;
    print_r($xml);
?>