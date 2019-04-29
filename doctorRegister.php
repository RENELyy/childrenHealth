<?php
include("coon.php");
$username = $_Get['Dusername'];
$email = $_Get['Demail'];
$password = $_Get['Dpassword'];
$hospital = $_Get['Dhospital'];
$department = $_Get['Ddepartment'];
$name = $_Get['Dname'];
$sex = $_Get['Dsex'];
$certificate = $_Get['Dcertificate'];
$education = $_Get['Deducation'];
$phone = $_Get['Dphone'];
$sql = "insert into `doctor` (Dusername,Demail,Dpassword,Dhospital,Ddepartment,Dname,Dsex,Dcertificate,Deducation,Dphone) VALUES ('{$username}','{$email}','{$password}','{$hospital}','{$department}','{$name}','{$sex}','{$certificate}','{$education}','{$phone}')";
mysqli_query($link,$sql);
echo $sql;
?>