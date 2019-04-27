<?php
include("coon.php");
$nickname = $_GET['nickname'];
$email = $_GET['email'];
$password = $_GET['password'];
$babyname = $_GET['babyname'];
$babysex = $_GET['babysex'];
$babybirthday = $_GET['babybirthday'];
$guardianname = $_GET['guardianname'];
$guardiansex = $_GET['guardiansex'];
$guardianidcard = $_GET['guardianidcard'];
$relationship = $_GET['relationship'];
$phonenumber = $_GET['phonenumber'];
$sql = "insert into `user` (nickname,email,password,babyname,babysex,babybirthday,guardianname,guardiansex,guardianidcard,relationship,phonenumber) VALUES ('{$nickname}','{$email}','{$password}','{$babyname}','{$babysex}','{$babybirthday}','{$guardianname}','{$guardiansex}','{$guardianidcard}','{$relationship}','{$phonenumber}')";
mysqli_query($link,$sql);
echo $sql;
?>