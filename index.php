<?php
    require_once "config.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QLTB</title>
</head>
<body>
    <table border="1" align="center">
        <tr>
            <th style="text-align: center;">Mã Sinh Viên</th>
            <th style="text-align: center;">HỌ Tên</th>
            <th style="text-align: center;">Ngày Sinh</th>
            <th style="text-align: center;">
                    <a >Action</a>
            </th>
        </tr>
        <?php 
            $sql = "SELECT *FROM sinhvien";
            $qr = mysqli_query($link,$sql);
            while($rows = mysqli_fetch_array($qr)){
        ?>
        <tr>
            <td ><?php echo $rows["masv"]; ?></td>
            <td ><?php echo $rows["hoten"]; ?></td>
            <td ><?php echo $rows["ngaysinh"]; ?></td>
            <td>
                <a href="create.php">Thêm</a> | 
                <a href="edit.php?id=<?php echo $rows['masv']; ?>" >Sửa</a> | 
                <a href="delete.php?id=<?php echo $rows['masv']; ?>" >Xoá</a></td>

        </tr>
        <?php } ?>
    </table>
    
</body>
</html>