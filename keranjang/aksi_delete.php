<?php

session_start();

include '../koneksi.php';
if ($_SESSION['status_user'] != "konsumen") {
    echo '<meta http-equiv="refresh" content="0; URL=../login/login.php">';
} 

$id_keranjang = $_GET['id_keranjang'];
$query = mysqli_query($connect, "DELETE FROM keranjang WHERE id_keranjang='$id_keranjang'");

if($query){
    echo '<script language="javascript">alert("Berhasil Dihapus ")</script>';
    echo '<meta http-equiv="refresh" content="0; URL=../keranjang/keranjang.php">';
}else{
    echo mysqli_error($connect);
}

?>