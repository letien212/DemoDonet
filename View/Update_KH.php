<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            margin: 0 auto;
            border: 1px solid black;
        }
        td {
            padding: 10px;
            border: 1px solid black;
        }
    </style>
</head>
<body>
<?php
        include "../Model/control.php"; 
        $get_data = new data_kh(); 
        $select_KH = $get_data->select_KH_id($_GET['up']);
        foreach($select_KH as $i_kh)
    ?>
    <form action="../Controler/Xuly.php?up=<?php echo $i_kh['id']?>" method="post">
        <h2><b>Thêm khách hàng mới</b></h2>
        <table>
            <tr>
                <td>Tên khách hàng</td>
                <td><input type="text" name="ten" value = <?php echo $i_kh['ten'] ?>></td>
            </tr>
            <tr>
                <td>Giới tính</td>
                <td>
                    <select name="gt">
                        <option value="Nam">Nam</option>
                        <option value="Nữ">Nữ</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Địa chỉ</td>
                <td><input type="text" name="dc" value="<?php echo $i_kh['dc'] ?>"></td>
            </tr>
            <tr>
                <td>Điện thoại</td>
                <td><input type="number" name="dt" value="<?php echo $i_kh['dt'] ?>"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email" value="<?php echo $i_kh['email'] ?>"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="pass" value="<?php echo $i_kh['pass'] ?>"></td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center;">
                    <input type="submit" name="capnhat" value="Cập nhật">
                    <input type="button" value="Quay lại" onclick="window.history.back();">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
