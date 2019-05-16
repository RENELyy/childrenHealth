<?php
include("coon.php");
$Dcertificate = $_GET['Dcertificate'];
$modifyusername = $_GET['modifyusername'];
$modifyemail = $_GET['modifyemail'];
$modifyhospital = $_GET['modifyhospital'];
$modifydepartment = $_GET['modifydepartment'];
$modifyphone = $_GET['modifyphone'];
$sql = "update `doctor` 
set Dusername = '{$modifyusername}',
Demail = '{$modifyemail}',
Dhospital = '{$modifyhospital}',
Ddepartment = '{$modifydepartment}',
Dphone = '{$modifyphone}' 
where Dcertificate = '{$Dcertificate}'";
mysqli_query($link,$sql);
echo $sql;
?>