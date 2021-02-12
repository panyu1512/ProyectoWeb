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

 $sql="SELECT Email, Contraseña FROM users WHERE Email='$email' AND Contraseña='$contraseña'";
	$resultado=mysqli_query($con, $sql);
	$n = mysqli_num_rows($resultado);
	if ($n == 1) {
		header("location: visualizarPedidos.php");
	 }
	 elseif ($n==0) {
		 echo "<h3>Correo electrónico o contraseña incorrectos.</h3>";
		 echo "<br>";
		 echo "<h5>Si no estas registrado necesitas registrarte para ver tus pedidos.</h5>";
	  }
?>
</div>

