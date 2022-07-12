<?php
if($_SERVER['REQUEST_METHOD'] == "POST" AND ISSET($_POST['cerrar'])){
  session_start();
  session_destroy();
  echo "<script>alert('Se cerró la sesión');</script>";
  echo "<script>window.location = '../front/Login.Php';</script>";
}
?>
