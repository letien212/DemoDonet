<?php
include("../Model/control.php"); 
if (isset($_POST['them'])) {
    $getData = new data_kh();

   
    $insert = $getData->insert_KH(
        $_POST['ten'],
        $_POST['gt'],
        $_POST['dc'], 
        $_POST['dt'],
        $_POST['email'],
        $_POST['pass']
    );    

   
    if ($insert) {
        echo "<script>alert('Thành công'); </script>";
    } else {
        echo "Không thành công";
    }
}

if (isset($_POST['capnhat'])) {
    $getData = new data_kh();

   
    $update = $getData->Update_khachhang(
        $_GET['up'],
        $_POST['ten'],
        $_POST['pass'],
        $_POST['gt'], 
        $_POST['dc'],
        $_POST['dt'],
        $_POST['email']
    );    

   
    if ($update) {
        echo "<script>alert('Thành công'); 
                window.location='../View/Select_KH.php'</script>";
        
    } else {
        echo "Không thành công";
    }
}
?>