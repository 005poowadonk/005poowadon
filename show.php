<html>

<?php
include 'connect.inc.php';
?>

<table border="1">
    <tr>
        <td>ID</td>
        <td>NAME</td>
        <td>EDIT</td>
        <td>DELETE</td>
    </tr>

    <?php
    $sql = "SELECT * FROM tb_member";
    $result = mysqli_query($link, $sql);

    while ($arr = mysqli_fetch_array($result)) {
        $id = $arr['member_id'];
    ?>
        <tr>
            <td><?php echo $arr['member_id']; ?></td>
            <td>
                <a href="detail.php?id=<?php echo $id; ?>">
                    <?php echo $arr['member_name']; ?>
                </a>
            </td>
            <td>
                <a href="edit.php?id=<?php echo $id; ?>">Edit</a>
            </td>
            <td>
                <a href="delete.php?id=<?php echo $id; ?>" onclick="return confirm('คุณแน่ใจที่จะลบ?')">Delete</a>
            </td>
        </tr>
    <?php
    }
    ?>
</table>
</html>