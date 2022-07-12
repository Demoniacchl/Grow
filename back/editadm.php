<?php
include("conexion.php");

if (isset($_POST['id'])) {
    if (!empty($_POST)) {
        // This part is similar to the create.php, but instead we update a record and not insert
        $id = isset($_POST['id']) ? $_POST['id'] : '';
        $name = isset($_POST['nombres']) ? $_POST['nombres'] : '';
        $app = isset($_POST['apellidos']) ? $_POST['apellidos'] : '';
        $app2 = isset($_POST['Telefono']) ? $_POST['Telefono'] : '';
        $app3 = isset($_POST['Email']) ? $_POST['Email'] : '';
        $app4 = isset($_POST['direccion']) ? $_POST['direccion'] : '';
        $app5 = isset($_POST['comuna']) ? $_POST['comuna'] : '';
        $app6 = isset($_POST['rol']) ? $_POST['rol'] : '';
        $app7 = isset($_POST['user']) ? $_POST['user'] : '';
        $app8 = isset($_POST['pass']) ? $_POST['pass'] : '';
        // Update the record
        $select_stmt=$db->prepare("UPDATE datos set  nombres = :uN, apellidos = :uA, Email = :uCE,
        Telefono = :uT, direccion = :uD, comuna = :uC, user = :uuser, pass = :upass, rol = :urol WHERE id = :uid");
        $select_stmt->bindParam(":uid",$id);
        $select_stmt->bindParam(":uN",$name);
        $select_stmt->bindParam(":uA",$app);
        $select_stmt->bindParam(":uCE",$app3);
        $select_stmt->bindParam(":uT",$app2);
        $select_stmt->bindParam(":uD",$app4);
        $select_stmt->bindParam(":uC",$app5);
                $select_stmt->bindParam(":urol",$app6);
                        $select_stmt->bindParam(":uuser",$app7);
                                $select_stmt->bindParam(":upass",$app8);
        $select_stmt->execute();
        if($select_stmt->rowCount() > 0)
                       {
        $count = $select_stmt -> rowCount();

        $ssMsg="Actualizado $count";
               header("refresh:2;../front/padm.php");
                       }else{

                         $errorMsg[]="Actualizacion fallida ";
                         header("refresh:2;../front/Login.php");
        print_r($select_stmt->errorInfo());
        }
    }
  }
?>
