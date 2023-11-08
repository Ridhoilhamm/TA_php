<?php
include "header.php";
session_start();
?>
<h2>Daftar Barang di Keranjang</h2>
<table class="table table-hover striped">
    <thead>
        <tr>
            <th>NO</th>
            <th>Nama Barang</th>
            <th>Jumlah</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        <?php
        
        foreach ($_SESSION['cart'] as $key_produk => $val_produk): ?>
            <tr>
                <td>
                <?= $key_produk +1 ?>
                </td>
                <td>
                    <?= $val_produk['merek_barang']?>
                </td>
                <td>
                    <?= $val_produk['qty'] ?>
                </td>
                <td><a href="hapus_keranjang.php?id=<?= $key_produk ?>" class="btn btn-danger"><strong>X</strong></a></td>
            </tr>

        <?php endforeach ?>
    </tbody>
</table>
<a href="checkout.php" class="btn btn-primary">Check Out</a>
<?php
// include "footer.php";
?>