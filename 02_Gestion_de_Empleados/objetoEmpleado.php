<?php
    require_once("Empleados.php");

    $empleado = new Empleado();
    $empleado->setNombre($_POST["txt_nombre"]);
    $empleado->setPuesto($_POST["txt_puesto"]);
    $empleado->setHoraTrabajadas($_POST["num_horasTrabajadas"]);
    $empleado->setPagoPorHora($_POST["num_pagoPorHora"]);
    $empleado->mostrarDatos();
   

?>