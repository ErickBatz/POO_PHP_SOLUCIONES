<?php
    require_once("../clases/Empleado.php");

    $empleado = new Empleado();

    $empleado->setCodigoEmpleado($_POST["txt_codigoEmpleado"]);
    $empleado->setNombre($_POST["txt_nombre"]);
    $empleado->setPuesto($_POST["txt_puesto"]);
    $empleado->setSueldoBase($_POST["num_sueldoBase"]);
    $empleado->mostrarDatos();
?>
