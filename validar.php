<?php
include('db.php');
$correo=$_POST['correo'];
$password=$_POST['contraseña'];



$consulta="SELECT*FROM usuarios where correo='$correo' and contraseña='$password'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
  
    header("location:dibujo.html");

}else{
    ?>
    <?php
    include("index.html");

  ?>
  <h1 class="bad">ERROR DE AUTENTIFICACION</h1>
  <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);