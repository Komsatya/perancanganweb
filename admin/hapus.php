<?php 
include "../koneksi.php";
if(isset($_GET['id'])){
    $deleteSql = mysqli_query($conn,"DELETE FROM daftar_matakuliah WHERE id='$_GET[id]'");
    if($deleteSql){
        echo"<script type='text/javascript'>alert('Data Berhasil dihapus...!'); location.href=\"home.php\";
        </script>";  
    }
}
?>