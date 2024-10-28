<?php
    include('Connect.php');
    class data_kh
    {
        public function insert_KH($ten, $gt, $dc, $dt, $email, $pass)
        {
            global $conn;
            
            $sql = "INSERT INTO khach_hang (tenkh, password, gioitinh, diachi, dienthoai, email) 
                VALUES ('$ten', '$pass', '$gt', '$dc', '$dt', '$email')";
             $run = mysqli_query($conn,$sql);
             return $run;
           
            
        }
        public function select_kh()
        {
            global $conn;
            
            $sql = "SELECT * from khach_hang ";
            
            $run = mysqli_query($conn,$sql);
            return $run;
        }
        public function select_KH_id($id){
            global $conn;
            $sql= "SELECT * from khach_hang where id= $id ";
            $run = mysqli_query($conn,$sql);
            return $run;
        }
        public function Update_khachhang($id, $ten, $matkhau, $gioitinh, $diachi, $dienthoai, $email){
            global $conn;
            $sql = "UPDATE khach_hang set ten='$ten',
                                        pass='$matkhau',
                                        gt='$gioitinh',
                                        dc='$diachi',
                                        dt='$dienthoai',
                                        email='$email' where id='$id'";
            $run = mysqli_query($conn, $sql);
            return $run;
        }
        public function delete_id($id){
            global $conn;
            $sql = "DELETE from khach_hang where id = $id";
            $run = mysqli_query($conn,$sql);
            return $run;
        }
        public function login($username,$pass){
            global $conn;
            $sql = "Select from khach_hang where email = $email AND password = $pass ";
            $run = mysqli_query($conn,$sql);
            return $run;
        }
    }
?>

