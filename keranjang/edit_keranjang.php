<?php

session_start();

include '../koneksi.php';
if ($_SESSION['status_user'] != "konsumen") {
    echo '<meta http-equiv="refresh" content="0; URL=../login/login.php">';
}
$id_keranjang = $_GET['id_keranjang'];
$namapembeli = $_GET['namapembeli'];
$nama_obat = $_GET['nama_obat'];
$jmlh_obat = $_GET['jmlh_obat'];
// var_dump($namapembeli);
// die();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ngobat Kuy</title>

    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

</head>
<body>
<style>
input[type="submit"]{
    border-radius: 6px;
    height: 4;
    width: 4;
    border: #ffc107;
    cursor: pointer;
    background: #ffc107;
    color: #fff;
    padding:5px 30px;
}
.batas {
    margin-left: 33%;
}

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
  }
  
li {
    float: left;
}
  
li a {
    display: block;
    color: white;
    text-align: center;
    padding: 16px 15px;
    text-decoration: none;
}
  
  /* Change the link color to #111 (black) on hover */
li a:hover {
    background-color: #111;
}

td {
    padding: 10px 10px ;
    text-align: center;
}

tr:nth-child(even) {background-color: #f2f2f2;}

th {
    padding: 10px 10px ;
    text-align: center;
    background-color: #4CAF50;
    color: white;
}

select{
    width: 100%;
    border: 1px solid grey;
    border-color: #ffc107;
    border-radius: 05px;
    box-shadow: grey;
    padding: 10px 15px;
}
.judultabel{
    color: white;
}

h1{
    text-align: center;
    /*ketebalan font*/
    font-weight: 300;
}

.tulisan_login{
    text-align: center;
    /*membuat semua huruf menjadi kapital*/
    text-transform: uppercase;
}

.kotak_login{
    width: 350px;
    background: white;
    /*meletakkan form ke tengah*/
    margin: 80px auto;
    padding: 30px 20px;
    border-radius: 10px;
}

label{
    font-size: 11pt;
}

.form_login{
    /*membuat lebar form penuh*/
    box-sizing : border-box;
    width: 100%;
    padding: 10px;
    font-size: 11pt;
    margin-bottom: 20px;
}

.tombol_login{
    background: #46de4b;
    color: white;
    font-size: 11pt;
    width: 100%;
    border: none;
    border-radius: 3px;
    padding: 10px 20px;
}

.link{
    color: #232323;
    text-decoration: none;
    font-size: 10pt;
}
#batas{
    padding:10px 20px;
}
</style>

<main>
        <div class="container text-center">
            <!-- <h1 class="py-4 bg-dark text-light rounded"><i class="material-icons">local_hospital</i> Toko Obat Sederhana </h1> -->
            <br><br>
            <div class="d-flex justify-content-center">
                <form action="../keranjang/aksi_edit.php" method="POST" class="w-50">
                    
                    <div class="py-2">
                        <div class="input-group mb-2">
                            <input type="hidden" value='<?php echo $id_keranjang  ?>' name="id_keranjang"  class="form-control" id="inlineFormInputGroup" >
                        </div>
                    </div>
                    
                    <div class="py-2">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text bg-warning"><i class="material-icons">supervised_user_circle</i></div>
                            </div>
                            <input type="text" value='<?php echo $namapembeli  ?>' name="namapembeli"  class="form-control" id="inlineFormInputGroup" >
                        </div>
                    </div>

                    <div class="py-2">
                        <select name="nama_obat" class="required">
                        <option value="<?php echo $nama_obat ?>"> Pilih Obat </option>
                        <?php 
                            $query = "SELECT nama_obat FROM tabel_obat";
                            $result = mysqli_query($connect, $query) or die(mysqli_error($connect));
                            while ($row = mysqli_fetch_array($result)) {
                        ?>

                        <option value="<?php echo $row['nama_obat']; ?>">
                            <?php echo $row['nama_obat']; ?>
                        </option>
                        <?php } ?>
                        </select>
                    </div>

                    <div class="py-2">
                        <select name="jmlh_obat" id="">
                            <option value=""> Jumlah </option>
                            <option value="1"> 1 pak </option>
                            <option value="2"> 2 pak </option>
                            <option value="3"> 3 pak</option>
                            <option value="4"> 4 pak</option>
                            <option value="5"> 5 pak</option>
                        </select>
                    </div>

                    <div class="py-2">
                        <input type="submit" name="insert" value="Update">
                    </div>
                </form>
            </div>
        </div>
    </main>


</body>
</html>

