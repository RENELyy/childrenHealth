<?php
include("coon.php");
$sql = "select * from `information`";
$result = mysqli_query($link,$sql);
if(mysqli_num_rows($result) > 0 ) {
	while ($row = mysqli_fetch_assoc($result)) {
	$output[] = array('id' => $row['id'],
            'date' => $row['date'],
            'height' => $row['height'],
            'weight' => $row['weight'],
            'headcircle' => $row['headcircle'],
            'skin' => $row['skin'],
            'bloodpressure' => $row['bloodpressure'],
            'pulse' => $row['pulse'],
            'othercontent' => $row['othercontent'],
			'guardianname' => $row['guardianname'],
			'guardianidcard' => $row['guardianidcard'],
			'guardiantel' => $row['guardiantel']
            );
	 }
}
print_r(json_encode($output));
?>