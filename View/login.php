<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style/login.css">
</head>
<body>
    <form action="" method="POST">
        <h2>Đăng Nhập</h2>
        <label for="email">Email</label>
        <input type="text" name="email" id="email" required>
        
        <label for="pass">PassWord</label>
        <input type="password" name="pass" id="pass" required>
        
        <button type="submit" name="login">Login</button>
    </form>
    
    <?php 
    include('../Model/control.php');
    $get_data = new data_kh();
    if(isset($_POST['login'])){
        $log = $get_data->login($_POST['email'],$_POST['pass']);
        if(mysqli_num_rows($log) ==1){
            $_SESSION['email']=$_POST['email'];
            

        }
        else{
            echo"<script>alert('email hoặc mật khẩu không đúng');window.location.href='login.php';</script>";
        }
    }
    ?>
</body>
</html>
