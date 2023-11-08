<?php
if ($_POST) {
    $id_barang= $_POST['id_barang'];
    $jenis_barang = $_POST['merek_barang'];
    $merek_barang = $_POST['jenis_barang'];
    $warna_barang = $_POST['warna_barang'];
    $ukuran_barang = $_POST['ukuran_barang'];
    $harga_barang = $_POST['harga_barang'];
    $foto_barang = $_POST['foto_barang'];
    if (empty($merek_barang)) {
        echo "<script>alert('merek barang tidak boleh kosong');location.href='tambah_barang.php';</script>";
    } elseif (empty($jenis_barang)) {
        echo "<script>alert('jenis barang tidak boleh kosong');location.href='tambah_barang.php';</script>";
    } else {
        include "../koneksi.php";
        $update = mysqli_query($conn, "update barang set jenis_barang='" . $jenis_barang . "',merek_barang='" . $merek_barang . "',warna_barang='" .$warna_barang. "',ukuran_barang='" .$ukuran_barang. "',harga_barang='" . $harga_barang . "',foto_barang='" .$foto_barang."' where id_barang= $id_barang") or die(mysqli_error($conn));
        if ($update) {
            echo "<script>alert('Sukses update barang');location.href='tampil_barang.php';</script>";
        } else {
            echo "<script>alert('Gagal update barang');location.href='ubah_barang.php?id=" . $id_barang. "';</script>";
        }
    }
}