<?php
include("coon.php");
$username = $_GET['nickname'];
$email = $_GET['email'];
$password = $_GET['password'];
$Bname = $_GET['babyname'];
$Bsex = $_GET['babysex'];
$Bbirthday = $_GET['babybirthday'];
$Gname = $_GET['guardianname'];
$Gsex = $_GET['guardiansex'];
$Gidcard = $_GET['guardianidcard'];
$relationship = $_GET['relationship'];
$phone = $_GET['phonenumber'];
$sql = "insert into `user` (username,email,password,Bname,Bsex,Bbirthday,Gname,Gsex,GID,relationship,phone) VALUES ('{$username}','{$email}','{$password}','{$Bname}','{$Bsex}','{$Bbirthday}','{$Gname}','{$Gsex}','{$Gidcard}','{$relationship}','{$phone}')";
mysqli_query($link,$sql);
echo $sql;
?>