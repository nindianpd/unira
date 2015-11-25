<?php
require "connect.php";
$u=$_POST["user"];
$p=$_POST["pwd"];

$kueri="select * from admin where username='$u' and password=md5('$p')";

$result=mysqli_query($conn,$kueri);


if (mysqli_num_rows($result)>=1)
{
    
    $row=mysqli_fetch_assoc($result);
    setcookie("username", $row["username"]);
    setcookie("name", $row["nama"]);
    header('location:administrator.php?page=content');

}

else
    header('location:index.php?pesan=1&id='.$_POST[noid].'&isi=Cek username dan password anda!');



?>