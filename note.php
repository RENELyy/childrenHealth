<?php
include ("coon.php");
$nickName = $_GET['nickName'];
$content = $_GET['content'];
$imageUrl = $_GET['imageUrl'];
$todaydate = $_GET['todaydate'];
$todaytime = $_GET['todaytime'];
$sql = "insert into `content`(name,content,imageurl,todaydate,todaytime) VALUES ('{$nickName}','{$content}','{$imageUrl}','{$todaydate}','{$todaytime}')";
mysqli_query($link,$sql);
?>