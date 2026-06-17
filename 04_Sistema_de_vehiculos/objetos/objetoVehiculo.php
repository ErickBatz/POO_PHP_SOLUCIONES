<?php
    require_once("../class/Vehiculo.php");
    $vehiculo = new Vehiculo();
    $vehiculo->setPlaca($_POST["txt_placa"]);
    $vehiculo->setMarca($_POST["txt_marca"]);
    $vehiculo->setModelo($_POST["num_modelo"]);
    $vehiculo->setPrecio($_POST["num_precio"]);
    $vehiculo->mostrarDatos();


?>