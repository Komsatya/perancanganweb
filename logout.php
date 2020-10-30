<?php
session_start();
session_destroy();
echo"<script type='text/javascript'>alert('Logout Berhasil......!'); location.href=\"login.php\";</script>";
?>