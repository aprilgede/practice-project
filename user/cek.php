<?php
//jika belum login maka 

if(isset($_SESSION['log'])){
    
}else {
    header('location:login.php');
}
?>