<?php
if($_POST){
    $id_user=$_POST['id_user'];
    $nama=$_POST['nama'];
    $alamat=$_POST['alamat'];
    $username=$_POST['username'];
    $password=$_POST['password'];
 
    if(empty($nama)){
        echo "<script>alert('nama user tidak boleh kosong');location.href='user.create.php';</script>";

    } elseif(empty($username)){
        echo "<script>alert('username tidak boleh kosong');location.href='tambah.user.php';</script>";
    } else {
        include "../koneksi.php";
        if(empty($password)){
            $update=mysqli_query($conn,"update user set nama='".$nama."',alamat='".$alamat."', username='".$username."', password='".md5($password)."', id_user='".$id_user."' where id_user = '".$id_user."'") or die(mysqli_error($conn));
             if($update){
                echo "<script>alert('Sukses update user');location.href='tampil.user.php';</script>";
            } else {
                echo "<script>alert('Gagal update user');location.href='ubah_user.php?id_user=".$id_user."';</script>";
            }
        } else {
            $update=mysqli_query($conn,"update user set nama='".$nama."',alamat='".$alamat."', username='".$username."', password='".md5($password)."', id_user='".$id_user."' where id_user = '".$id_user."'") or die(mysqli_error($conn));
            if($update){
                echo "<script>alert('Sukses update user');location.href='tampil.user.php';</script>";
            } else {
                echo "<script>alert('Gagal update user');location.href='ubah_user.php?id_user=".$id_user."';</script>";
            }
        }
        
    } 
}
?>



