<?php   require "connect.php";

$id=$_POST['idpage'];
$judul=$_POST['judul'];
$tgl=$_POST['wkt'];
$deskripsi=$_POST['isi'];

$sql=mysqli_query($conn, "update page set judul='$judul', deskripsi= '$deskripsi', where idpage='$id'");

header('location:page.php');
?>

        