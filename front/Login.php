
    <head>
    <title>Growmeup</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <link href="../css/A1.css" rel="stylesheet" type="text/css"/>
        <link href="../css/estiloslogin.css" rel="stylesheet" type="text/css"/>


    </head>
    <body>
        <div class="navbar">
            <a class="b" href="../index.php">
                <img href="../index.php" src="../img/VICHOhoja.png" alt="" style="height: 1rem;">
            </a>
            <a class="b" href="../index.php">
                <img src="../img/VICHOtypo.png" alt="" style="height: 1rem;">
            </a>

            <div id="mySidenav" class="sidenav">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <a  href="index.php">Home</a>
                <a class="active" href="Jardineros2.php">Jardineros</a>
                <a href="Plantas2.php">Plantas</a>
                <a class="active" href="Login.php"> Login</a>
            </div>
            <span class="sas" onclick="openNav()">&#9776;</span>
        </div>

        <!-- objetos inamovibles -->
        <main>

            <div class="contenedor__todo">
                <div class="caja__trasera">
                    <div class="caja__trasera-login">
                        <h3>¿Ya tienes una cuenta?</h3>
                        <p>Inicia sesión para entrar en la página</p>
                        <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                    </div>
                    <div class="caja__trasera-register">
                        <h3>¿Aún no tienes una cuenta?</h3>
                        <p>Regístrate para que puedas iniciar sesión</p>
                        <button class="qwe" id="btn__registrarse">Regístrarse</button>
                    </div>
                </div>

                <!--Formulario de Login y registro-->
                <div class="contenedor__login-register">
                    <!--Login-->
                    <form action="../back/validar.php" class="formulario__login" method="POST">
                        <h2>Iniciar Sesión</h2>
                        <input type="text" placeholder="Usuario" name="user">
                        <input type="password" placeholder="Contraseña" name="pass">
                        <button type="submit" name="entrar">Entrar</button>
                    </form>

                    <!--Register-->
                    <form action="../back/registro.php" class="formulario__register" method="POST">
                        <h2>Regístrarse</h2>
                        <input type="text" placeholder="Nombres" name="nombres"  required="required" >
                        <input type="text" placeholder="Apellidos" name="apellidos"  required="required">
                        <input type="text" placeholder="Correo Electronico" name="email"  required="required">
                        <input type="number"  maxlength="11" placeholder="Telefono (sin +)" name="telefono" required="required" >
                        <input type="text" placeholder="Direccion" name="direccion"  required="required">
                        <input type="text" placeholder="Comuna" name="comuna" required="required">
                        <input type="text" placeholder="Usuario" name="userr" required="required">
                        <input type="password" id="pass" placeholder="Contraseña" name="pass"  required="required">
                        <input type="password" id="pass2" placeholder="Confirmar Contraseña"  required="required">
                        <button type="submit" name="registrar">Regístrarse</button>
                    </form>
                </div>
            </div>

        </main>
        <div id="main">
<!-- Se mueve con menu -->
















        </div>








    </body>
    <script src="../js/sticky.js" type="text/javascript"></script>
    <script src="../js/passvali.js" type="text/javascript"></script>
    <script src="../js/A1.js" type="text/javascript"></script>
    <script src="../js/jquery-latest.js" type="text/javascript"></script>
    <script src="../js/script.js" type="text/javascript"></script>
</html>
