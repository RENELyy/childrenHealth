<?php
include("coon.php");
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$hospital = $_POST['hospital'];
$department = $_POST['department'];
$name = $_POST['name'];
$sex = $_POST['sex'];
$certificate = $_POST['certificate'];
$education = $_POST['education'];
$phone = $_POST['phone'];
$sql = "insert into `doctor` (Dusername,Demail,Dpassword,Dhospital,Ddepartment,Dname,Dsex,Dcertificate,Deducation,Dphone) VALUES ('{$username}','{$email}','{$password}','{$hospital}','{$department}','{$name}','{$sex}','{$certificate}','{$education}','{$phone}')";
mysqli_query($link,$sql);
echo $sql;
?>