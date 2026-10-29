<?php
include "connect.inc.php";
if($_SERVER["REQUEST_METHOD"] == "POST"){
        $name = $_POST["member_name"];
        $email = $_POST["member_email"];
        $phone = $_POST["member_tel"];
        $gender = $_POST["member_gender"];
        $address = $_POST["member_address"];
        $id = $_POST["id"];


        $sql ="UPDATE `tb_member` SET `member_name`='$name',`member_address`='$address',`member_tel`='$phone',
        `member_email`='$email',`member_gender`='$gender' WHERE member_id = $id";
        $result = mysqli_query($link, $sql);


        if($result){
                echo "OK";
        }else echo "Fail";
}
?>