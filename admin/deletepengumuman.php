<?PHP
require "connect.php";
$idpeng = $_GET['idpeng'];
$sql = mysqli_query($conn,"delete from pengumuman where idpeng='$idpeng'");
$sql1 = mysqli_query($conn,"delete from headline where kode='$idpeng'");
$sql2 = mysqli_query($conn,"delete from slide where kode='$idpeng'");
if ($sql){
header("location:pengumuman.php");
}
//else{
//header("location:index.php?page=berita");
//}
?>