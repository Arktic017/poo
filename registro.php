<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="wnameth=device-wnameth, initial-scale=1.0">
    <title>Agendar</title>
    <link rel="stylesheet" href="style.css">
    <style>
body {
    background-image: url('Pr1.svg');
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover; 
    margin: 10; 
}


    </style>
</head>
<body>
    <center><h1 class="CrearCuentaTitulo">Crear cuenta</h1></center>
    
    <div class="recordar"> ¿Ya estas registrado?</div>
            <div class="InicioSesion">
             <a href="User/InicioUsuario.html" style="color: #FF3131;"> Iniciar sesión </a>
            </div>

            <div class="InicioAdmi">
                <a href="/Pagina1/inicioadmi.html"> Iniciar sesión como administrador </a>
               </div>



    <div class="Datos">
        <form action="almacenar.php" method="post">
            <div class="CajaNombres">
                <input name="nombre" type="text"required>
                <label style="color: #562A2A;">Nombres</label>
            </div>

            <div class="CajaApellidos">
                <input name="last" type="text"required>
                <label style="color: #562A2A;"> Apellidos </label>
            </div>

            <div class="CajaCorreo">
                <input name="correo" type="email"required>
                <label style="color: #562A2A;"> Correo </label>
            </div>

            <div class="CajaCurp">
                <input name= "curp" type="text"required>
                <label style="color: #562A2A;">Curp</label>
            </div>

            <div class="CajaFecha">
                <label style="color: #562A2A;"> Fecha de nacimiento </label>
                <input name="fecha" type="date"required> 
            </div>
            <div>
                <input type="submit" name="registrarse" class="BotonRegistrarse">
            </div>
        </form>

    </div>
    
</body>
</html>


