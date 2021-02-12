<?php 
include 'global/conexion.php';
?>

<?php

session_start();
$mensaje = "";


if (isset($_POST['btnAccion'])) {
    switch ($_POST['btnAccion']) {
        case 'Agregar':

            if (is_numeric(openssl_decrypt($_POST['id'], COD, KEY))) {
                $ID = openssl_decrypt($_POST['id'], COD, KEY);
                $mensaje .= "ID Correcto: " . $ID . "<br/>";
            } else {
                $mensaje .= "ID Incorecto" . $ID . "<br/>";
            }


            if (is_string(openssl_decrypt($_POST['nombre'], COD, KEY))) {
                $NOMBRE = openssl_decrypt($_POST['nombre'], COD, KEY);
                $mensaje .= "Nombre: " . $NOMBRE . "<br/>";
            } else {
                $mensaje .= "Nombre incorrecto" . $NOMBRE . "<br/>";
            }


            if (is_numeric(openssl_decrypt($_POST['cantidad'], COD, KEY))) {
                $CANTIDAD = openssl_decrypt($_POST['cantidad'], COD, KEY);
                $mensaje .= "Cantidad correcta: " . $CANTIDAD . "<br/>";
            } else {
                $mensaje .= "Cantidad incorrecta" . $CANTIDAD . "<br/>";
            }


            if (is_numeric(openssl_decrypt($_POST['precio'], COD, KEY))) {
                $PRECIO = openssl_decrypt($_POST['precio'], COD, KEY);
                $mensaje .= "Precio correcto: " . $PRECIO . "<br/>";
            } else {
                $mensaje .= "Precio incorrecto" . $PRECIO . "<br/>";
            }

        if(!isset($_SESSION['CARRITO'])){
            $producto=array(
                'ID'=>$ID,
                'NOMBRE'=>$NOMBRE,
                'CANTIDAD'=>$CANTIDAD,
                'PRECIO'=>$PRECIO
            );
            $_SESSION['CARRITO'][0]=$producto;
        }else{
            $NumeroProductos=count($_SESSION['CARRITO']);
            $producto=array(
                'ID'=>$ID,
                'NOMBRE'=>$NOMBRE,
                'CANTIDAD'=>$CANTIDAD,
                'PRECIO'=>$PRECIO
            );
            $_SESSION['CARRITO'][$NumeroProductos]=$producto;
        }
        $mensaje="Producto agregado al carrito";

            break;

            case "Eliminar":
                if (is_numeric(openssl_decrypt($_POST['id'], COD, KEY))) {
                    $ID = openssl_decrypt($_POST['id'], COD, KEY);
                    
                    foreach($_SESSION['CARRITO'] as $indice => $producto){
                        if($producto['ID']==$ID){
                            unset($_SESSION['CARRITO'][$indice]);
                        }
                    }

                } else {
                    $mensaje .= "ID Incorecto" . $ID . "<br/>";
                }

            break;    
    }
}

