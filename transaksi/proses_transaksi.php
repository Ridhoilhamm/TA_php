<?php
if ($_POST) {
    $jumlah_pesanan = $_POST['jumlah_pesanan'];
    $tanggal_transaksi = $_POST['tanggal_transaksi'];
    $tanggal_pengiriman = $_POST['tanggal_pengiriman'];
    $estimasi_diterima = $_POST['estimasi_diterima'];
    




    if (empty($jumlah_pesanan)) {
        echo "<script>alert('jenis barang tidak boleh kosong');location.href='tambah_barang.php';</script>";

    } elseif (empty($tanggal_transaksi)) {
        echo "<script>alert('merek barangtidak boleh kosong');location.href='tambah_barang.php';</script>";

    } elseif (empty($tanggal_pengiriman)) {
        echo "<script>alert('warna barang tidak boleh kosong');location.href='tambah_barang.php';</script>";

    } elseif (empty($estimasi_diterima)) {
        echo "<script>alert('ukuran barang tidak boleh kosong');location.href='tambah_barang.php';</script>";

    } else {
        include "../koneksi.php";
        $insert = mysqli_query($conn, "insert into transaksi(jumlah_pesanan, tanggal_transaksi, tanggal_penggriman, estimasi diterima) value ('" . $jumlah_pesanan . "','" . $tanggal_transaksi . "','" . $tanggal_pengiriman. "','" . $estimasi_diterima . "')");
        
        if ($insert) {
            echo "<script>alert('Sukses menambahkan Transaksi');location.href='histori_transaksi.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan Transaksi');location.href='tambah_transaksi.php';</script>";
        }
    }


}
?>