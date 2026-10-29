<?php
include 'connect.inc.php';
$x = $_GET['id'];
$sql="SELECT * FROM tb_member WHERE member_id='$x'";
$result=mysqli_query($link, $sql);
$arr=mysqli_fetch_array($result);
?>

<html>
<h2>ID</h2>
<?php echo $arr["member_id"];?>
<br>
<h2>NAME</h2>
<?php echo $arr["member_name"];?>
<br>
<h2>GENDER</h2>
<?php
if($arr['member_gender']=='1'){
    echo "Male";
}else if($arr['member_gender']=='2'){
    echo "Female";
}else if($arr['member_gender']== NULL ){
    echo "YOU DONT HAVE GENDER";
}
?>
<br>
<h2>ADDRESS</h2>
<?php echo $arr["member_address"];?>
<br>
<h2>EMAIL</h2>
<?php
if($arr['member_gmail']== NULL){
    echo "YOU DONT HAVE GAMIL";
}else echo $arr["member_gmail"];
?>
<br>
<h2>TEL</h2>
<?php echo $arr["member_tel"];?>
</html>