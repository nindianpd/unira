<?PHP
require "connect.php";
$idkeg = $_GET['idkeg'];
$sql = mysqli_query($conn,"delete from kegiatan where idkeg='$idkeg'");
$sql1 = mysqli_query($conn,"delete from headline where kode='$idkeg'");
$sql2 = mysqli_query($conn,"delete from slide where kode='$idkeg'");
if ($sql){
header("location:kegiatan.php");
}
//else{
//header("location:index.php?page=berita");
//}
?>