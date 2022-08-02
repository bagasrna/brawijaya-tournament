<?php
session_start();
if (!isset($_SESSION["nim"])||($_SESSION['timeout'] < time())){
  header('Location: /tp/login');
  exit;
  // UJICOBA
}
// session_start();
require "./konek/konek.php";
$nim = $_SESSION["nim1"];
$_SESSION["pagenumber"]='{PAGENO}'."";
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


function cetak ($tabel){
	global $nim,$conn;
	echo $nim.$tabel;
	$sql = "SELECT * FROM `oprecstaff` where nim = $nim";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
    // output data of each row
		while($row = $result->fetch_assoc()) {
			return  $row["$tabel"];
		}
	} else {
		return "0 results";
	}

}

function split ($str){//input string contoh cetak(jenjang),nama,;
	$result = explode("/",$str);
	return $result;
}
function cetakpendidikan ($a,$b,$c){//input array hasil split
	global $html;
	// $html.="ooo";
	$sa = split("$a");
	$sb = split("$b");
	$sc = split("$c");
	// var_dump("$sa");
	$i=0;$c=1;
	foreach ($sa as $key=>$value) {
		$html.= '<tr>
		<td>'.$c.'</td>
		<td>'.$sa[$i].'</td>
		<td>'.$sb[$i].'</td>
		<td>'.$sc[$i].'</td>
		</tr>';
		$i++;
		$c++;
	}
}
//<td class="barcodecell"><barcode code=';$html.=$nim;$html.=' type="C128A" class="barcode" /></td>
//<td class="barcodecell"><barcode code="Your message here" type="QR" class="barcode" size="0.8" error="M" disableborder="1" /></td>
cetak("nim");
$header = '<img src="./asset/header.png" alt="">';
$footer = '<img src="./asset/footer.PNG" alt="">'.'{PAGENO}';
$html=
'<body><div class="isi">
<p >[FORM 1/3] IDENTITAS DIRI,RIWAYAT PENDIDIKAN, KEORGANISASIAN</p>
<h2>IDENTITAS DIRI</h2>
<table style="width:95%">
<tr>
<td width=200px>Nama Lengkap</td>
<td width=5px>:</td>
<td>';
$html.=cetak("nama_lengkap")."   [".cetak("jenis_kelamin")."]";
$html.='</td>
<td class="barcodecell" rowspan="5" width="2px"><barcode code=';$html.=$nim; $html.=' type="QR" class="barcode" size="1.2" error="M" disableborder="1" /></td>
</tr>
<tr>
<td>Nama Panggilan</td>
<td>:</td>
<td>';
$html.=cetak("nama_panggilan");
$html.='</td>
</tr>
<tr>
<td>NIM</td>
<td>:</td>
<td>';
$html.=cetak("nim");
$html.='</td>
</tr>
<tr>
<td>Fakultas</td>
<td>:</td>
<td>';
$html.=cetak("fakultas");
$html.='</td>
</tr>
<tr>
<td>IPK</td>
<td>:</td>
<td>';
$html.=cetak("ipk");
$html.='</td>
</tr>

<tr>
<td>TTL</td>
<td>:</td>
<td>';
$html.=cetak("ttl");
$html.='</td>
</tr>
<tr>
<td>Alamat Asal</td>
<td>:</td>
<td>';
$html.=cetak("alamat_asal");
$html.='</td>
</tr>
<tr>
<td>Alamat di Malang</td>
<td>:</td>
<td>';
$html.=cetak("alamat_malang");
$html.='</td>
</tr>
<tr>
<td>No HP</td>
<td>:</td>
<td>';
$html.=cetak("telp");
$html.='</td>
</tr>
<tr>
<td>Email</td>
<td>:</td>
<td>';
$html.=cetak("email");
$html.='</td>
</tr>
<tr>
<td>Instagram/Line</td>
<td>:</td>
<td>';
$html.=cetak("sosmed");
$html.='</td>
</tr>
<tr>
<td>Hobi</td>
<td>:</td>
<td>';
$html.=cetak("hobi");
$html.='</td>
</tr>
<tr>
<td>Motto Hidup</td>
<td>:</td>
<td>';
$html.=cetak("motto");
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
cetakpendidikan (cetak("jenjang_formal"),cetak("namainstitusi_formal"),cetak("tahun_formal"));
$html.='</table>

<h4>2. Non Formal</h4>
<table style="width:100% " class="kotak">';
$html.= '<tr>
		<th width=50px>No</th>
		<th width=300px>Jenjang Pendidikan</th>
		<th >Nama Institusi</th>
		<th width=100px>Tahun   </th>
		</tr>';
cetakpendidikan (cetak("jenjang_non"),cetak("namainstitusi_non"),cetak("tahun_non"));
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
cetakpendidikan (cetak("namaorg_pengalaman"),cetak("jabatanorg_pengalaman"),cetak("tahunorg_pengalaman"));
$html.='</table>

<h4>2. Organisasi yang diikuti sekarang</h4>
<table style="width:100% " class="kotak">';
$html.= '<tr>
		<th width=50px>No</th>
		<th width=300px>Nama Organisasi</th>
		<th>Jabatan</th>
		<th width=100px>Tahun   </th>
		</tr>';
cetakpendidikan (cetak("namaorg_ikut"),cetak("jabatanorg_ikut"),cetak("tahunorg_ikut"));
$html.='</table>

<h4>3. Pengalaman Kepanitiaan</h4>
<table style="width:100% " class="kotak">';
$html.= '<tr>
		<th width=50px>No</th>
		<th width=300px>Nama Kepanitiaan</th>
		<th>Jabatan</th>
		<th width=100px>Tahun   </th>
		</tr>';
cetakpendidikan (cetak("namakep_pengalaman"),cetak("jabatankep_pengalaman"),cetak("tahunkep_pengalaman"));
$html.='</table>

<h4>4. Kepanitiaan yang sedang dan akan diikuti (6 bulan kedepan)</h4>
<table style="width:100% " class="kotak">';
$html.= '<tr>
		<th width=50px>No</th>
		<th width=300px>Nama Kepanitiaan</th>
		<th>Jabatan</th>
		<th width=100px>Tahun</th>
		</tr>';
cetakpendidikan (cetak("namakep_ikut"),cetak("jabatankep_ikut"),cetak("tahunkep_ikut"));
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
$mpdf->setFooter($footer);
$mpdf->SetWatermarkText('FORM STAFF 1/3');
$mpdf->simpleTables = true;
$mpdf->useSubstitutions = false;
$mpdf->SetHeader($header);
$mpdf->SetProtection(array('print'));
$mpdf->SetTitle("FORM PENDAFTARAN");
$mpdf->SetAuthor("@danang_tp");
$mpdf->showWatermarkText = true;
$mpdf->watermark_font = 'DejaVuSansCondensed';
$mpdf->watermarkTextAlpha = 0.1;
$mpdf->SetDisplayMode('fullpage');
$mpdf->WriteHTML($stylesheet,1);
$mpdf->WriteHTML($html,2);

$mpdf->Output('form_KE_1 '.cetak("nama_lengkap").'.pdf', \Mpdf\Output\Destination::DOWNLOAD);
?>

