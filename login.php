<?php
include("coon.php");
$sql = "select * from `user`";
$result = mysqli_query($link,$sql);
if(mysqli_num_rows($result) > 0 ) {
	//输出数据
	while($row = mysqli_fetch_assoc($result)) {
		echo "id:" . $row["id"];
	}
} else {
	echo "0 结果";
}
mysqli_close($link);
echo $result;
echo "hello";
?>