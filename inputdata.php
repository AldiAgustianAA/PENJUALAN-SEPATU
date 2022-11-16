<!doctype HTML>
<html>
<head>
    <title>INPUT DATA</title>

<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1><center><b>INPUT DATA</b></center></h1>
                <form action="prosesinputdata.php" method="POST">
                    <div class="form-group">
                        <label for="kode">KODE</label>
                        <input type="number" name="kode" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="merk">MERK</label>
                        <input type="text" name="merk" class="form-control">
                    </div>

                     <div class="form-group">
                        <label for="size">SIZE</label>
                        <input type="text" name="size" class="form-control">
                    </div>
                     <div class="form-group">
                        <label for="warna">WARNA</label>
                        <input type="text" name="warna" class="form-control">
                    </div>
                     <div class="form-group">
                        <label for="harga">HARGA</label>
                        <input type="text" name="harga" class="form-control">
                    </div>

                     <div class="form-group">
                        <label for="nama">NAMA PEMBELI</label>
                        <input type="text" name="nama" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="alamat">ALAMAT</label>
                        <textarea name="alamat" class="form-control"></textarea>
                    </div>

                     <div class="form-group">
                        <label for="hp">HP</label>
                        <input type="text" name="hp" class="form-control">
                    </div>

                    <input type="submit" name="kirim" value="SIMPAN" class="btn btn-info">
                    <input type="reset" name="kosongkan" value="KOSONGKAN" class="btn btn-danger">
                </form>
            </div>
        </div>
    </div>

<script src="bootstrap/js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>