<?php
    require_once("../clases/CuentaBancaria.php");
    $cuentaBancaria = new CuentaBancaria();
    $cuentaBancaria->setNumeroCuenta($_POST["num_numeroCuenta"]);
    $cuentaBancaria->setTitular($_POST["txt_titular"]);
    $cuentaBancaria->setSaldo($_POST["num_saldo"]);
    $cuentaBancaria->mostrarDatos();
?>