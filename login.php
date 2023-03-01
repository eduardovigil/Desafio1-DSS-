<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplicacion de pendientes</title>
</head>
<body>
<form method="POST">
        <label for="usuario">Usuario:</label>
        <input type="text" name="usuario" required>
        <br>
        <label for="contrasena">Contraseña:</label>
        <input type="password" name="contrasena" required>
        <br>
        <input type="submit" value="Iniciar sesión">
      </form>
      <?php
        require('usuario.class.php');

        session_start();

        if (isset($_POST['usuario']) && isset($_POST['contrasena'])) {
            $IngresadoUsuario = $_POST['usuario'];
            $Ingresadacontrasena = $_POST['contrasena'];
            foreach ($usuarios as $usuario) {
                if ($usuario->autentificacionPassword($Ingresadacontrasena) && $usuario->getUsuario() === $IngresadoUsuario && $usuario->getIdentificador() == '1') {
                $_SESSION['usuario'] = $IngresadoUsuario;
                header("Location: index.php");
                exit();
                }else if($usuario->autentificacionPassword($Ingresadacontrasena) && $usuario->getUsuario() === $IngresadoUsuario && $usuario->getIdentificador() == '2'){
                    $_SESSION['usuario'] = $IngresadoUsuario;
                    header("Location: index.php");
                    exit();
                }else if($usuario->autentificacionPassword($Ingresadacontrasena) && $usuario->getUsuario() === $IngresadoUsuario && $usuario->getIdentificador() == '3'){
                $_SESSION['usuario'] = $IngresadoUsuario;
                header("Location: index.php");
                exit();
            }
            }
            $error = "ERROR.CREDENCIALES INCORRECTAS";
            echo "<script>alert('$error')</script>"; 
        }
    ?> 
</body>
</html>