<?php
    require_once("Producto.php");

    $producto = new Producto();
    
    $producto->setCodigo($_POST["codigo"]);
    $producto->setNombre($_POST["nombre"]);
    $producto->setPrecio($_POST["precio"]);
    $producto->setExistencia($_POST["existencia"]);
    $producto->mostrarDatos();



?>