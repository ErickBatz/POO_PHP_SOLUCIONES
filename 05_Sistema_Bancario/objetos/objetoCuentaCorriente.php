<?php
    require_once("../clases/CuentaBancaria.php");
    require_once("../clases/CuentaCorriente.php");

    $cuentaCorriente = new CuentaCorriente();
    $cuentaCorriente->setNumeroCuenta($_POST["num_numeroCuenta"]);
    $cuentaCorriente->setTitular($_POST["txt_titular"]);
    $cuentaCorriente->setSaldo($_POST["num_saldo"]);
    $cuentaCorriente->setLimiteDebidoMensual($_POST["num_limiteDebitoMensual"]);
    $cuentaCorriente->setLimiteDebitoDiario($_POST["num_limiteDebitoDiario"]);
    $cuentaCorriente->mostrarDatos();

?>