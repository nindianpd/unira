<?PHP
require "connect.php";
$idadmin = $_GET['idadmin'];
$sql = mysqli_query($conn,"delete from admin where idadmin='$idadmin'");
if ($sql){
header("location:user.php");
}
//else{
//header("location:index.php?page=user");
//}
?>