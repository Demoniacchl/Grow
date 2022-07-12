<html>

    <head>
        <title>Growmeup</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <link href="../css/A1.css" rel="stylesheet" type="text/css"/>
        <link href="../css/a.css" rel="stylesheet" type="text/css"/>
    </head>
    <body >
<?php
include('../modulos/modal1.php');


 ?>
        <div class="navbar" id="navbar">
          <a class="b" href="index.php">
              <img href="../index.php" src="../img/VICHOhoja.png" alt="" style="height: 1rem;">
          </a>
          <a class="b" href="../index.php">
              <img src="../img/VICHOtypo.png" alt="" style="height: 1rem;">
          </a>

            <div id="mySidenav" class="sidenav">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <a class="active" href="home.php">Home</a>
                <a href="../front/Jardineros.php">Jardineros</a>
                <a href="../front/Plantas.php">Plantas</a>
                <a class="" data-bs-toggle="modal" data-bs-target="#<?php echo $rol; ?>" id="botonreg"> <?php echo $nombres;?></a>
              </div>
            <span class="sas" onclick="openNav()">&#9776;</span>
        </div>



        <div id="main">
        <p>.</p>
        <p>.</p>
        <table class="table table-hover table-condensed table-bordered table2"  id="iddatatable">
		<thead style="background-color: #dc3545; color: white; font-weight: bold;">
      <tr>
                                              <th width="4%">ID</th>
                                              <th width="14%">Nombres</th>
                                              <th width="18%">Apellidos</th>
                                              <th width="18%">Email</th>
                                              <th width="18%">Telefono</th>
                                              <th width="18%">Direccion</th>
                                              <th width="18%">Comuna</th>
                                              <th width="24%">Usuario</th>
                                              <th width="24%">Password</th>
                                              <th width="19%">Rol</th>
  										                      	<th colspan="2">Opciones</th>
                      </tr>
		</thead>

		<tbody >
                                    <?php
    									require_once '../back/conexion.php';
    									$select_stmt=$db->prepare("SELECT id,user,pass,rol,nombres,apellidos,Email,Telefono,direccion,comuna from datos");
    									$select_stmt->execute();
    									while($row=$select_stmt->fetch(PDO::FETCH_ASSOC)){ ?>
                                            <tr>
                                              <td><?php echo $row["id"]; ?></td>
                                              <td><?php echo $row["nombres"]; ?></td>
                                              <td><?php echo $row["apellidos"]; ?></td>
                                              <td><?php echo $row["Email"]; ?></td>
                                              <td><?php echo $row["Telefono"]; ?></td>
                                              <td><?php echo $row["direccion"]; ?></td>
                                              <td><?php echo $row["comuna"]; ?></td>
                                              <td><?php echo $row["user"]; ?></td>
                                              <td><?php echo $row["pass"]; ?></td>
  										                      	<td><?php echo $row["rol"]; ?></td>
    											<td><span><a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modaleditar" id="<?php $row["id"]; ?>">Editar</a></span>
                              <span><a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#deledit" id="<?php $row["id"]; ?>">Borrar<a/></span></td>
                                     </tr>
    									<?php
                        include("../modulos/modaladmedit.php");
                        include("../modulos/deledit.php");
    									}

    									?>
		</tbody>
	</table>







    </body>
    <script type="text/javascript">
	$(document).ready(function() {
		$('#iddatatable').DataTable();
	} );
</script>
    <script src="../js/A1.js" type="text/javascript"></script>
    <script src="../js/funciones.js" type="text/javascript"></script>
    <script src="../js/sticky.js" type="text/javascript"></script>
    <script src="../js/jquery-latest.js" type="text/javascript"></script>

</html>
