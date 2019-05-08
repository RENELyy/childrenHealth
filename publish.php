<?php
include("coon.php");
$date = $_POST['date'];
$Dname = $_POST['Dname'];
$Dphone = $_POST['Dphone'];
$imageurl = $_POST['imageurl'];
$title = $_POST['title'];
$body = $_POST['body'];
$sql = "insert into `publish` (date,Dname,Dphone,imageurl,title,body) VALUES ('{$date}','{$Dname}','{$Dphone}','{$imageurl}','{$title}','{$body}')";
mysqli_query($link,$sql);
echo $sql;
?>