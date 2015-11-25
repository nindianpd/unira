<?php   require "connect.php";

mysql_connect("localhost","root","");
mysql_select_db("uniraweb");

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




$kodeadmin=autonumber("admin","idadmin",4,"adm");
$pass=md5($_GET['password']);
$sql=mysqli_query($conn, "insert into admin values  ('$kodeadmin','$_GET[nama]','$_GET[email]','$_GET[username]','$pass')");

header('location:user.php');
?>

        