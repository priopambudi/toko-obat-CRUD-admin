
<?php
    
    include 'koneksi.php';
    session_start();
    if(isset($_POST['insert']))
    {
        $namapembeli = $_POST['namapembeli'];
        $nama_obat = $_POST['nama_obat'];
        $username = $_SESSION['username'];
        $jmlh_obat = $_POST['jmlh_obat'];

        $query = "INSERT INTO tabel_pembeli (namapembeli,nama_obat,jmlh_obat) VALUES ('$namapembeli','$nama_obat','$jmlh_obat')";
        $query_run = mysqli_query($connect,$query);

        if($query_run)
        {
            $query2 = "INSERT INTO keranjang (namapembeli,nama_obat,jmlh_obat,username) VALUES ('$namapembeli','$nama_obat','$jmlh_obat','$username')";
            $query2_run = mysqli_query($connect,$query2);
            // var_dump($namapembeli);
            // var_dump($nama_obat);
            // die();
            if($query2_run){
                echo '<script language="javascript">alert("Data Tersimpan ")</script>';
                echo '<meta http-equiv="refresh" content="0; URL=../sitobat/index.php">';
            }
            else{
                echo '<script language="javascript">alert("Gagal ")</script>';
                // echo '<meta http-equiv="refresh" content="0; URL=../tasbd/index.php">';
            }
            
        }
        else
        {
            echo ' <script> type="text/javascript" alert("Data Tidak Tersimpan") </script> ';
        }
    }
    
?>