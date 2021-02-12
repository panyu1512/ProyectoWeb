<?php
include 'global/conexion.php';
include 'Plantillas/cabecera.php';
?>
<div class="container">
<?php


 $con = mysqli_connect($host,$username,$password,$dbname)or die("Problemas al Conectar");
 mysqli_select_db($con,$dbname)or die("problemas al conectar con la base de datos");



 $nombre=$_POST['nombre'];
 $apellidos=$_POST['apellidos'];
 $direccion=$_POST['direccion'];
 $email=$_POST['email'];

 $sql="INSERT INTO datosformulario VALUES('$nombre',
           '$apellidos',
           '$direccion',
           '$email')";

 $ejecutar=mysqli_query($con,$sql);


 if($ejecutar){
  echo"<h1><br>Datos Guardados Correctamente</h1><br><a href='index.html'>Volver</a>";
 }else{
  echo"Error";
 }
?>
</div>