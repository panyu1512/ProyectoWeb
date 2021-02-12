<?php 
include 'Plantillas/cabecera.php';
include 'carrito.php';
include 'global/conexion.php';

?>


<?php if(!empty($_SESSION['CARRITO'])){?>
<div class="container" style="height: 800px;">
<br>
<br>
<h3>Mis pedidos</h3>
<br>
<br>
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Nombre Producto</th>
      <th scope="col" class="text-center">Cantidad</th>
      <th scope="col" class="text-center">Precio</th>
    </tr>
  </thead>
  <tbody>
    <?php $precioTotal=0;?>
    <?php foreach($_SESSION['CARRITO'] as $indice => $producto){?>

    <tr>
      <td><?php echo $producto['NOMBRE']; ?></td>
      <td><?php echo $producto['CANTIDAD']; ?></td>
      <td><?php echo $producto['PRECIO']; ?></td>
    </tr> 
    <?php } ?>
  </tbody>
</table>
<?php }else{?>
      <div class="alert alert-succes" align="center" style="height:700px;">
        <br>
        <h3>No dispones de ningún pedido en curso.</h3>
      </div>
<?php } ?>
</div>

<?php 
include 'Plantillas/pie.php';
?>
