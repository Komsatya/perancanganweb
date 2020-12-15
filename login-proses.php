<?php
include "koneksi1.php";
session_start();
if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = mysqli_query($conn, "SELECT * FROM admin WHERE username ='$username' AND password ='$password'");
        if(mysqli_num_rows($query) !== 0){
            $GET = mysqli_fetch_array($query);
            $nama = $GET['nm_admin'];
            $Level = $GET['level'];
            $_SESSION['nama'] = $nama ;
            $_SESSION['login_in'] = $username;
        if($Level == "admin"){
            echo"<script type='text/javascript'>alert('Selamat Datang $Level'); location.href=\"admin/home.php\";</script>";
        }elseif ($Level == "user"){
            echo "<script type='text/javascript'>alert('Selamat Datang$Level'); location.href=\"user/home.php\";</script>";
        }
        
        }else{
            echo "<script type='text/javascript'>alert('Login Gagal, username atau password Salah'); location.href=\"login.php\";</script>";
        }
    }


    ?>