<?php
$conn = mysqli_connect("localhost", "orsim", "weegdhrrzs", "db_orsim");
$id=$_GET['id'];
$filename = acara($id)[0]['NAMA_ACARA'];
$result = data();
$file_ending = "xls";

function data (){
	global $id,$conn;
	$sql = "SELECT * FROM `presensi` where ID_ACARA = $id ORDER BY `FAKULTAS`,`NIM_PESERTA`";
	$result = $conn->query($sql);
	return $result;
}
function acara($id){
    global $id,$conn;
	$sql = "SELECT `NAMA_ACARA` FROM `acara` where ID_ACARA = '$id'";
	$result = $conn->query($sql);
	$data = [];
	while ($dt = mysqli_fetch_assoc($result)) {
		$data[] = $dt;
	}
	return $data;
}
function nama($data){
	$data= explode(' ',$data);
	$data = $data[0].' '.$data[1].' '.$data[2];
	return $data;
}

header("Content-Type: application/xls");    
header("Content-Disposition: attachment; filename=$filename.xls");  
header("Pragma: no-cache"); 
header("Expires: 0");
$sep = "\t";

$schema='NO'.$sep.'NAMA'.$sep.'NIM'.$sep.'FAKULTAS'.$sep.'KETERANGAN'.$sep.'WAKTU DATANG'.$sep.'TTD';
$schema .= "\t";
print(trim($schema));
print("\n");    
$i=1;
    while($row = mysqli_fetch_row($result))
    {
        $schema_insert=$i.$sep.nama($row[3]).$sep.$row[1].$sep.$row[4].$sep.$row[5].$sep.$row[6];
        if($i%2==1){
            $schema_insert = $schema_insert.$sep.$i;
        }else{
            $schema_insert .= $sep."".$sep.$i;
        }
        $schema_insert = str_replace($sep."$", "", $schema_insert);
        $schema_insert = preg_replace("/\r\n|\n\r|\n|\r/", " ", $schema_insert);
        $schema_insert .= "\t";
        print(trim($schema_insert));
        print "\n";
        $i++;
    }   
?>