<?php
session_start();

$conn = mysqli_connect("localhost","root","","multilevel");

//login
if(isset($_POST['login'])){
    $username = $_POST['uname'];
    $password = $_POST['psw'];

    $cekuser = mysqli_query($conn, "select * from user where username='$username' and password='$password'");
    $hitung = mysqli_num_rows($cekuser);

    if($hitung>0){
        // kalau data ditemukan
        $ambildatarole = mysqli_fetch_array($cekuser);
        $role = $ambildatarole['role'];

        if($role=="admin"){
            //kalau dia admin
            $_SESSION['log'] = 'Logged';
            $_SESSION['role'] = 'Admin';
            header('location:admin');
            
        }else {
            //kalau bukan admin
            $_SESSION['log'] = 'Logged';
            $_SESSION['role'] = 'Karyawan';
            header('location:user');

        }
    } else {
        // kalau tidak ditemukan
        echo 'Data tidak ditemukan';
    }
};



?>
