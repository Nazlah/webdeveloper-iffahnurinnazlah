<?php

require_once 'connection.php';

$email = htmlspecialchars($_POST['email']);
$password = htmlspecialchars($_POST['password']);

//hassing password
// $password = hash("sha256", $password);

$query = "SELECT * FROM tb_user WHERE email='{$email}'";
$result = mysqli_query($db, $query);
$data = mysqli_fetch_assoc($result);

if (is_null($data)) {
	echo"email tidak terdaftar <a href ='login.php'>kembali</a>";
	exit();
} else if ($data['password'] != $password) {
	echo "password salah<a href='./login.php'>kembali </a>";
	exit();
} else {

	session_start();
	$_SESSION['status'] = true;
	$_SESSION['level'] = $data['level'];
	$_SESSION['nama'] = $data['nama'];
	$_SESSION['email'] = $data['email'];
	$_SESSION['id_user']=$data['id_user'];

if ($data['level']== "admin") {
	header("location:../pages/tables/data-user.php");
}else {
	header("location:../pages/tables/data-produk.php");
}


}
