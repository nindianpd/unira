<?php   require "connect.php";

include("fungsi_thumb.php");

          
  $lokasi_file    = $_FILES['fupload']['tmp_name'];
  $tipe_file      = $_FILES['fupload']['type'];
  $nama_file      = $_FILES['fupload']['name'];
  $acak           = rand(000000,999999);
  $nama_file_unik = $acak . $nama_file;


mysql_connect("localhost","root","");
mysql_select_db("uniraweb");
//Fungsi autonumber

function autonumber($tabel, $kolom, $lebar=0, $awalan='')
{
	$query="select $kolom from $tabel order by $kolom desc limit 1";
	$hasil=mysql_query($query);
	$jumlahrecord = mysql_num_rows($hasil);
	if($jumlahrecord == 0)
		$nomor=1;
	else
	{
		$row=mysql_fetch_array($hasil);
		$nomor=intval(substr($row[0],strlen($awalan)))+1;
	}
	if($lebar>0)
		$angka = $awalan.str_pad($nomor,$lebar,"0",STR_PAD_LEFT);
	else
		$angka = $awalan.$nomor;
	return $angka;
}








if (!empty($lokasi_file)){
    // Tentukan folder gambar untuk galeri
    $folder="images/";
    // Gunakan fungsi thumb untuk membuat thumbnail
    thumb($nama_file_unik,$folder);
}
$kodepeng=autonumber("pengumuman","idpeng",4,"PENG");
$sql=mysqli_query($conn, "insert into pengumuman values  ('$kodepeng','$_POST[judul]','$_POST[isi]','$nama_file_unik','$_POST[wkt]','$_POST[headline]','$_POST[slide]')");

if($_POST['headline']=='Yes'){
$sql1=mysqli_query($conn, "insert into headline values  ('','$kodepeng','$_POST[judul]','$_POST[isi]','$nama_file_unik','$_POST[wkt]')");}

if($_POST['slide']=='Yes'){
$sql2=mysqli_query($conn, "insert into slide values  ('','$kodepeng','$_POST[judul]','$_POST[isi]','$nama_file_unik','$_POST[wkt]')");}

header('location:pengumuman.php');
?>

        