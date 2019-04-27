<?php
include("coon.php");
$name=$_GET['name'];
$sql = "insert into `test`(name) VALUES ('{$name}')";
mysqli_query($link,$sql);
?>
