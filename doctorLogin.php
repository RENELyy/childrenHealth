<?php
include("coon.php");
$sql = "select * from `doctor`";
$result = mysqli_query($link,$sql);
if(mysqli_num_rows($result) > 0 ) {
	while ($row = mysqli_fetch_assoc($result)) {
	$output[] = array('id' => $row['id'],
            'Dusername' => $row['Dusername'],
            'Demail' => $row['Demail'],
            'Dpassword' => $row['Dpassword'],
            'Dhospital' => $row['Dhospital'],
            'Ddepartment' => $row['Ddepartment'],
            'Dname' => $row['Dname'],
            'Dsex' => $row['Dsex'],
            'Dcertificate' => $row['Dcertificate'],
			'Deducation' => $row['Deducation'],
			'Dphone' => $row['Dphone']
            );
	 }
}
print_r(json_encode($output));
?>