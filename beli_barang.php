<?php 
    include "header.php";
    include "koneksi.php";
    $qry_detail_barang=mysqli_query($conn,"select * from barang where id_barang = '".$_GET['id_barang']."'");
    $dt_barang=mysqli_fetch_array($qry_detail_barang);

    $Gambar = $dt_barang["foto_barang"];
    $Gambar = base64_encode($Gambar);
    $Gambar = "data:image/jpeg;base64, " . $Gambar;
?>
<h2>Pinjam Buku</h2>
<div class="row">
    <div class="col-md-4">
        <img src="<?= $Gambar ?>" class="card-img-top">
    </div>
    <div class="col-md-8">
        <form action="masukan_keranjang.php?id_barang=<?=$dt_barang['id_barang']?>" method="get">
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <td>Nama Buku</td><td><?=$dt_barang['merek_barang']?></td>
                        <input type="hidden" name="nama_barang" value="<?= $dt_barang['merek_barang'] ?>">
                    </tr>
                    <tr>
                        <td>Deskripsi</td><td><?=$dt_barang['jenis_barang']?></td>
                    </tr>
                    <tr>
                        <td>Harga:</td><td><?=$dt_barang['harga_barang']?></td>
                    </tr>
                    <tr>
                        <td>Ukuran </td><td><?=$dt_barang['ukuran_barang']?></td>
                    </tr>
                    <tr>
                        <td>Jumlah Pinjam</td><td><input type="number" name="jumlah_beli" value="1"></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input class="btn btn-success" type="submit" value="Masukkan Keranjang"></td>
                    </tr>
                </thead>
            </table>
        </form>
    </div>
</div>
<?php 
    
?>
