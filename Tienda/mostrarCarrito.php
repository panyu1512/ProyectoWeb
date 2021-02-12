<?php 
include 'Plantillas/cabecera.php';
include 'carrito.php';
include 'global/conexion.php';

?>


<?php if(!empty($_SESSION['CARRITO'])){?>
<div class="container" style="height: 800px;">
<br>
<br>
<h3>Lista de productos</h3>
<br>
<br>
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Nombre Producto</th>
      <th scope="col" class="text-center">Cantidad</th>
      <th scope="col" class="text-center">Precio</th>
      <th scope="col" class="text-center">Total</th>
      <th scope="col" ></th>
    </tr>
  </thead>
  <tbody>
    <?php $precioTotal=0;?>
    <?php $cantidad=0;?>
    <?php foreach($_SESSION['CARRITO'] as $indice => $producto){?>

    <tr>
      <td><?php echo $producto['NOMBRE']; ?></td>
      <td><?php echo $producto['CANTIDAD']; ?></td>
      <td><?php echo $producto['PRECIO']; ?></td>
      <td><?php echo number_format($producto['PRECIO']*$producto['CANTIDAD'],2);?></td>
      <td>

        <form action="" method="post">

          <input type="hidden" name="id" value="<?php echo openssl_encrypt($producto['ID'], COD, KEY); ?>">

          <button class="btn btn-danger" type="submit" name="btnAccion" value="Eliminar">Eliminar</button>
          
        </form> 

      </td>
    </tr>
    <?php $precioTotal=$precioTotal+($producto['PRECIO']*$producto['CANTIDAD']);?> 
    
    <?php } ?>
    <tr>
      <td colspan="3" align="right"><h4>Total</h4></td>
      <td align="right"><h4><?php echo number_format($precioTotal,2);?>€</h4></td>
      <td></td>
    </tr>
    <tr>
      <td colspan="5">
        <form action="formularioPago.php" method="post">
        <div>
          <button class="btn btn-primary btn-lg btn-block" type="submit">Realizar Pedido</button>
        </div>
        </form>
      </td>
    </tr>
  </tbody>
</table>
<?php }else{?>
      <div class="alert alert-succes" align="center" style="height:700px;">
        <br>
        <h3>No hay productos en el carrito.</h3>
      </div>
<?php } ?>
</div>

<?php 
include 'Plantillas/pie.php';
?>
