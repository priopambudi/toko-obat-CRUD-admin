<?php

session_start();

include '../../koneksi.php';

$id_obat = $_POST['id_obat'];
$nama_obat = $_POST['nama_obat'];
$harga_obat = $_POST['harga_obat'];
$jenis_obat = $_POST['jenis_obat'];

//var_dump($id_obat);
//die();

$query = mysqli_query($connect, "UPDATE tabel_obat SET nama_obat='$nama_obat',jenis_obat='$jenis_obat',harga_obat='$harga_obat' WHERE id_obat='$id_obat' ");

if($query) {

   echo '<script language="javascript">alert("Berhasil Update")</script>';

   echo '<meta http-equiv="refresh" content="0; URL=../adminhome.php">';

} else {

   echo mysqli_error($connect);

}

?>



