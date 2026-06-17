<?php
    require_once("../class/Vehiculo.php");
    require_once("../class/Automovil.php");

    $automovil = new Automovil();
    $automovil->setPlaca($_POST["txt_placa"]);
    $automovil->setMarca($_POST["txt_marca"]);
    $automovil->setModelo($_POST["num_modelo"]);
    $automovil->setPrecio($_POST["num_precio"]);
    $automovil->setTipoVehiculo($_POST["txt_tipoVehiculo"]);
    $automovil->setNumeroPuertas($_POST["num_numeroPuertas"]);
    $automovil->setTipoCombustible($_POST["txt_tipoCombustible"]);
    $automovil->mostrarDatos();

?>