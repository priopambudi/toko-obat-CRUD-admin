<?php
 /* session_start();
 if (empty($_SESSION['username'])) {
 header("location:login.php?pesan=belum_login"); 
 }
 else {
 ?>
 Selamat <b><?php echo $_SESSION['username'] ?></b> Berhasil Masuk <br />
 <a href="logout.php">Klik di sini</a> untuk Keluar
 <?php } ?>
*/
?>

<?php
include "../koneksi.php";
$username = $_POST['username'];
$password = $_POST['password'];
$no_telp = $_POST['no_telp'];

$datausername = mysqli_query($connect,"select * from user where username='$username'");
$cekusername = mysqli_num_rows($datausername);

if ($cekusername > 0){
    echo '<script language="javascript">alert("Username sudah ada, silahkan gunakan username lain")</script>';
    echo '<meta http-equiv="refresh" content="0; URL=../register/register.php">';
}else{
    $query = mysqli_query($connect, "INSERT INTO user (username,password,no_telp, status_user)
    VALUES ('$username',md5('$password'),'$no_telp','konsumen')");
        if($query){
    // echo '<script language="javascript">alert("register berhasil. silahkan login")</script>';
    echo '<script language="javascript">alert("Berhasil registrasi, silahkan login lagi")</script>';
    echo '<meta http-equiv="refresh" content="0; URL=../login/login.php">';
    }   else{
        echo mysqli_error($connect);
    }
    // echo '<script language="javascript">alert("register berhasil. silahkan login")</script>';
    // echo '<script language="javascript">alert("Registrasi berhasil, sekarang anda bisa login")</script>';
    // echo '<meta http-equiv="refresh" content="0; URL=../login/index.php">';
}//else{
//     echo mysqli_error($connect);
// }

?>



















?>