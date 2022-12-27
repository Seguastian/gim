<?php
$link=mysqli_connect ("localhost", "root","","fortaleza" );
$db = mysql_select_db($link,"miembros");
//valores del formulario
$apellido=$_POST['apellido'];
$nombre=$_POST['nombre'];
$contacto=$_POST['contacto'];
$nacimiento=$_POST['nacimiento'];
$edad=$_POST['edad'];
$peso=$_POST['peso'];
$altura=$_POST['altura'];
$cedula=$_POST['cedula'];
$sexo=$_POST['sexo'];
$civil=$_POST['civil'];
$membresia=$_POST['membresia'];
$sangre=$_POST['sangre'];
$imagen=$_POST['imagen'];
$rodilla=$_POST['rodilla'];
$osea=$_POST['osea'];
$muscular=$_POST['muscular'];
$cardiovascular=$_POST['cardiovascular'];
$asfixia=$_POST['asfixia'];
$enfermedad=$_POST['enfermedad'];
$embarazo=$_POST['embarazo'];
$anemia=$_POST['anemia'];
$sintomas=$_POST['sintomas'];
$actividad=$_POST['actividad'];
$deporte=$_POST['deporte'];


?>