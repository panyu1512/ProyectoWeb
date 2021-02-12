<?php
include 'global/conexion.php';
include 'Plantillas/cabecera.php';
?>
<div class="container" style="text-align: center;">
<br>
<br>
<br>
<?php


 $con = mysqli_connect($host,$username,$password,$dbname)or die("Problemas al Conectar");
 mysqli_select_db($con,$dbname)or die("problemas al conectar con la base de datos");



 $email=$_POST['email'];
 $contraseña=$_POST['contraseña'];

 $sql="INSERT INTO users VALUES('$email',
           '$contraseña')";

 $ejecutar=mysqli_query($con,$sql);


 if($ejecutar){
  echo "<h3><br>Bienvenido</h1><br><a href='log.php'>Ver tus pedidos</a>";
 }else{
  echo  "<h3>Lo sentimos, esta dirección de correo electrónico ya esta registrada</h3>";
 }
?>
</div>