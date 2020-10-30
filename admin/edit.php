<?php
session_start();
if (isset($_SESSION['login_in'])){

  include "../koneksi.php";
  if(isset($_GET['id'])){
    $tampilkan = mysql_query($conn,"SELECT * FROM daftar_matakuliah");
    $daftar_matakuliah = mysqli_fetch_array($tampilkan);
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Edit Data</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Edit Data</h2>
  <p>Silahkan edit daftar matakuliah di bawah ini!</p>
  <form action="edit-fungsi.php"method="POST" class="needs-validation" novalidate>
    <div class="form-group">
      <label for="Nama_MK">Nama matakuliah :</label>
      <input type="text" class="form-control" id="Nama_MK" placeholder="masukkan daftar matakuliah"
       name="Nama_MK"value="<?php $daftar_matakuliah['Nama_MK']; ?>" required>
      <div class="invalid-feedback">Nama matakuliah harus diisi......!</div>
    </div>
    <div class="form-group">
      <label for="SKS">SKS : </label>
      <input type="text" class="form-control" id="SKS" placeholder="Masukkan Alamat Lengkap Anda" name="SKS" required>
      <div class="invalid-feedback">total SKS harus diisi....!</div>
    </div><br>
    <button type="submit" class="btn btn-primary"name="edit">Simpan</button>
    <button type="button" class="btn btn-secondary"onclick="self.history.back()">Cancel</button>
  </form>
</div>

<script>
// Disable form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {}
    // Get the forms we want to add validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>

</body>
</html>
