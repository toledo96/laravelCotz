<?php

session_start();
$mensaje = "";

if(isset($_POST['btnAddCar'])){
    switch($_POST['btnAddCar']){
        case 'Agregar':
            if(is_numeric(openssl_decrypt($_POST['id'], "AES-128-ECB", "cotz"))){
                $ID = openssl_decrypt($_POST['id'], "AES-128-ECB", "cotz");
                $mensaje = "This ok perro ".$ID;
            }else{
                $mensaje = "No funciona perro corigelo o te parto tu madre...";
            }

            if(is_string(openssl_decrypt($_POST['nombre'], "AES-128-ECB", "cotz"))){
                $NOMBRE = openssl_decrypt($_POST['nombre'], "AES-128-ECB", "cotz");
                $mensaje = "This ok perro ".$NOMBRE;
            }else{
                $mensaje = "No funciona perro corigelo o te parto tu madre...";
            }

            if(is_numeric(openssl_decrypt($_POST['precio'], "AES-128-ECB", "cotz"))){
                $PRECIO = openssl_decrypt($_POST['id'], "AES-128-ECB", "cotz");
                $mensaje = "This ok perro ".$PRECIO;
            }else{
                $mensaje = "No funciona perro corigelo o te parto tu madre...";
            }

            if(is_numeric(openssl_decrypt($_POST['cantidad'], "AES-128-ECB", "cotz"))){
                $CANTIDAD = openssl_decrypt($_POST['cantidad'], "AES-128-ECB", "cotz");
                $mensaje = "This ok perro ".$CANTIDAD;
            }else{
                $mensaje = "No funciona perro corigelo o te parto tu madre...";
            }

            if(!isset($_SESSION['CARRITO'])){
                $producto = array('ID'=>$ID,
                            'NOMBRE'=>$NOMBRE, 
                            'PRECIO'=>$PRECIO, 
                            'CANTIDAD'=>$CANTIDAD);
                $_SESSION['CARRITO'][0] = $producto;
            }else{
                $numerodeproductos = count($_SESSION['CARRITO']);
                $producto = array('ID'=>$ID,
                            'NOMBRE'=>$NOMBRE, 
                            'PRECIO'=>$PRECIO, 
                            'CANTIDAD'=>$CANTIDAD);
                $_SESSION['CARRITO'][$numerodeproductos] = $producto;
            }
        break;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>