<?php
include('conexion.php');
session_start();
$id = $_SESSION['id'];
$N = $_POST['nombres'];
$A = $_POST['apellidos'];
$CE = $_POST['email'];
$T = $_POST['telefono'];
$D = $_POST['direccion'];
$C = $_POST['comuna'];
$select_stmt=$db->prepare("UPDATE datos set  nombres = :uN, apellidos = :uA, Email = :uCE,
Telefono = :uT, direccion = :uD, comuna = :uC WHERE id = :uid");
$select_stmt->bindParam(":uid",$id);
$select_stmt->bindParam(":uN",$N);
$select_stmt->bindParam(":uA",$A);
$select_stmt->bindParam(":uCE",$CE);
$select_stmt->bindParam(":uT",$T);
$select_stmt->bindParam(":uD",$D);
$select_stmt->bindParam(":uC",$C);
$select_stmt->execute();
if($select_stmt->rowCount() > 0)
               {
$count = $select_stmt -> rowCount();

$ssMsg="Actualizado $count";
       header("refresh:2;../front/home.php");
               }else{

                 $errorMsg[]="Actualizacion fallida ";
                 header("refresh:2;../front/Login.php");
print_r($select_stmt->errorInfo());
}
?>
