<?php

session_start();

ini_set('display_errors', 1);

// if (!isset($_SESSION["nim"])){

//   // header('Location: /tp/login');

//   exit;

//   // UJICOBA

// }

// session_start();

// require "./konek/konek.php";

$nim = $_GET["key"];
$idparam = $_GET["id"];
$nim = strrev($nim);
$nim = base64_decode($nim);
$nim = str_replace('apps','',$nim);
// $nim = "175150400111035";

// $_SESSION["pagenumber"]='{PAGENO}'."";

$sql = file_get_contents('https://em.ub.ac.id/em-event/getBio/'.$nim.'/'.$idparam);

$sql = json_decode($sql);
if($sql->data == null){
	header('https://em.ub.ac.id/apps');
}


// echo "<br><br>";
$data = $sql->data;
// var_dump($data);
$datapf = $sql->data->PENDIDIKAN_FORMAL;
$datapnf = $sql->data->PENDIDIKAN_NON_FORMAL;
$datapo = $sql->data->PENGALAMAN_ORGANISASI;
$dataod = $sql->data->ORGANISASI_DIIKUTI;
$datapk = $sql->data->PENGALAMAN_KEPANITIAAN;
$dataad = $sql->data->KEPANITIAAN_DIIKUTI;

$sqldaf = file_get_contents('https://em.ub.ac.id/em-event/getDaf/'.$nim.'/'.$idparam);
$sqldaf = json_decode($sqldaf);

$daftar = $sqldaf->data;

$foto;
if((int)substr($nim,0,2)<=17){
	
	$foto = "http://siakad.ub.ac.id/siam/biodata.fotobynim.php?nim=$nim&key=MzIxZm90b3V5ZTEyMysyMDE4LTA4LTIxIDIxOjA2OjAw";
}else{
	$foto = "http://siakad.ub.ac.id/dirfoto/foto/foto_20".substr($nim,0,2)."/$nim.jpg";
}
var_dump($foto);
// var_dump($data->Pendidikan_Formal);
// var_dump(json_decode($sql));

// echo $nim;



//catatan

// $sql = "SELECT * FROM `opreckapel` where nim = $nim";

// $result = $conn->query($sql);

// if ($result->num_rows > 0) {

//     // output data of each row

// 	while($row = $result->fetch_assoc()) {

// 		echo "<br> id: ". $row["nim"]. " - Name: ". $row["nama_lengkap"]. " " . $row["nama_panggilan"] . "<br>";

// 	}

// } else {

// 	echo "0 results";

// }





// function cetak ($tabel){

// 	global $sql;

// 	// echo $nim.$tabel;

// 	// $sql = "SELECT * FROM `oprecstaff` where nim = $nim";

// 	$result = $sql;

// 	if ($result. > 0) {

//     // output data of each row

// 		foreach ($result as $key => $object) {

//     return $object->$tabel;

// }

// 	} else {

// 		return "0 results";

// 	}



// }



// function split ($str){//input string contoh cetak(jenjang),nama,;

// 	$result = explode("~",$str);

// 	return $result;

// }

function cetakpendidikan ($a){//input array hasil split

	global $html;	

	$i=0;$c=1;

	foreach ($a as $data) {

		$html.= '<tr>

		<td>'.$c.'</td>

		<td>'.$data->JENJANG.'</td>

		<td>'.$data->INSTANSI.'</td>

		<td>'.$data->TAHUN.'</td>

		</tr>';

		$i++;

		$c++;

	}

}

function cetakorganisasi ($a){//input array hasil split

	global $html;	

	$i=0;$c=1;

	foreach ($a as $data) {

		$html.= '<tr>

		<td>'.$c.'</td>

		<td>'.$data->JABATAN.'</td>

		<td>'.$data->INSTANSI.'</td>

		<td>'.$data->TAHUN.'</td>

		</tr>';

		$i++;

		$c++;

	}

}
function cetakpanitia ($a){//input array hasil split

	global $html;	

	$i=0;$c=1;

	foreach ($a as $data) {

		$html.= '<tr>

		<td>'.$c.'</td>

		<td>'.$data->JABATAN.'</td>

		<td>'.$data->ACARA.'</td>

		<td>'.$data->TAHUN.'</td>

		</tr>';

		$i++;

		$c++;

	}

}
//<td class="barcodecell"><barcode code=';$html.=$nim;$html.=' type="C128A" class="barcode" /></td>

//<td class="barcodecell"><barcode code="Your message here" type="QR" class="barcode" size="0.8" error="M" disableborder="1" /></td>

// cetak($data->NIM);



$html=

'<body><div class="isi">

<p >FORM '.$daftar->AGENDA{0}->AGENDA.' <br>JADWAL INTERVIEW : '.$daftar->DAFTAR{0}->JADWAL.'</p>
<td class="barcodecell"><barcode code=';$html.=$nim;$html.=' type="C128A" class="barcode" /></td>


<h2>IDENTITAS DIRI </h2>

<table style="width:95%">

<tr>

<td width=150px>Nama Lengkap</td>

<td width=5px>:</td>

<td>';

$html.=$data->NAMA_LENGKAP."   [".$data->JENIS_KELAMIN."]";

$html.='</td>
<td rowspan="4" width="120px" ><img style="width:150px;height:210px;object-fit:cover"src="';$html.=$foto;$html.='"alt=""></td>

</tr>

<tr>

<td>Nama Panggilan</td>

<td width=5px>:</td>

<td>';

$html.=$data->PANGGILAN;

$html.='</td>

</tr>

<tr>

<td>NIM</td>

<td width=5px>:</td>

<td>';

$html.=$data->NIM;

$html.='</td>

</tr>

<tr>

<td>Fakultas</td>

<td width=5px>:</td>

<td>';

$html.=$data->FAKULTAS.' / '.$data->JURUSAN.' / '.$data->PRODI;

$html.='</td>

</tr>


</table><table style="width:95%">


<tr>

<td width=150px>IPK</td>

<td width=5px>:</td>

<td>


';

$html.=$data->IPK;

$html.='</td>

</tr>



<tr>

<td>TTL</td>

<td width=5px>:</td>

<td>';

$html.=$data->TEMPAT_LAHIR.', '.$data->TANGGAL_LAHIR;

$html.='</td>

</tr>

<tr>

<td>Alamat Asal</td>

<td width=5px>:</td>

<td>';

$html.=$data->ALAMAT_ASAL;

$html.='</td>

</tr>

<tr>

<td>Alamat di Malang</td>

<td width=5px>:</td>

<td>';

$html.=$data->ALAMAT_MALANG;

$html.='</td>

</tr>

<tr>

<td>No HP</td>

<td width=5px>:</td>

<td>';

$html.=$data->TELPON;

$html.='</td>

</tr>

<tr>

<td>Email</td>

<td width=5px>:</td>

<td>';

$html.=$data->EMAIL;

$html.='</td>

</tr>

<tr>

<td>Instagram/Line</td>

<td width=5px>:</td>

<td>';

$html.=$data->LINE;

$html.='</td>

</tr>

<tr>

<td>Hobi</td>

<td width=5px>:</td>

<td>';

$html.=$data->HOBI;

$html.='</td>

</tr>

<tr>

<td>Motto Hidup</td>

<td width=5px>:</td>

<td>';

$html.=$data->MOTTO;

//add

$html.='</td>

</tr>

<tr>

<td>Cita-Cita</td>

<td width=5px>:</td>

<td>';

$html.=$data->CITA;

$html.='</td>

</tr>

<tr>

<td>Gol Darah</td>

<td width=5px>:</td>

<td>';

$html.=$data->DARAH;

$html.='</td>

</tr>

<tr>

<td>Agama</td>

<td width=5px>:</td>

<td>';

$html.=$data->AGAMA;

$html.='</td>

</tr>

<tr>

<td>Anak</td>

<td width=5px>:</td>

<td>';

$html.=$data->ANAK;

$html.='</td>

</tr>

<tr>

<td>telp ortu</td>

<td width=5px>:</td>

<td>';

$html.=$data->KONTAK_ORTU;

$html.='</td>

</tr>

<tr>

<td>telp wali</td>

<td width=5px>:</td>

<td>';

$html.=$data->WALI;

$html.='</td>

</tr>

<tr>

<td>riwayat sakit</td>

<td width=5px>:</td>

<td>';

$html.=$data->RIWAYAT_SAKIT;



$html.='</td>

</tr>

<tr>

<td>Strengths</td>

<td width=5px>:</td>

<td>';

$html.=$data->STRENGTHS;



$html.='</td>

</tr>

<tr>

<td>Weaknesses</td>

<td width=5px>:</td>

<td>';

$html.=$data->WEAKNESS;



$html.='</td>

</tr>

<tr>

<td>Opportunities</td>

<td width=5px>:</td>

<td>';

$html.=$data->OPPORTUNITIES;



$html.='</td>

</tr>

<tr>

<td>Threats</td>

<td width=5px>:</td>

<td>';

$html.=$data->THREATS;





$html.='</td>

</tr>

</table>

<h2>Riwayat Pendidikan</h2>



<h4>1. Formal</h4>

<table style="width:100% " class="kotak">';

$html.= '<tr>

		<th width=50px>No</th>

		<th width=300px>Jenjang Pendidikan</th>

		<th>Nama Institusi</th>

		<th width=100px>Tahun   </th>

		</tr>';

cetakpendidikan($datapf);

$html.='</table>



<h4>2. Non Formal</h4>

<table style="width:100% " class="kotak">';

$html.= '<tr>

		<th width=50px>No</th>

		<th width=300px>Jenjang Pendidikan</th>

		<th >Nama Institusi</th>

		<th width=100px>Tahun   </th>

		</tr>';

cetakpendidikan ($datapnf);

$html.='</table>



<h2>KEORGANISASIAN</h2>

<h4>1. Pengalaman Organisasi</h4>

<table style="width:100% " class="kotak">';

$html.= '<tr>

		<th width=50px>No</th>

		<th width=300px>Nama Organisasi</th>

		<th>Jabatan</th>

		<th width=100px>Tahun   </th>

		</tr>';

cetakorganisasi ($datapo);

$html.='</table>



<h4>2. Organisasi yang diikuti sekarang</h4>

<table style="width:100% " class="kotak">';

$html.= '<tr>

		<th width=50px>No</th>

		<th width=300px>Nama Organisasi</th>

		<th>Jabatan</th>

		<th width=100px>Tahun   </th>

		</tr>';

cetakorganisasi ($dataod);

$html.='</table>



<h4>3. Pengalaman Kepanitiaan</h4>

<table style="width:100% " class="kotak">';

$html.= '<tr>

		<th width=50px>No</th>

		<th width=300px>Nama Kepanitiaan</th>

		<th>Jabatan</th>

		<th width=100px>Tahun   </th>

		</tr>';

cetakpanitia ($datapk);

$html.='</table>



<h4>4. Kepanitiaan yang sedang dan akan diikuti (6 bulan kedepan)</h4>

<table style="width:100% " class="kotak">';

$html.= '<tr>

		<th width=50px>No</th>

		<th width=300px>Nama Kepanitiaan</th>

		<th>Jabatan</th>

		<th width=100px>Tahun</th>

		</tr>';

cetakpanitia ($dataad);

$html.='</table>











</div></body>';

// echo $html;

require_once __DIR__ . '/vendor/autoload.php';


// ini_set('memory_limit', '256M');

$setAutoTopMargin = false;

$mpdf = new \Mpdf\Mpdf();

$stylesheet = file_get_contents('./css/style1.css');





// $mpdf->WriteHTML($html);

// $mpdf->Output();





$mpdf = new \Mpdf\Mpdf([

	'margin_left' => 20,

	'margin_right' => 15,

	'margin_top' => 40,

	'margin_bottom' => 25,

	'margin_header' => 0,

	'margin_footer' => 0

]);

// $mpdf->setFooter($footer);

$mpdf->SetWatermarkText('FORM EM UB 2019');

$mpdf->simpleTables = true;

$mpdf->useSubstitutions = false;


// $mpdf->SetHeader($header);

$mpdf->SetProtection(array('print'));

$mpdf->SetTitle("FORM PENDAFTARAN");

$mpdf->SetAuthor("@em_ubofficial");

$mpdf->showWatermarkText = true;

$mpdf->watermark_font = 'DejaVuSansCondensed';

$mpdf->watermarkTextAlpha = 0.1;

$mpdf->SetDisplayMode('fullpage');

$mpdf->WriteHTML($stylesheet,1);

$mpdf->WriteHTML($html,2);


// var_dump($html);
ob_clean();
$mpdf->Output('form_KE_1 '.$data->NAMA_LENGKAP.'.pdf', \Mpdf\Output\Destination::DOWNLOAD);

?>