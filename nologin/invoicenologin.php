<?php
 include '../koneksi.php';
 session_start();
//  if($_SESSION['status'] != "login"){
//     echo '<meta http-equiv="refresh" content="0; URL=../tasbd/login/index.php">';
//  }
?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Invoice sederhana untuk Pembeli</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <style>

@sR: #418a95;
@sRLight: #418a95 + #222;
@sRDark: #418a95 - #222;
@darkGrey:#6b6b6b;
@offWhite:#f6f3f7;
@bg:#f6f3f7 - #111;
@darkBg:#f6f3f7 - #222;

*{  
  margin:0;
  padding:0;
  font-family:Lato;
}

body{
  padding:0px;
  background:@bg;
}

.flatTable{  
  width:100%;
  min-width:500px;
  border-collapse:collapse;  
  font-weight:bold;
  color:@darkGrey;
  
  tr{
    height:50px;
    background:@darkBg;
    border-bottom:rgba(0,0,0,.05) 1px solid;
  }
  
  td{    
    box-sizing:border-box;
    padding-left:30px;
    
  }

.titleTr{
  height:70px;  
  color:#f6f3f7; 
  background:@sR;  
  border:0px solid;
}

.plusTd{
    background:url(https://i.imgur.com/3hSkhay.png) center center no-repeat, rgba(0,0,0,.1);
}

.controlTd{  
  position:relative;
  width:80px;
  background:url(https://i.imgur.com/9Q5f6cv.png) center center no-repeat;
  cursor:pointer;
}

.headingTr{
    height:30px;
    background:@sRLight;
    color:@offWhite; 
    font-size:8pt;
    border:0px solid;
}  
}

.button{
  text-align:center;
  cursor:pointer;
}

.sForm{
  position:absolute;
  top:0;
  right:-400px;
  width:400px;
  height:100%; 
  background:@darkBg;  
  overflow:hidden;  
  transition:width 1s, right .3s;
  padding:0px;
  box-sizing:border-box;
  
  .close{
    float:right; 
    height:70px;
    width:80px;
    padding-top:25px;    
    box-sizing:border-box;
    background:rgba(255,0,0,.4);
      
  }
  
  .title{
    width:100%;
    height:70px;
    padding-top:20px;
    padding-left:20px;
    box-sizing:border-box;
    background:rgba(0,0,0,.1);
  }
}
.open{  
  right:0;
  width:400px !important;
}

.settingsIcons{
  position:absolute; 
  top:0;
  right:0;
  width:0;

  overflow:hidden;

}

.display{

  width:300px;
}

.settingsIcon{
  float:right; 
  background:@sR;
  color:@offWhite;
  height:50px;
  width:80px;
  padding-top:15px;
  box-sizing:border-box;
  text-align:center;
  overflow:hidden;
  transition:width 1s;
}

.settingsIcon:hover{
  background:@sRDark;
}

tr:nth-child(3){
   .settingsIcon{
    height:51px;
  }
}

.openIcon{
   width:80px; 
}

    .invoice-box {
        max-width: 800px;
        margin: auto;
        padding: 30px;
        border: 1px solid #eee;
        box-shadow: 0 0 10px rgba(0, 0, 0, .15);
        font-size: 16px;
        line-height: 24px;
        font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        color: #555;
    }
    
    .invoice-box table {
        width: 100%;
        line-height: inherit;
        text-align: left;
    }

    .invoice-box table td {
        padding: 5px;
        vertical-align: top;
    }

    /* .invoice-box table tr td:nth-child(2) {
        text-align: right;
    } */

    .invoice-box table tr.top table td {
        padding-bottom: 20px;
    }

    .invoice-box table tr.top table td.title {
        font-size: 25px;
        line-height: 45px;
        color: #333;
    }

    .invoice-box table tr.information table td {
        padding-bottom: 40px;
    }

    .invoice-box table tr.heading td {
        background: #eee;
        border-bottom: 1px solid #ddd;
        font-weight: bold;
    }

    .invoice-box table tr.details td {
        padding-bottom: 20px;
    }

    .invoice-box table tr.item td{
        border-bottom: 1px solid #eee;
    }

    .invoice-box table tr.item.last td {
        border-bottom: none;
    }

    .invoice-box table tr.total td:nth-child(2) {
        border-top: 2px solid #eee;
        font-weight: bold;
    }

    @media only screen and (max-width: 600px) {
        .invoice-box table tr.top table td {
            width: 100%;
            display: block;
            text-align: center;
        }

        .invoice-box table tr.information table td {
            width: 100%;
            display: block;
            text-align: center;
        }
    }

    /** RTL **/
    .rtl {
        direction: rtl;
        font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
    }

    .rtl table {
        text-align: right;
    }

    .rtl table tr td:nth-child(2) {
        text-align: left;
    }
    .tabel{
        text-align: center;
    }
    .warna{
        color: white;
        padding-top: 50;
    }

    button {
        color: #444444;
        background: #F3F3F3;
        border: 1px #DADADA solid;
        padding: 5px 10px;
        border-radius: 2px;
        font-weight: bold;
        font-size: 9pt;
        outline: none;
    }

    button:hover {
        border: 1px #C6C6C6 solid;
        box-shadow: 1px 1px 1px #EAEAEA;
        color: #333333;
        background: #F7F7F7;
    }

    button:active {
        box-shadow: inset 1px 1px 1px #DFDFDF;   
    }
    </style>
</head>

<body>

<br>
    <div class="invoice-box">
        <table cellpadding="0" cellspacing="0">
            <tr class="top">
                <td colspan="2">
                    <table>
                        <tr>
                            <td class="title">
                                <h1>SiTobat</h1>
                            </td>
                            
                            <td>
                                Invoice<br>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            
            <tr class="information">
                <td colspan="2">
                    <table>
                        <tr>
                            <td>
                                SiTobat, Inc.<br>
                                Jalan Pengobatan No. 13<br>
                                Kultur Obat Raya
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>

        <table>
            <tr class="tabel warna">
                <th bgcolor="#3d3c3c">Nama Pembeli</th>
                <th bgcolor="#3d3c3c">Nama Obat</th>
                <th bgcolor="#3d3c3c">Jumlah Obat</th>
                <th bgcolor="#3d3c3c">Harga Obat/pack</th>
            </tr>
            <?php
                $query = "SELECT * FROM daftar_invoice ";
                $result = mysqli_query($connect, $query) or die(mysqli_error($connect));
                while ($row = mysqli_fetch_array($result)) {
            ?>
            <tr class="tabel">
                <td><?php echo $row['namapembeli']; ?></td>
                <td><?php echo $row['nama_obat']; ?></td>
                <td><?php echo $row['jmlh_obat']; ?></td>
                <td><?php echo $row['harga_obat']; ?></td>
            </tr>
            <?php } ?>
        </table>
        <br><br><br>
        <div class="w3-container">
        <button class="w3-btn w3-red"><a href="../nologin/nologin.php">Kembali</a></button>
        </div>
    
</body>

</html>