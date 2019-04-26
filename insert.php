<?php
include("coon.php");
$id = $_GET['id'];
$name=$_GET['name'];
$sql = "insert into `test`(id,name) VALUES ('{$id}','{$name}')";
mysqli_query($link,$sql);
>