<?php
    require_once("../clases/Empleado.php");
    require_once("../clases/EmpleadoTiempoCompleto.php");

    $empleadoTiempoCompleto = new EmpleadoTiempoCompleto();

    $empleadoTiempoCompleto->setCodigoEmpleado($_POST["txt_codigoEmpleado"]);
    $empleadoTiempoCompleto->setNombre($_POST["txt_nombre"]);
    $empleadoTiempoCompleto->setPuesto($_POST["txt_puesto"]);
    $empleadoTiempoCompleto->setSueldoBase($_POST["num_sueldoBase"]);
    $empleadoTiempoCompleto->setBono($_POST["num_bono"]);
    $empleadoTiempoCompleto->mostrarDatos();
?>
