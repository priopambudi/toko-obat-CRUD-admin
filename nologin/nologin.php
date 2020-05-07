<?php
 include '../koneksi.php';
 session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SiTobat</title>

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
    margin-left: 38%;
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

    <ul>
        <div class="batas">
            <li><a href="../nologin/nologin.php">Home</a></li>
            <li><a href="../nologin/keranjangnologin.php">Keranjang</a></li>
            <!-- <li><a href="../nologin/invoicenologin.php">Invoice</a></li> -->
            <div id="batas">
            <form action="/sitobat/login/login.php" method="post">
                <input type="submit" value="masuk/daftar">
            </form>
            </div>
        </div>
    </ul>

    <center>
    </div>
        <div class="alert alert-danger" role="alert">
        Silahkan masuk untuk melakukan pembelian
    </div>
    </center>


    <!-- <p>Halo, Welcome -->
        <?php // echo $_SESSION['username'];  ?> 
    <!-- <br>Login AS -->
        <?php // echo $_SESSION['status_user']; ?>
    <!-- </p> -->

    <main>
        <div class="container text-center">
            <!-- <h1 class="py-4 bg-dark text-light rounded"><i class="material-icons">local_hospital</i> Toko Obat Sederhana </h1> -->
            <br><br>
            <div class="d-flex justify-content-center">
                <form action="../sitobat/aksi_beli.php" method="POST" class="w-50">
                    <div class="py-2">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text bg-warning"><i class="material-icons">supervised_user_circle</i></div>
                            </div>
                            <input disabled type="text" name="namapembeli" autocomplete="off" class="form-control" id="inlineFormInputGroup" placeholder="Nama Pembeli">
                        </div>
                    </div>

                    <div class="py-2">
                        <select disabled name="nama_obat" class=""required>
                        <option disabled value=""> Pilih Obat </option>
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
                        <select disabled name="jmlh_obat" id="">
                            <option value=""> Jumlah </option>
                            <option value="1"> 1 pak </option>
                            <option value="2"> 2 pak </option>
                            <option value="3"> 3 pak</option>
                            <option value="4"> 4 pak</option>
                            <option value="5"> 5 pak</option>
                        </select>
                    </div>

                    <div class="py-2">
                        <input disabled type="submit" name="insert" value="Beli Obat">
                    </div>
                </form>
            </div>
        </div>
    </main>

    <br>
    <center>

    <table style="width:50%;">
        <thead>
        <tr>
            <form method="GET" action="nologin.php">
            <div class="d-flex justify-content-center">
                <div class="py-2">
                    <div class="input-group mb-2">
                        <input type="text" name="cari" autocomplete="off" class="form-control" id="inlineFormInputGroup" placeholder="Search"> &nbsp;
                        <button type="submit" class="btn btn-success" value="cari">cari</button> 
                    </div>
                </div>
            </div>
            </form> <br>
            <td colspan="2" bgcolor="#3d3c3c" class="judultabel"> Daftar obat yang tersedia </td>
        </tr>
        <tr>
            <th>Nama Obat</th>
            <th>Harga Obat</th>
        </tr>
        </thead>

        <tbody>
        <tr>
            <?php
            if(isset($_GET['cari'])){
                $cari = $_GET['cari'];
                $query = "SELECT * FROM tabel_obat WHERE nama_obat LIKE '%".$cari."%' OR harga_obat LIKE '%".$cari."%'
                ORDER BY id_obat ";
                $result = mysqli_query($connect,"SELECT * FROM tabel_obat");
            }
            else {
                $query = "SELECT * FROM tabel_obat ORDER BY id_obat";
            }
            $result = mysqli_query($connect, $query) or die(mysqli_error($connect));
            while ($row = mysqli_fetch_array($result)) {
            ?>
            
            <td>
                <?php echo $row['nama_obat']; ?>
            </td>
            <td>
                <?php echo $row['harga_obat']; ?> / pack
            </td>
            </tr>
            <?php }  ?>
        </tbody>
    </table>

<br><br>
    </center>
    <br><br><br><br>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>
