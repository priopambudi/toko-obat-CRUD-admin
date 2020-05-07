<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = '';

$dbname = "sitobat";

$connect = new mysqli ($dbhost,$dbuser,$dbpass,$dbname);

if($connect->connect_error){

    die('koneksi gagal: '. $connect->connect_error);

}

?>