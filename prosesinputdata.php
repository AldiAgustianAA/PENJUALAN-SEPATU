<?php

$kode=$_POST['kode'];
$merk=$_POST['merk'];
$size=$_POST['size'];
$warna=$_POST['warna'];
$harga=$_POST['harga'];
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$hp=$_POST['hp'];

include "koneksidata.php";

$simpan=$koneksi->query("insert into penjualan_sepatu(kode,merk,size,warna,harga,nama,alamat,hp) 
                        values ('$kode', '$merk', '$size', '$warna', '$harga', '$nama', '$alamat', '$hp')");

if($simpan==true){

    header("location:menampilkandata.php?pesan=inputBerhasil");
} else{
    echo "Error";
}




?>