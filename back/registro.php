<?php

include 'conexion.php';

$N = $_POST['nombres'];
$A = $_POST['apellidos'];
$CE = $_POST['email'];
$T = $_POST['telefono'];
$D = $_POST['direccion'];
$C = $_POST['comuna'];
$U = $_POST['userr'];
$P = $_POST['pass'];
$PP = $_POST['pass2'];
$R = "Cliente";

if(ISSET($_POST['registrar'])){
  try{
 $select_stmt =$db->prepare("INSERT INTO datos(nombres,apellidos,Email,Telefono,direccion,comuna,user,pass,rol)
          VAlUES(:uN, :uA, :uCE, :uT, :uD, :uC, :uU, :uP, :uR)");
          $select_stmt->bindParam(":uN",$N);
          $select_stmt->bindParam(":uA",$A);
          $select_stmt->bindParam(":uCE",$CE);
          $select_stmt->bindParam(":uT",$T);
          $select_stmt->bindParam(":uD",$D);
          $select_stmt->bindParam(":uC",$C);
          $select_stmt->bindParam(":uU",$U);
          $select_stmt->bindParam(":uP",$P);
          $select_stmt->bindParam(":uR",$R);



          if($select_stmt->execute())
          {
            $registerMsg="Registro exitoso: Esperar página de inicio de sesión"; //Ejecuta consultas
            header("refresh:2;../front/Login.php"); //Actualizar despues de 2 segundo a la portada
          }
        }

          catch(PDOException $e){
          echo $e->getMessage();
          }

          $select_stmt = null;

          header('location:../front/Login.php');
        }else{
          	$registerMsg="Registro Erroneo";
        }
 ?>
