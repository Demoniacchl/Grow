
        <div class="modal fade" id="modalEditar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Actualizar Datos</h5>
					<button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
			       	<div class="modal-body">
<form action="../back/editadm.php" value="" method="post" >
                      <input type='text' id ='id' name='id'  hidden='' value='<?php echo $row["id"] ?>' >
                      <p class='modal-body' id='nombres'><?php echo $row["nombres"] ?>
                       <input type='text' placeholder='nombres' name='nombres'  required='required'></p>
                     <p class='modal-body' id='apellidos'><?php echo $row["apellidos"] ?>
                     <input class='modal-body' type='text' placeholder='apellidos' name='apellidos'  required='required'></p>
                       <p class='modal-body' id='Email'><?php echo $row["Email"] ?>
                      <input type='text'   placeholder='Email' name='Email' required='required' ></p>
                      <p class='modal-body' id='Telefono'><?php echo $row["Telefono"] ?>
                      <input type='number'maxlength='11' placeholder='Telefono' name='Telefono'  required='required'></p>
                     <p class='modal-body' id='direccion'><?php echo $row["direccion"] ?>
                    <input type='text' placeholder='direccion ' name='direccion' required='required'></p>
                     <p class='modal-body' id='comuna'><?php echo $row["comuna"] ?>
                     <input type='text' placeholder='$' name='comuna' required='required'></p>
                    <p class='modal-body' id='user'><?php echo $row["user"] ?>
                    <input type='text' placeholder='user' name='user' required='required'></p>
                    <p class='modal-body' ><?php echo $row["pass"] ?>
                       <input type='text' placeholder='passoword' name='pass' required='required'></p>
                     <p class='modal-body' id='rol'><?php echo $row["rol"] ?>
                     <select name="rol" id="rol">
      <option value="Administrador">Administrador</option>
      <option value="Empresa">Empresa</option>
      <option value="Cliente">Cliente</option>
      <option value="Jardinero">Jardinero</option>
    </select></p>

                        <button type='submit' name='cambio'>Guardar cambios</button>

                    </form>
				</div>
				<div class="modal-footer">
					<button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Cerrar</button>

				</div>
			</div>
		</div>
	</div>
