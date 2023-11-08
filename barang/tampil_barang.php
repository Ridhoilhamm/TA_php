<?php 

?>

<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>
<style>
    /* img {
        width: 10rem;
        height: 10rem;
    } */
</style>

<body>
    <h3>Tampil barang</h3>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Id_Barang</th>
                <th>Jenis_Barang</th>
                <th>Merek_Barang</th>
                <th>Ukuran_Barang</th>
                <th>Harga_Barang</th>
                <th>Foto_Barang</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include "../koneksi.php";
            $qry_barang = mysqli_query($conn, "select * from barang");
            $no = 0;
            while ($data_barang = mysqli_fetch_array($qry_barang)) {
                $no++; 
                $Gambar = $data_barang["foto_barang"];
                $Gambar = base64_encode($Gambar);
                $Gambar = "data:image/jpeg;base64, " . $Gambar;
                
                
                ?>
                <tr>
                    <td>
                        <?= $no ?>
                    </td>
                    <td>
                        <?= $data_barang['id_barang'] ?>
                    </td>
                    <td>
                        <?= $data_barang['jenis_barang'] ?>
                    </td>
                    <td>
                        <?= $data_barang['merek_barang'] ?>
                    </td>
                    <td>
                        <?= $data_barang['ukuran_barang'] ?>
                    </td>
                    <td>
                        <?= $data_barang['harga_barang'] ?>
                    </td>
                    <td>
                        <img src="<?= $Gambar ?>" alt="Sepatu" style="width : 100px;">
                    </td>
                    

                    <td><a href="ubah_barang.php?id_barang=<?= $data_barang['id_barang'] ?>" class="btn btn-success">Ubah</a> 
                        <a href="delete_barang.php?id_barang=<?= $data_barang['id_barang'] ?>"
                            onclick="return confirm('Apakah anda yakin menghapus data ini?')"
                            class="btn btn-danger">Hapus</a>
                    </td>

                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous"></script>
</body>

</html>