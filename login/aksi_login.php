<?php 
session_start();

include '../koneksi.php';

//$username =  mysqli_real_escape_string($connect, $_POST['username']);
//$password = mysqli_real_escape_string($connect, md5(md5($_POST['password'])));

$username = $_POST['username'];
$password = md5($_POST['password']);

//$level = $_POST['level'];
$login = mysqli_query($connect,"select * from user where username='$username' and password='$password'");
$cek = mysqli_num_rows($login);

//var_dump($cek);
//die();
if($cek > 0){
	$data = mysqli_fetch_assoc($login);

	if($data['status_user']=="konsumen"){
	// 	// buat session login dan username
 	$_SESSION['username'] = $username;
	$_SESSION['status_user'] = "konsumen";
	// 	// alihkan ke halaman dashboard admin
	// 	//header("location:../mahasiswa/index.php");
		echo '<meta http-equiv="refresh" content="0; URL=../index.php">';
	}

	// if($data['status_user']=="admin"){
	// 	// buat session login dan username
	// $_SESSION['username'] = $username;
	// $_SESSION['status_user'] = "admin";
	// 	// alihkan ke halaman dashboard admin
	// 	//header("location:../koordinator/index.php");
	// echo '<meta http-equiv="refresh" content="0; URL=index.php">';
	// }
	}else{
	echo '<script language="javascript">alert("Password atau Username salah")</script>';
	echo '<meta http-equiv="refresh" content="0; URL=../login/login.php">';
	}
?>