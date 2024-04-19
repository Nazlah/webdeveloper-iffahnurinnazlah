<?php
session_start();
if(isset($_SESSION['username'])) {
    session_destroy();
    header('location:dashboard.php?status=Anda sudah keluar');
} else{
    session_destroy();
    header('Loocation:dashboard.php?status=selahkan login');
}
?>

