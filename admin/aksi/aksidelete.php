<?php

session_start();

include '../../koneksi.php';
if ($_SESSION['statususer'] != "admin") {
    echo '<meta http-equiv="refresh" content="0; URL=../../admin.php">';
} 

$id_obat = $_GET['id_obat'];
$query = mysqli_query($connect, "DELETE FROM tabel_obat WHERE id_obat='$id_obat'");

if($query){
    echo '<script language="javascript">alert(" Berhasil Dihapus ")</script>';
    echo '<meta http-equiv="refresh" content="0; URL=../adminhome.php">';
}else{
    echo mysqli_error($connect);
}

?>