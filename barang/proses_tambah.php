<?php
if ($_POST) {
    $jenis_barang = $_POST['jenis_barang'];
    $merek_barang = $_POST['merek_barang'];
    $warna_barang = $_POST['warna_barang'];
    $ukuran_barang = $_POST['ukuran_barang'];
    $harga_barang = $_POST['harga_barang'];




    if (empty($jenis_barang)) {
        echo "<script>alert('jenis barang tidak boleh kosong');location.href='tambah_barang.php';</script>";

    } elseif (empty($merek_barang)) {
        echo "<script>alert('merek barangtidak boleh kosong');location.href='tambah_barang.php';</script>";

    } elseif (empty($warna_barang)) {
        echo "<script>alert('warna barang tidak boleh kosong');location.href='tambah_barang.php';</script>";

    } elseif (empty($ukuran_barang)) {
        echo "<script>alert('ukuran barang tidak boleh kosong');location.href='tambah_barang.php';</script>";

    } elseif (empty($harga_barang)) {
        echo "<script>alert('harga barang tidak kosong');location.href='tambah_barang.php';</script>";

    }else {
        include "../koneksi.php";
        $insert = mysqli_query($conn, "insert into barang(jenis_barang, merek_barang, warna_barang, ukuran_barang, harga_barang) value ('" . $jenis_barang . "','" . $merek_barang . "','" . $warna_barang . "','" . $ukuran_barang . "','" . $harga_barang . "')");
        if (!empty($_FILES["foto_barang"]) && $_FILES["foto_barang"]["size"] < (1 * 1024 * 1024)) {
            $dir = "foto/";
            $targetFile = $dir . basename($merek_barang);
            move_uploaded_file($_FILES["foto_barang"]["tmp_name"], $targetFile);
            $foto = mysqli_real_escape_string($conn, file_get_contents($targetFile));
            mysqli_query($conn, "update barang set foto_barang = '$foto' where id_barang = ".mysqli_insert_id($conn)."");
        } else {
            echo "<script>alert('Ukuran file terlalu besar (max 5 MB)');location.href='user.php';</script>";
        }


        if ($insert) {
            echo "<script>alert('Sukses menambahkan barang');location.href='tambah_barang.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan kelas');location.href='tambah_barang.php';</script>";
        }
    }


}
?>