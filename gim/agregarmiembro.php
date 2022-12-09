<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar</title>
    <link rel="stylesheet" href="agregar.css">
    <script src="https://kit.fontawesome.com/21ffd761ca.js" crossorigin="anonymous"></script>
</head>
<body>
    <header class="header">

        <img src="Imagenes/l2.png" alt=""><h1>Gym & Fitness <br><b>LA FORTALEZA</b></h1>
        <a href="miembros.php" class="boton1"> <span> <i class="fa-sharp fa-solid fa-circle-left"></i></span></a>
        <a href="menu.php" class="boton"> <span> <i class="fa-sharp fa-solid fa-house"></i></span></a>
        <input type="submit" value="Cerrar Sesión" class="botonn">
        </header><br>
        <script src="header.js"></script>
    <h1 class="titulo">Agregar miembro</h1>
    <form class="formulario">  
        <div><legend>Información Personal</legend>
        <label>Apellidos:</label> <input   type="text" require> 
        <label>Nombres:</label><input   type="text" require> 
        <label>Contacto:</label><input   type="text" require><br> 
        <label>Fecha de nacimiento:</label><input  type="date" require>
        <label>Edad:</label><input type="text" require>
        <label>Peso:</label><input type="text" require ><label>KG</label><br>
            <label>Altura:</label><input type="text" require> 
            <label>Número de cédula:</label><input type="text" require>   
    </div><br>
        <div >
            <label>Sexo: </label><select name="">
            <option value="" disabled selected>Elija una opcion</option>
            <option value="">Masculino</option>
            <option value="">Femenino</option>
            </select>
            <label>Estado civil: </label><select name="">
            <option value="" disabled selected>Elija una opcion</option>
            <option value="">Casado</option>
            <option value="">Soltero</option>
            <option value="">Divorciado</option>
            <option value="">Viudo</option>
            </select>
        </div>
        <div>
        <label>Tipo de membresía: </label><select name="">
                <option disabled selected>Elija una opcion </option>
                <option value="">Entrenador</option>
                <option value="">Deportista</option>
                <option value="">VIP</option>
            </select>     

            <label>Grupo sanguíneo: </label><select name="">
            <option value="" disabled selected>Elija una opcion</option>
            <option value="">O+</option>
            <option value="">O-</option>
            <option value="">A+</option>
            <option value="">A-</option>
            <option value="">B+</option>
            <option value="">B-</option>
            <option value="">AB+</option>
            <option value="">AB-</option>
            </select><br>
            <label>Subir imagen: </label><input type="file"><hr size="5px" color="black">
        </div><legend>Información Extra</legend>
        <div class="llenar">
        <label>1. Problemas de rodilla y/o tobillo</label> <input type="radio" name="rodilla">Si <input type="radio" name="rodilla">No <br>
        <label>2 Lesión ósea</label> <input type="radio" name="rodilla">Si <input type="radio" name="rodilla">No <br>
        <label>3 Lesión muscular</label> <input type="radio" name="rodilla">Si <input type="radio" name="rodilla">No<br>
        <label>4 Enfermedad cardivascular</label> <input type="radio" name="rodilla">Si <input type="radio" name="rodilla">No <br>
        <label>5 Se asfixia con facilidad all realizar ejercicio físico</label> <input type="radio" name="rodilla">Si <input type="radio" name="rodilla">No <br>
        <label>6 Enfermedad</label><br> 
        <input type="checkbox">Asmático<br>
        <input type="checkbox">Epiléptico<br>
        <input type="checkbox">Diabético<br>
        <input type="checkbox">Fumador<br>


        <label>7 Embarazda o sospecha estarlo (solo mujres)</label> <input type="radio" name="rodilla">Si <input type="radio" name="rodilla">No <br>
        <label>8 Anemia en la actualidad</label> <input type="radio" name="rodilla">Si <input type="radio" name="rodilla">No <br>
        <label>9 Indique si ha tenido alguno de estos síntomas al realizar esfuerzos físicos</label> <br>
        <input type="checkbox">Mareos<br>
        <input type="checkbox">Desmayos<br>
        <input type="checkbox">Náuseas<br>
        <input type="checkbox">Dificultad para respirar<br>

        <label>10 Ha practicado alguna actividad física</label> <input type="radio" name="rodilla">Si <input type="radio" name="rodilla">No <br>
        <label>11 Inscrito en algún gimnasio o instalación deportiva</label> <input type="radio" name="rodilla">Si <input type="radio" name="rodilla">No <br>
        </div>
        <div class="icono"><i class="fa-solid fa-floppy-disk"></i><input type="submit" value="Guardar" class="boton2">
        </div>

    </form>

    <footer class="abajo">
    <img src="Imagenes/l1.png" alt=""><h1 >Gym & Fitness LA FORTALEZA</h1>
    
    </footer>
</body>
</html>