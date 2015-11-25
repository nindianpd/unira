<?php   require "connect.php";

$id=$_GET['idadmin'];
$nama=$_GET['nama'];
$username=$_GET['username'];
$pass=md5($_GET['pass']);
$email=$_GET['email'];

$sql=mysqli_query($conn, "update admin set nama='$nama', email= '$email',username= '$username', password= '$pass' where idadmin='$id'");

header('location:user.php');
?>

        