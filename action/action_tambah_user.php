<?php require_once 'connection.php';


$error=0;

if(isset($_POST['submit'])) {
    $email=$_POST['email'];
} else{
    echo'eror dari email';
    exit();
    $error=1;
}
if (isset($_POST['password'])) {
    $password = $_POST['password'];
} else {
    echo 'error dari password';
    exit();
    $error = 1;
}

if (isset($_POST['nama'])) {
    $nama = $_POST['nama'];
} else {
    echo 'error dari nama';
    exit();
    $error = 1;
}
if (isset($_POST['level'])) {
    $level = $_POST['level'];
} else {
    echo 'error dari level';
    exit();
    $error = 1;
}
if (isset($_POST['level'])) {
    $status = $_POST['level'];
} else {
    echo 'error dari level';
    exit();
    $error = 1;
}
if($error==1) {
    echo "terjadi kesalahan pada proses input <a href='tambah-user.php>kembali</a>'";
    exit();
}

    $query= "INSERT INTO `tb_user` (`id_user`, `email`, `nama`, `password`, `level`, `status`) VALUES (NULL, '$email', '$nama','$password','$level','$status')";

    $insert = mysqli_query($db,$query);
  

    if ($insert == false) {
        echo "Error dalam menambahkan user. <a href ='../../tables/data-user.php'>Kembali</a>";
    } else {
        header('Location:../pages/tables/data-user.php');
    }


?>