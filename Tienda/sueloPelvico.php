<?php
include 'plantillas/cabecera.php';
include 'global/conexion.php';
include 'carrito.php';
?>
<div class="container" style="height:79.8vh;">
    <br>
    <?php if($mensaje!=""){?>
    <div class="alert alert-succes">
        <?php echo $mensaje; ?>
        <a href="mostrarCarrito.php" class="badge badge-succes">Ver carrito</a>
    </div>
    <?php }?>
    <div class="row">
    <?php
        $sentencia=$pdo->prepare("SELECT * FROM `suelopelvico`");
        $sentencia->execute();
        $listaProductos=$sentencia->fetchAll(PDO::FETCH_ASSOC);
    ?>
    <?php foreach($listaProductos as $producto){ ?>
        <div class="col-4">
            <div class="card">
                <img
                 class="card-img-top" 
                 src="<?php echo $producto['Imagen']; ?>"
                 height="250px">
                <div class="card-body">
                    <span><?php echo $producto['Nombre']; ?></span>
                    <br>
                    <h5 class="card-title"><?php echo $producto['Precio']; ?>€</h5>
                    <p class="card-text">Descripcion</p>
                    <form action="" method="post">
                        <input type="hidden" name="id" id="id" value="<?php echo openssl_encrypt($producto['ID'], COD, KEY); ?>">
                        <input type="hidden" name="nombre" id="nombre" value="<?php echo openssl_encrypt($producto['Nombre'], COD, KEY); ?>">
                        <input type="hidden" name="precio" id="precio" value="<?php echo openssl_encrypt($producto['Precio'], COD, KEY); ?>">
                        <input type="hidden" name="cantidad" id="cantidad" value="<?php echo openssl_encrypt(1, COD, KEY); ?>">

                        <button class="btn btn-primary" 
                            name="btnAccion"
                            value="Agregar"
                            type="submit">
                            Agregar al carrito
                        </button>
                    </form>
                </Div>
            </div>
        </div>        
    <?php } ?> 
    </div>

</div>


<?php
include 'plantillas/pie.php';
?>
