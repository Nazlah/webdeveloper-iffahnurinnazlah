<?php require_once 'connection.php';


$error=0;

// if(isset($_POST['submit'])) {
//     $email=$_POST['email'];
// } else{
//     echo'eror dari email';
//     exit();
//     $error=1;
// }
// if (isset($_POST['password'])) {
//     $password = $_POST['password'];
// } else {
//     echo 'error dari password';
//     exit();
//     $error = 1;
// }

// if (isset($_POST['nama'])) {
//     $nama = $_POST['nama'];
// } else {
//     echo 'error dari nama';
//     exit();
//     $error = 1;
// }
// if (isset($_POST['level'])) {
//     $level = $_POST['level'];
// } else {
//     echo 'error dari level';
//     exit();
//     $error = 1;
// }
// if (isset($_POST['level'])) {
//     $status = $_POST['level'];
// } else {
//     echo 'error dari status';
//     exit();
//     $error = 1;
// }
// if (isset($_POST['id_user'])) {
//     $id = $_POST['id_user'];
// } else {
//     echo 'error dari level';
//     exit();
//     $error = 1;
// }
// if($error==1) {
//     echo "terjadi kesalahan pada proses edit<a href='edit-user.php>kembali</a>'";
//     exit();
// }

$id_user=$_POST['id_user'];
$email=$_POST['email'];
$password=$_POST['password'];
$level=$_POST['level'];
$status=$_POST['level'];
$nama=$_POST['nama'];

$query=" UPDATE `tb_user` SET 
   `email` = '$email', 
   `nama` = '$nama',
   `password` = '$password',
    `level` = '$level',
   `status`='$status' WHERE id_user='$id_user'";

   
    $insert = mysqli_query($db,$query);
  

    if ($insert == false) {
        echo "Error dalam menambahkan data. <a href ='../../tables/data-user.php'>Kembali</a>";
    } else {
        header('Location:../pages/tables/data-user.php');
    }



?>