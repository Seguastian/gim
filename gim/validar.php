<?php
include('db.php');
$usuario=$_POST['nombre'];
$contraseña=$_POST['contraseña'];

$conexion=mysqli_connect("localhost","root","","fortaleza");

$consulta="SELECT*FROM admin where nombre='$usuario' and contraseña='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
  
    header("location:menu.php");

}else{
    ?>
    <?php
    include("inicio.php");

  ?>
  <h1 class="bad">ERROR DE AUTENTIFICACION</h1>
  <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
