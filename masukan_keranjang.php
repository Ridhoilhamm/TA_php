<?php 
session_start();
    if($_GET){
        include "koneksi.php";
        
        $qry_get_barang=mysqli_query($conn,"select * from barang where id_barang = '".$_GET['id_barang']."'");
        $dt_barang=mysqli_fetch_array($qry_get_barang);
        $_SESSION['cart'][]=array(
            'id_barang'=>$dt_barang['id_barang'],
            'merek_barang'=>$_GET['nama_barang'],
            'jenis_barang'=>$dt_barang['jenis_barang'],
            'qty'=>$_GET['jumlah_beli']
        );
    }
    header('location: keranjang.php');
?>