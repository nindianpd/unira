<?php   require "connect.php";

include("fungsi_thumb.php");
          
  $lokasi_file    = $_FILES['fupload']['tmp_name'];
  $tipe_file      = $_FILES['fupload']['type'];
  $nama_file      = $_FILES['fupload']['name'];
  $acak           = rand(000000,999999);
  $nama_file_unik = $acak . $nama_file;


if (!empty($lokasi_file)){
    // Tentukan folder gambar untuk galeri
    $folder="images/";
    // Gunakan fungsi thumb untuk membuat thumbnail
    thumb($nama_file_unik,$folder);
}
$id=$_POST['idberita'];
$judul=$_POST['judul'];
$deskripsi=$_POST['isi'];
$headline=$_POST['headline'];
$slide=$_POST['slide'];

$sql=mysqli_query($conn, "update  berita set judul='$judul', deskripsi= '$deskripsi', tgl= '$tgl',foto='$nama_file_unik',headline='$headline',slide='$slide' where idberita='$id'");

if($_POST['headline']=='Yes'){
$sql1=mysqli_query($conn, "update  headline set judul='$judul', keterangan= '$deskripsi', foto='$nama_file_unik' where kode='$id'");}

if($_POST['slide']=='Yes'){
$sql1=mysqli_query($conn, "update  slide set judul='$judul', keterangan= '$deskripsi', tgl= '$tgl',foto='$nama_file_unik' where kode='$id'");}


header('location:berita.php');
?>

        