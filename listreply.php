<?php
include ("coon.php");
$nickName = $_GET['nickName'];
$nickNameImg = $_GET['nickNameImg'];
$replyname = $_GET['replyname'];
$replydate = $_GET['replydate'];
$replytime = $_GET['replytime'];
$replycontent = $_GET['replycontent'];
$view = $_GET['view'];
$replyimg = $_GET['replyimg'];
$sql = "insert into `reply` (nickName,nickNameImg,replyname,replycontent,replydate,replytime,view,replyimg) VALUES ('{$nickName}','{$nickNameImg}','{$replyname}','{$replycontent}','{$replydate}','{$replytime}','{$view}','{$replyimg}')";
mysqli_query($link,$sql);
?>