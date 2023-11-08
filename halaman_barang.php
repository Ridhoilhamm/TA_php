<?php
include "header.php";
?>
<h2>Daftar Barang</h2>
<div class="row">
    <?php
    include "koneksi.php";
    $qry_barang = "select * from barang";
    $result = $conn->query($qry_barang);

    if ($result->num_rows > 0) {
        while ($dt_barang = $result->fetch_assoc()) {
            $Gambar = $dt_barang["foto_barang"];
            $Gambar = base64_encode($Gambar);
            $Gambar = "data:image/jpeg;base64, " . $Gambar;
            ?>
            <div class="col-md-3">
                <div class="card">
                    <img src="<?= $Gambar ?>" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">
                            <?= $dt_barang['merek_barang'] ?>
                        </h5>
                        <p class="card-text">
                            <?= substr($dt_barang['jenis_barang'], 0, 20) ?>
                        </p>
                        <a href="beli_barang.php?id_barang=<?= $dt_barang['id_barang'] ?>" class="btn btn-primary">beli</a>
                    </div>
                </div>
            </div>
            <?php
        }


    }
    ?>
</div>