
<?php
if ($_POST) {
   
    $username = $_POST['username'];
    $password = md5($_POST['password']);
  
   
    if (empty($username)) {
        echo "<script>alert('Username tidak boleh kosong');location.href='login.php';</script>";
    } elseif (empty($password)) {
        echo "<script>alert('Password tidak boleh kosong');location.href='login.php';</script>";
    } else {
        include "koneksi.php";
        $qry_login = mysqli_query($conn, "select * from user WHERE username ='".$username."' AND password= '".$password."'");
        if (mysqli_num_rows($qry_login) > 0) {
            $dt_login = mysqli_fetch_array($qry_login);
            session_start();
           $_SESSION['id_user']=$dt_login['id_user'];
           $_SESSION['username']=$dt_login['username'];
           $_SESSION['password']=$dt_login['password'];
           $_SESSION['role']=$dt_login['role'];

                $_SESSION['status_login'] = true;
                if($_SESSION['role']=="admin"){
                    header("location: home_admin.php");
                    
                }else{
                    header("location: home.php");
                   
                }
                
                exit();
            } else {
                echo "<script>alert('Username dan Password tidak benar');location.href='login.php';</script>";
            }
    }
    }

?>
