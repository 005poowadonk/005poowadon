<?php
include 'connect.inc.php';

$id = $_GET['id'];

$id = intval($id);

$sql = "DELETE FROM tb_member WHERE member_id = $id";
$result = mysqli_query($link, $sql);

if ($result) {
    echo "ลบสำเร็จ<br><a href='show.php'>กลับหน้ารายการสมาชิก</a>";
} else {
    echo "ลบไม่สำเร็จ: " . mysqli_error($link);
}
?>