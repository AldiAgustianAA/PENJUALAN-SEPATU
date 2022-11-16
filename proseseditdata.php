<?php

include "koneksidata.php";

$id=$_POST['sepatu_id'];
$kode=$_POST['kode'];
$merk=$_POST['merk'];
$size=$_POST['size'];
$warna=$_POST['warna'];
$harga=$_POST['harga'];
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$hp=$_POST['hp'];

$ubah=$koneksi->query("update penjualan_sepatu set kode='$kode', merk='$merk', size='$size', warna='$warna', harga='$harga', nama='$nama', alamat='$alamat', hp='$hp' where sepatu_id='$id'");

if($ubah==true){

    header("location:menampilkandata.php?pesan=editBerhasil");
} else{
    echo "Error";
}

?>