<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de sesión</title>
    <link rel="stylesheet" href="inicio.css">
    <script src="https://kit.fontawesome.com/21ffd761ca.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="titulo">
    <img class="logo" src="Imagenes/l2.png" alt="logo"><h1>Gym & Fitnnes <br><b>LA FORTALEZA</b></h1>
    </div>
  
    <form action="validar.php" method="POST" class="formulario">
    <h1 class="h">Inicio de Sesión</h1>
    <div class="form"><i class="fa-solid fa-user"></i><input required type="text" name="nombre" placeholder="Usuario"></div> <br>
    <div class="form"><i class="fa-solid fa-lock"></i><input required type="password" name="contraseña" placeholder="Contraseña"></div> <br>

    <input type="submit" value="Iniciar Sesión" class="boton">


    </form>
</body>
</html>