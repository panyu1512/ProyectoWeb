<?php
include 'plantillas/cabecera.php';
include 'global/conexion.php';
include 'carrito.php';
?>
<div class="container" style="height: 600px;">
<br>
<h3>DETALLES DE FACTURACIÓN</h3>
<br>
<form action="guardarDatosFormulario.php" method="post">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="nombre">Nombre</label>
      <input type="text" class="form-control" name="nombre" placeholder="Nombre" required>
    </div>
    <div class="form-group col-md-6">
      <label for="apellidos">Apellido</label>
      <input type="text" class="form-control" name="apellidos" placeholder="Apellido" required>
    </div>
  </div>
  <div class="form-group">
    <label for="direccion">Dirección</label>
    <input type="text" class="form-control" name="direccion" placeholder="Ejemplo: Carrer del Molí del Comte, 41" required>
  </div>
  <div class="form-group">
    <label for="email">Correo Electrónico</label>
    <input type="email" class="form-control" name="email" placeholder="Email" required>
  </div>
  <button type="submit" class="btn btn-primary">Continuar con el pago</button>
</form>
</div>
<?php
include 'plantillas/pie.php';
?>
