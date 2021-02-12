<?php
include 'plantillas/cabecera.php';
?>
    

<form role="form" method="post" action="guardarDatosRegistro.php">
    <div class="container" style="height: 650px;">
    <br>
    <br>
    <br>
    <br>
    <h3 style="text-align: center;">Registro</h3>
    <br>
    <div class="form-group">
      <label for="email">Dirección Email:</label>
      <input type="email" class="form-control" name="email" placeholder="Email">
    </div>
    <div class="form-group">
      <label for="contraseña">Contraseña:</label>
      <input type="password" class="form-control" name="contraseña" placeholder="Contraseña">
    </div>
    <div class="checkbox">
      <label><input type="checkbox"> Remember me</label>
    </div>
    <button type="submit" class="btn btn-primary">Registrarse</button>
    </div>
  </form>


<?php
include 'plantillas/pie.php';
?>