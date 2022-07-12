
        <div class="modal fade" id="deledit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Borrar Cuenta</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
        <div class="modal-body">
<form action="../back/editadm.php" value="" method="post" >
                <input type='text' id ='id' name='id'  hidden='' value='<?php echo $row["id"] ?>' >
                <p class='modal-body' id='nombres'><?php echo $row["nombres"] ?></p>
               <p class='modal-body' id='apellidos'><?php echo $row["apellidos"] ?></p>


                  <button type='submit' name='cambio'>Guardar cambios</button>

              </form>
  </div>
  <div class="modal-footer">
    <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Cerrar</button>

  </div>
</div>
</div>
</div>
