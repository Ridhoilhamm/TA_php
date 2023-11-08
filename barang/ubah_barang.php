<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>

<body>
    <?php
    include "../koneksi.php";
    $qry_get_barang = mysqli_query($conn, "select * from barang where id_barang = '" . $_GET['id_barang'] . "'");
    $dt_barang = mysqli_fetch_array($qry_get_barang);

    $Gambar = $data_barang["foto_barang"];
    $Gambar = base64_encode($Gambar);
    $Gambar = "data:image/jpeg;base64, " . $Gambar;
    ?>
    <h3>Ubah Barang</h3>
    <form action="proses_ubah.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id_barang" value="<?= $dt_barang['id_barang'] ?>">
        Jenis Barang:
        <input type="text" name="jenis_barang" value="<?= $dt_barang['jenis_barang'] ?>" class="form-control">
        Merek Barang:
        <input type="text" name="merek_barang" value="<?= $dt_barang['merek_barang'] ?>" class="form-control">
        Warna Barang :
        <input type="text" name="warna_barang" value="<?= $dt_barang['warna_barang'] ?>" class="form-control">
        Ukuran Barang :
        <input type="text" name="ukuran_barang" value="<?= $dt_barang['ukuran_barang'] ?>" class="form-control">
        Harga Barang :
        <input type="text" name="harga_barang" value="<?= $dt_barang['harga_barang'] ?>" class="form-control">
        Foto Barang :
        <input type="file" name="foto_barang" accept="image/*">

        <input type="submit" name="simpan" value="Ubah barang" class="btn btn-primary">




    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous"></script>
</body>

</html>