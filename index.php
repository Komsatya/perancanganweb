<?php
    include "koneksi.php";
    session_start();
    $login = $_SESSION['login'];
    if($login == "admin" ){
        header("location:admin/home.php");
    }elseif($login == "user"){
      header("location:user/home.php");
    }else{
       header("location:login.php");
    }
?>