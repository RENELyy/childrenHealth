<?php
include ('coon.php');
$sql = "select * from `reply`";
$result = mysqli_query($link,$sql);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $output[] = array('id' => $row['id'],'nickName' => $row['nickName'],'replydate' => $row['replydate'],'replyname' => $row['replyname'],'replycontent' => $row['replycontent'],'replytime' => $row['replytime'],'view' => $row['view'],'replyimg' => $row['replyimg'],'nickNameImg' => $row['nickNameImg']);
    }
}
print_r(json_encode($output));
?>