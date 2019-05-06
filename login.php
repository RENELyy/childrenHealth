<?php
include("coon.php");
$sql = "select * from `user`";
$result = mysqli_query($link,$sql);
if(mysqli_num_rows($result) > 0 ) {
	$output[] = array('id' => $row['id'],
            'username' => $row['username'],
            'email' => $row['email'],
            'password' => $row['password'],
            'Bname' => $row['Bname'],
            'Bsex' => $row['Bsex'],
            'Bbirthday' => $row['Bbirthday'],
            'Gname' => $row['Gname'],
            'Gsex' => $row['Gsex'],
			'GID' => $row['GID'],
			'relationship' => $row['relationship'],
			'phone' => $row['phone']
            );
}
print_r(json_encode($output));
?>