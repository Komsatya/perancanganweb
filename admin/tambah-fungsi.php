<?php
include "../koneksi.php";
if(isset($_POST ['tambah'])){
    $insertSql = mysqli_query($conn,"INSERT into daftar_matakuliah (Nama_MK,SKS)
    values
    ('$_POST[Nama_MK]','$_POST[SKS]')");
    if($insertSql){
        echo "<script type='text/javascript'>alert('Data Berhasil disimpan...!'); location.href=\"home.php\";</script>";
    }
}
?>