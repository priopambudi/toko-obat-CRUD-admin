<?php

session_start();

include '../koneksi.php';
if ($_SESSION['status_user'] != "konsumen") {
    echo '<meta http-equiv="refresh" content="0; URL=../login/login.php">';
}
$namapembeli = $_POST['namapembeli'];
$nama_obat = $_POST['nama_obat'];
$jmlh_obat = $_POST['jmlh_obat'];
$id_keranjang = $_POST['id_keranjang'];
//var_dump($namapembeli);
//die();

$query = mysqli_query($connect, "UPDATE keranjang SET namapembeli='$namapembeli',nama_obat='$nama_obat',jmlh_obat='$jmlh_obat' WHERE id_keranjang='$id_keranjang' ");

if($query) {

   echo '<script language="javascript">alert("Berhasil Update")</script>';

   echo '<meta http-equiv="refresh" content="0; URL=../keranjang/keranjang.php">';

} else {

   echo mysqli_error($connect);

}

?>



