<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>
    
    <div class = "menu">
        <?php
            include "../Model/control.php"; 
            include "menu.php";
            $get_data = new data_kh(); 
            $select_KH = $get_data->select_kh();
        ?>
        <div class = "noidung">
        <?php
        include("header.php");
    ?>
        <table border="1" >
            <caption>Danh sach đăng ký khách hàng</caption>
            <!-- <a href="Ktra.html">New</a> -->
            <tr>
                <th>id</th>
                <th>tên</th>
                <th>giới tính</th>
                <th>địa chỉ</th>
                <th>điện thoại</th>
                <th>Email</th>
                <th>pass</th>
                <th colspan="2">Tùy chọn</th>
            </tr>
            <?php
            foreach($select_KH as $i_kh)
            {

            
            ?>
            <tr> 
            <td><?php echo $i_kh['tenkh'] ?></td>
            <td><?php echo $i_kh['password'] ?></td>
            <td><?php echo $i_kh['gioitinh'] ?></td>
            <td><?php echo $i_kh['diachi'] ?></td>
            <td><?php echo $i_kh['dienthoai'] ?></td>
            <td><?php echo $i_kh['email'] ?></td>
            <td><a href="Kh_update.php?up=<?php echo $i_kh['id']; ?>" onclick="return confirm('Bạn có chắc chắn muốn sửa không?');">Update</a></td>
            <td><a href="Kh_delete.php?del=<?php echo $i_kh['id']; ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa không?');">Delete</a></td>
            </tr>
                <?php
            }
            ?>

        </table>
        </div>
    </div>
    
    
</body>
</html>