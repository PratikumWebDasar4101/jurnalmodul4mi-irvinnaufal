<?php
<?php
error_reporting(0);
$Hobby  = $_POST['Hobby1'];
$Hobby2 = $_POST['Hobby2'];
$Hobby3  = $_POST['Hobby3'];
$Hapus  = $_POST['hapus'];
$array = array();
$file = $_FILES['dokumen'];
$nama_file = $file['name'];
$nama_tmp = $file['tmp_name'];
$upload_dir = "upload/";
move_uploaded_file($nama_tmp,$upload_dir.$nama_file);
echo "<img src = $upload_dir"."$nama_file>";
echo "<br>";

if ($Hobby == "Bermain" && $Hobby2 == "Memasak" && $Hobby3 == "Menjahit") {
	array_push($array, $Hobby , $Hobby2 , $Hobby3);
}elseif ($Hobby == "" && $Hobby2 == "Memasak" && $Hobby3 == "Menjahit") {
	array_push($array, $Hobby2 , $Hobby3);
}elseif ($Hobby == "Bermain" && $Hobby2 == "" && $Hobby3 == "Menjahit") {
	array_push($array,$Hobby, $Hobby3);
}elseif ($Hobby == "Bermain" && $Hobby2 == "Memasak" && $Hobby3 == "") {
	array_push($array,$Hobby, $Hobby2);	
}elseif ($Hobby == "Bermain" ){
	array_push($array, $Hobby);
}elseif ($Hobby2 == "Memasak" ){
	array_push($array, $Hobby2);
}elseif ( $Hobby3 == "Menjahit"){
	array_push($array, $Hobby3);
}
else{
	echo "Tidak Punya Hobby<br>";
}

echo "Hobby : ";
for ($i=0; $i < count($array) ; $i++) { 
	echo $array[$i]." ";
}
echo "<br><br>";
echo "Hobby  Yang ingin  dihapus :  $Hapus <br> ";
$array = array_diff($array, ["$Hapus"]);

echo "<br>";
echo "Hobby Sekarang : ";
for ($i=0; $i <= count($array) ; $i++) { 
	echo $array[$i]." ";
}
?>
<a href="formawal.html"><br>Logout</a>


?>
