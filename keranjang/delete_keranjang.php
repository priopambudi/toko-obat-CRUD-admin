<?php
    
    include '../koneksi.php';
    session_start();
  
        $username = $_SESSION['username'];
        // $jmlh_obat = $_POST['jmlh_obat'];

        $query = "DELETE FROM keranjang WHERE username='$username'";
        $query_run = mysqli_query($connect,$query);
        // var_dump($query);
        // die();
       

       if($query_run)
        {
            // echo '<script language="javascript">alert("Data Tersimpan ")</script>';
            session_destroy();
            echo '<meta http-equiv="refresh" content="0; URL=../nologin/nologin.php">';
        }
        
        else
        {
            echo ' <script> type="text/javascript" alert("Data Tidak Tersimpan") </script> ';
        }

    
?>