<?php
session_start();
if (isset($_SESSION['login_in'])){
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Tambah Data</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Tambah data</h2>
  <p>Silakan tambah data tugas matakuliah baru!</p>
  <form action="tambah-fungsi.php"method="POST" class="needs-validation" novalidate>
    <div class="form-group">
      <label for="Nama_MK">Nama:</label>
      <input type="text" class="form-control" id="Nama_MK" placeholder="Masukkan Nama matakuliah" name="nama" required>
      <div class="invalid-feedback">Nama matakuliah harus diisi......!</div>
    </div>
    <div class="form-group">
      <label for="SKS">total SKS</label>
      <input type="SKS" class="form-control" id="SKS" placeholder="Masukkan total SKS matakuliah" name="SKS" required>
      <div class="invalid-feedback">Total SKS harus diisi.......!</div>
    </div><br>
    <button type="submit" class="btn btn-primary"name="tambah">Simpan</button>
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
