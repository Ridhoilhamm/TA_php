<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah akun</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>


<body>
    <h3>Create Barang</h3>
    <form action="proses_tambah.php" method="post" enctype="multipart/form-data">


        Jenis barang :
        <input type="text" name="jenis_barang" value="" class="form-control">
        Merek Barang :
        <input type="text" name="merek_barang" value="" class="form-control">
        Warna Barang :
        <input type="text" name="warna_barang" value="" class="form-control">
        Ukuran Barang :
        <input type="text" name="ukuran_barang" value="" class="form-control">
        Harga Barang:
        <input type="number" name="harga_barang" class="form-control">
        Foto Barang:
        <input type="file" name="foto_barang" accept="image/*">
        <input type="submit" name="simpan" value="submit" class="btn btn-primary">
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous"></script>


</body>

</html>