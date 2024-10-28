<?php
    include('../Model/control.php');
    $get_data = new data_kh();
    $del = $get_data -> delete_id($_GET['del']);
    if($del) echo "<script>alert('Ban da xoa thanh cong ');
                    window.location='Select_KH.php'</script>";
    else echo "<script>alert ('Ban khong xoa duoc') </script>";              
?>