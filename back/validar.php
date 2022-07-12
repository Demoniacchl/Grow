<?php
$user=$_POST['user'];
$pass=$_POST['pass'];
include('conexion.php');
if($user AND $pass )
{
  try
  {
    $select_stmt=$db->prepare("SELECT id,user,pass,rol FROM datos WHERE user = :uuser AND pass = :upass");
    $select_stmt->bindParam(":uuser",$user);
    $select_stmt->bindParam(":upass",$pass);
    $select_stmt->execute();	//execute query

    while($row=$select_stmt->fetch(PDO::FETCH_ASSOC))
    {
      $id =$row["id"];
      $dbuser	=$row["user"];
      $dbpassword	=$row["pass"];
      $dbrole		=$row["rol"];
    }
    if($user!=null AND $pass!=null)
    {
      if($select_stmt->rowCount()>0)
      {
        if($user==$dbuser and $pass==$dbpassword)
        {
          session_start();
         $_SESSION['id'] =$id;
         $loginMsg="Inicio sesión con éxito";
								header("refresh:2;../front/home.php");
        }else{
    $errorMsg[]="Usuario o contraseña incorrecto";
    header("refresh:2;../front/Login.php");
             }
      }else{
    $errorMsg[]="Usuario o contraseña incorrecto";
    header("refresh:2;../front/Login.php");
           }
    }

  }catch(PDOException $e){

    $e->getMessage();
                         }
  }else{
      $errorMsg[]="Usuario o contraseña incorrecto";
      header("refresh:2;../front/Login.php");
    }



 ?>
