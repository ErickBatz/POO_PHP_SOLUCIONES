<?php
    require_once("../clases/Empleado.php");
    require_once("../clases/EmpleadoPorHoras.php");

    $empleadoPorHoras = new EmpleadoPorHoras();

    $empleadoPorHoras->setCodigoEmpleado($_POST["txt_codigoEmpleado"]);
    $empleadoPorHoras->setNombre($_POST["txt_nombre"]);
    $empleadoPorHoras->setPuesto($_POST["txt_puesto"]);
    $empleadoPorHoras->setSueldoBase($_POST["num_sueldoBase"]);
    $empleadoPorHoras->setHorasTrabajadas($_POST["num_horasTrabajadas"]);
    $empleadoPorHoras->setPagoPorHora($_POST["num_pagoPorHora"]);
    $empleadoPorHoras->mostrarDatos();
?>
