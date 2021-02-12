<?php
include 'plantillas/cabecera.php';
?>
    

<form role="form" method="post" action="logBD.php">
    <div class="container" style="height: 650px;">
    <br>
    <br>
    <br>
    <br>
    <h3 style="text-align: center;">Iniciar sesión</h3>
    <h6 style="text-align: center;">Por favor, introduce tu email y contraseña para ver tus pedidos</h6>
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
    <button type="submit" class="btn btn-primary">Ver tus pedidos</button>
    </div>
  </form>


<?php
include 'plantillas/pie.php';
?>