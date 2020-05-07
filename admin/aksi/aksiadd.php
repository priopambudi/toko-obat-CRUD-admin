
<?php
    
    include '../../koneksi.php';
    session_start();
    if(isset($_POST['tambah']))
    {
        $nama_obat = $_POST['nama_obat'];
        $jenis_obat = $_POST['jenis_obat'];
        $harga_obat = $_POST['harga_obat'];
        //var_dump($jenis_obat);
        //die();

        $query = "INSERT INTO tabel_obat (nama_obat,jenis_obat,harga_obat) VALUES ('$nama_obat','$jenis_obat','$harga_obat')";
        $query_run = mysqli_query($connect,$query);

        if($query_run)
        {
            echo '<script language="javascript">alert("Data Tersimpan ")</script>';
            echo '<meta http-equiv="refresh" content="0; URL=../adminhome.php">';
        }
        else
        {
            echo ' <script> type="text/javascript" alert("Data Tidak Tersimpan") </script> ';
        }
    }
    
?>