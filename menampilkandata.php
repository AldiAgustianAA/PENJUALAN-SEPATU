<!doctype HTML>
<html>
<head>
    <title>DATA PENJUALAN SEPATU</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="DataTables/datatables.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
        <h1><center><b>DATA PENJUALAN SEPATU</b></center></h1>
            <?php 

            if(@$_GET['pesan']=="inputBerhasil"){

            ?>
                    <div class="alert alert-success">
                    Penyimpanan Berhasil!
                    </div>
            <?php

            }

            ?>


            <?php 

            if(@$_GET['pesan']=="hapusBerhasil"){

            ?>
                    <div class="alert alert-success">
                    Data Berhasil Dihapus!
                    </div>
            <?php

            }

            ?>

            <?php 

            if(@$_GET['pesan']=="editBerhasil"){

            ?>
                    <div class="alert alert-success">
                    Perubahan Berhasil!
                    </div>
            <?php

            }

            ?>


        <table id="dataTables" class="table table-bordered">
        <thead>
            <tr>
                <th>KODE</th>
                <th>MERK</th>
                <th>SIZE</th>
                <th>WARNA</th>
                <th>HARGA</th>
                <th>NAMA PEMBELI</th>
                <th>ALAMAT</th>
                <th>NO HP</th>
                <th>
                    <a href="inputdata.php">
                        <button class="btn btn-info glyphicon glyphicon-plus"></button>
                    </a>
                </th>
            </tr> 
        </thead> 
        <tbody>
        <?php

        include "koneksidata.php";
        $sql=$koneksi->query("select * from penjualan_sepatu order by kode ASC");

        while($row= $sql->fetch_assoc()){
        ?>

            <tr>
                <td><?php echo $row['kode']?></td>
                <td><?php echo $row['merk']?></td>
                <td><?php echo $row['size']?></td>
                <td><?php echo $row['warna']?></td>
                <td><?php echo $row['harga']?></td>
                <td><?php echo $row['nama']?></td>
                <td><?php echo $row['alamat']?></td>
                <td><?php echo $row['hp']?></td>
                <td>

                <a href="editdata.php?id=<?php echo $row['sepatu_id']?>">
                    <button class="btn btn-xs btn-danger glyphicon glyphicon-edit"></button>
                </a>

                <a href="hapusdata.php?id=<?php echo $row['sepatu_id']?>" onclick=" return confirm('Anda yakin menghapus data?')">
                    <button class="btn btn-xs btn-warning glyphicon glyphicon-remove"></button>
                </a>

                </td>
            </tr>

        <?php    
        }
        ?>
        </tbody>
        </table>
        </div>
    </div>
</div>


<script src="bootstrap/js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>

<script src="DataTables/datatables.min.js"></script>

<script type="text/javascript">
 $(document).ready(function(){
     $('#dataTables').DataTable();
 });

</script>

</body>
</html>