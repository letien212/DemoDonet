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
    <div class = "menu">
        <?php
            include("menu.php");
        ?>
        <div class = "noidung">
        <?php
        include("header.php");
    ?>
        <form action="../Controler/Xuly.php" method="post">
        <h2><b>Thêm khách hàng mới</b></h2>
        <table>
            <tr>
                <td>Tên khách hàng</td>
                <td><input type="text" name="ten"></td>
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
                <td><input type="text" name="dc"></td>
            </tr>
            <tr>
                <td>Điện thoại</td>
                <td><input type="number" name="dt"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="pass"></td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center;">
                    <input type="submit" name="them" value="Thêm mới">
                    <input type="button" value="Quay lại" onclick="window.history.back();">
                </td>
            </tr>
        </table>
    </form>
        </div>
    </div>
    
</body>
</html>
