<?php

include("../back/conexion.php");
session_start();
$id =  $_SESSION['id'];
 $select_stmt=$db->prepare("SELECT nombres,apellidos,Email,Telefono,direccion,comuna,rol FROM datos WHERE id = :uid");
$select_stmt->bindParam(":uid",$id);
$select_stmt->execute();
while($row=$select_stmt->fetch(PDO::FETCH_ASSOC))
{
 $rol = $row['rol'];
 $nombres =$row['nombres'];
 $apellidos = $row['apellidos'];
 $Email = $row['Email'];
 $Telefono = $row['Telefono'];
 $comuna = $row['comuna'];
 $direccion = $row['direccion'];
}
switch ($rol) {


  case 'Administrador':
    echo "<script>alert('Admin');</script>";
    echo "<div class='modal fade' id='Administrador' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
    <div class='modal-dialog'>
      <div class='modal-content'>
        <tr class='modal-header'>
          <td class='A1' id='exampleModalLabel'>$nombres</td>
          <td class='A2' float = 'right' id='exampleModalLabel'>  ADM Panel *</td>
          <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>

        </tr>


      <div class='modal-footer'>
      <form class='' action='../front/padm.php'>
      <button type='submit' name='padm'>Panel</button>
      </form>
      <form class='' action='../back/cerrarsesion.php' method='post'>
      <button type='submit' name='cerrar'>Cerrar Sesion</button>
      </form>
      <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Close</button>
    </div>
       </div>
       </div>
       </div>";

    break;
  case "Cliente":
    echo "
          <div class='modal fade' id='Cliente' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
          <div class='modal-dialog'>
            <div class='modal-content'>
              <div class='modal-header'>
                <h5 class='modal-title' id='exampleModalLabel'>$nombres</h5>
                <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
              </div>
              <form action='../back/clienteedit.php' class='form' method='POST'>
              <p class='modal-body' id='exampleModalLabel'>$nombres
                <input type='text' placeholder='Nuevo Nombre' name='nombres'  required='required' ></p>
                <p class='modal-body' id='exampleModalLabel'>$apellidos
                <input type='text' placeholder='$' name='apellidos'  required='required'></p>
                <p class='modal-body' id='exampleModalLabel'>$Email
                <input class='modal-body' type='text' placeholder='$' name='email'  required='required'></p>
                <p class='modal-body' id='exampleModalLabel'>$Telefono
                <input type='number'  maxlength='11' placeholder='$' name='telefono' required='required' ></p>
                <p class='modal-body' id='exampleModalLabel'>$direccion
                <input type='text' placeholder='$' name='direccion'  required='required'></p>
                <p class='modal-body' id='exampleModalLabel'>$comuna
                <input type='text' placeholder='$' name='comuna' required='required'></p>

                <button type='submit' name='cambio'>Guardar cambios</button>
            </form>
              <div class='modal-footer'>
                <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Close</button>
                <form action='../back/borrarcliente.php' class='form' method='POST'>
                <button type='submit' class='btn btn-primary' name ='borrar'>Borrar</button>
                </form>
                <form class='' action='../back/cerrarsesion.php' method='post'>
                  <button type='submit' name='cerrar'>Cerrar Sesion</button>
                </form>
              </div>
            </div>
          </div>
        </div>";
    break;;
  case 'Jardinero':
    echo "<script>alert('Jardinero');</script>";
    echo "
          <div class='modal fade' id='Jardinero' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
          <div class='modal-dialog'>
            <div class='modal-content'>
              <div class='modal-header'>
                <h5 class='modal-title' id='exampleModalLabel'>$nombres</h5>
                <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
              </div>
              <form action='../back/clienteedit.php' class='form' method='POST'>
              <p class='modal-body' id='exampleModalLabel'>$nombres
                <input type='text' placeholder='Nuevo Nombre' name='nombres'  required='required' ></p>
                <p class='modal-body' id='exampleModalLabel'>$apellidos
                <input type='text' placeholder='$' name='apellidos'  required='required'></p>
                <p class='modal-body' id='exampleModalLabel'>$Email
                <input class='modal-body' type='text' placeholder='$' name='email'  required='required'></p>
                <p class='modal-body' id='exampleModalLabel'>$Telefono
                <input type='number'  maxlength='11' placeholder='$' name='telefono' required='required' ></p>
                <p class='modal-body' id='exampleModalLabel'>$direccion
                <input type='text' placeholder='$' name='direccion'  required='required'></p>
                <p class='modal-body' id='exampleModalLabel'>$comuna
                <input type='text' placeholder='$' name='comuna' required='required'></p>

                <button type='submit' name='cambio'>Guardar cambios</button>
            </form>
            <div class='modal-footer'>
              <button type='button' class='btn btn-primary' >Crear reeservas</button>
              <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Close</button>
              <form action='../back/borrarcliente.php' class='form' method='POST'>
              <button type='submit' class='btn btn-primary'  name ='borrar'>Borrar</button>
              </form>
              <form class='' action='../back/cerrarsesion.php' method='post'>
                <button type='submit' name='cerrar'>Cerrar Sesion</button>
              </form>
            </div>
              </div>
            </div>
          </div>
        </div>";
    break;
  case 'Empresa':
    echo "<script>alert('Empresa');</script>";
    echo "
          <div class='modal fade' id='Empresa' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
          <div class='modal-dialog'>
            <div class='modal-content'>
              <div class='modal-header'>
                <h5 class='modal-title' id='exampleModalLabel'>$nombres</h5>
                <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
              </div>
              <form action='../back/clienteedit.php' class='form' method='POST'>
              <p class='modal-body' id='exampleModalLabel'>$nombres
                <input type='text' placeholder='Nuevo Nombre' name='nombres'  required='required' ></p>
                <p class='modal-body' id='exampleModalLabel'>$apellidos
                <input type='text' placeholder='$' name='apellidos'  required='required'></p>
                <p class='modal-body' id='exampleModalLabel'>$Email
                <input class='modal-body' type='text' placeholder='$' name='email'  required='required'></p>
                <p class='modal-body' id='exampleModalLabel'>$Telefono
                <input type='number'  maxlength='11' placeholder='$' name='telefono' required='required' ></p>
                <p class='modal-body' id='exampleModalLabel'>$direccion
                <input type='text' placeholder='$' name='direccion'  required='required'></p>
                <p class='modal-body' id='exampleModalLabel'>$comuna
                <input type='text' placeholder='$' name='comuna' required='required'></p>

                <button type='submit' name='cambio'>Guardar cambios</button>
            </form>
            <div class='modal-footer'>
              <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Close</button>
              <form action='../back/borrarcliente.php' class='form' method='POST'>
              <button type='submit' class='btn btn-primary'  name ='borrar'>Borrar</button>
              </form>
              <form class='' action='../back/cerrarsesion.php' method='post'>
                <button type='submit' name='cerrar'>Cerrar Sesion</button>
              </form>
            </div>
              </div>
            </div>
          </div>
        </div>";
    break;
}


?>
