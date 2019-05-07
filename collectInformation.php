<?php
include("coon.php");
$date = $_GET['date'];
$height = $_GET['height'];
$weight = $_GET['weight'];
$headcircle = $_GET['headcircle'];
$skin = $_GET['skin'];
$bloodpressure = $_GET['bloodpressure'];
$pulse = $_GET['pulse'];
$othercontent = $_GET['othercontent'];
$guardianname = $_GET['guardianname'];
$guardianidcard = $_GET['guardianidcard'];
$guardiantel = $_GET['guardiantel'];
$sql = "insert into `information` (date,height,weight,headcircle,skin,bloodpressure,pulse,othercontent,guardianname,guardianidcard,guardiantel) VALUES ('{$date}','{$height}','{$weight}','{$headcircle}','{$skin}','{$bloodpressure}','{$pulse}','{$othercontent}','{$guardianname}','{$guardianidcard}','{$guardiantel}')";
mysqli_query($link,$sql);
echo $sql;
?>