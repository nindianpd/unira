<?PHP
require "connect.php";
$idberita = $_GET['idberita'];
$sql = mysqli_query($conn,"delete from berita where idberita='$idberita'");
$sql1 = mysqli_query($conn,"delete from headline where kode='$idberita'");
$sql2 = mysqli_query($conn,"delete from slide where kode='$idberita'");
if ($sql){
header("location:berita.php");
}
//else{
//header("location:index.php?page=berita");
//}
?>