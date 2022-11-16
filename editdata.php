<!doctype HTML>
<html>
<head>
    <title>EDIT DATA PENJUALAN</title>

<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1><center><b>EDIT DATA</b></center></h1>
                <form action="proseseditdata.php" method="POST">
                <?php
                $id=$_GET['id'];
                include "koneksidata.php";
                $tampil=$koneksi->query("select * from penjualan_sepatu where sepatu_id='$id'");
                $row=$tampil->fetch_assoc();
                ?>
                    
                <div class="form-group">
                    <label for="kode">KODE</label>
                    <input type="hidden" name="sepatu_id" value="<?php echo $row['sepatu_id']?>" class="form-control">
                    <input type="number" name="kode" value="<?php echo $row['kode']?>" class="form-control">
                </div>

                <div class="form-group">
                    <label for="merk">MERK</label>
                    <input type="text" name="merk" value="<?php echo $row['merk']?>" class="form-control">
                </div>

                <div class="form-group">
                    <label for="size">SIZE</label>
                    <input type="text" name="size" value="<?php echo $row['size']?>" class="form-control">
                </div>

                <div class="form-group">
                    <label for="warna">WARNA</label>
                    <input type="text" name="warna" value="<?php echo $row['warna']?>" class="form-control">
                </div>

                <div class="form-group">
                    <label for="harga">HARGA</label>
                    <input type="text" name="harga" value="<?php echo $row['harga']?>" class="form-control">
                </div>

                <div class="form-group">
                    <label for="nama">NAMA PEMBELI</label>
                    <input type="text" name="nama" value="<?php echo $row['nama']?>" class="form-control">
                </div>

                <div class="form-group">
                    <label for="alamat">ALAMAT</label>
                    <textarea name="alamat" class="form-control"><?php echo $row['alamat']?></textarea>
                </div>

                <div class="form-group">
                    <label for="hp">NO HP</label>
                    <input type="text" name="hp" value="<?php echo $row['hp']?>" class="form-control">
                </div>

                    <input type="submit" name="kirim" value="UBAH" class="btn btn-info">
                    <input type="reset" name="kosongkan" value="KOSONGKAN" class="btn btn-danger">
                </form>
            </div>
        </div>
    </div>

<script src="bootstrap/js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>