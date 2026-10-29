<?php
        include "connect.inc.php";
        $id = $_GET["id"];
        $sql = "SELECT * FROM tb_member WHERE member_id = $id";
        $result = mysqli_query($link,$sql);
        $row = mysqli_fetch_array($result);
?>

<html>
    <form name="frm-register" method="POST" action="edit_result.php">
        NAME: <input type="text" name="member_name" value="<?php echo $row["member_name"]?>"><br>
        E-MAIL: <input type="text" name="member_email" value="<?php echo $row['member_email']?>"><br>
        TEL. NUMBER: <input type="text" name="member_tel" maxlength="10" value="<?php echo $row['member_tel']?>"><br>
        GENDER:
        <input type="radio" name="member_gender" value="1" <?php if($row["member_gender"] == 1) echo "checked"?>> MALE
        <input type="radio" name="member_gender" value="2" <?php if($row["member_gender"] == 2) echo "checked"?>> FEMALE
        <br>
        ADDRESS:
        <textarea name="member_address">
            <?php echo $row['member_address']?>
        </textarea>
        <br>
        <input type="hidden" name="id" value="<?php echo $id?>">
        <input type="submit" name="submit" value="SAVE">
        <input type="reset" name="reset" value="CANCEL">
    </form>
</html>