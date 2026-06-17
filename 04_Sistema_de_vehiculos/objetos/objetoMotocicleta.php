<?php
    require_once("../class/Vehiculo.php");
    require_once("../class/Motocicleta.php");

    $motocicleta = new Motocicleta();
    $motocicleta->setPlaca($_POST["txt_placa"]);
    $motocicleta->setMarca($_POST["txt_marca"]);
    $motocicleta->setModelo($_POST["num_modelo"]);
    $motocicleta->setPrecio($_POST["num_precio"]);
    $motocicleta->setCilindrada($_POST["num_cilindrada"]);
    $motocicleta->setTipoMoto($_POST["txt_tipoMoto"]);
    $motocicleta->mostrarDatos();

?>