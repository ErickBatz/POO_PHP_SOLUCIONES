<?php
    require_once("../clases/CuentaBancaria.php");
    require_once("../clases/CuentaAhorro.php");

    $cuentaAhorro = new CuentaAhorro();
    $cuentaAhorro->setNumeroCuenta($_POST["num_numeroCuenta"]);
    $cuentaAhorro->setTitular($_POST["txt_titular"]);
    $cuentaAhorro->setSaldo($_POST["num_saldo"]);
    $cuentaAhorro->setTasaInteres($_POST["num_tasaInteres"]);
    $cuentaAhorro->mostrarDatos();
?>