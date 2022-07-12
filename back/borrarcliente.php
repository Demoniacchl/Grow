<?php
include('seguridad.php');
include('conexion.php');
$con=new DB();
$c=$con->conexionBD();
session_start();
$id = $_SESSION['id'];
session_destroy();
$delc = "DELETE FROM datos WHERE id = '$id';";
$res3=mysqli_query($c, $delc);
if ($res3 === true) {
echo '<script>alert("Datos borrados con exito");
window.location = "../index.php";</script>';

}else{

}
?>