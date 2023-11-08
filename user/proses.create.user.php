<?php
if($_POST){
    $nama=$_POST['nama'];
    $alamat=$_POST['alamat'];
    $username=$_POST['username'];
    $password=$_POST['password'];


    if(empty($nama)){
        echo "<script>alert('nama tidak boleh kosong');location.href='user.create.php';</script>";

    } elseif(empty($alamat)){
        echo "<script>alert('kelompok tidak boleh kosong');location.href='user.create.php';</script>";

     } elseif(empty($username)){
        echo "<script>alert('kelompok tidak boleh kosong');location.href='user.create.php';</script>";
        
    }elseif(empty($password)){
        echo "<script>alert('kelompok tidak boleh kosong');location.href='user.create.php';</script>";
        
    }
    else {
        include "../koneksi.php";
        $insert=mysqli_query($conn,"insert into user(nama, alamat, username, password) value ('".$nama."','".$alamat."','".$username."','".md5($password)."')");
        if($insert){
            echo "<script>alert('Sukses menambahkan kelas');location.href='user.create.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan kelas');location.href='user.create.php';</script>";
        }
    }
}
?>
