<?php

$id=$_GET['id'];

include "koneksidata.php";

$hapus=$koneksi->query("delete from penjualan_sepatu where sepatu_id='$id'");

if($hapus==true){

    header("location:menampilkandata.php?pesan=hapusBerhasil");

} else{
    echo "Error";
}


?>