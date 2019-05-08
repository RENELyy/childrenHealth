<?php
include("coon.php");
$sql = "select * from `publish`";
$result = mysqli_query($link,$sql);
if(mysqli_num_rows($result) > 0 ) {
	while ($row = mysqli_fetch_assoc($result)) {
	$output[] = array('id' => $row['id'],
            'Dname' => $row['Dname'],
            'date' => $row['date'],
            'title' => $row['title'],
            'body' => $row['body'],
            'Dphone' => $row['Dphone'],
            'imagurl' => $row['imagurl']
            );
	 }
}
print_r(json_encode($output));
?>