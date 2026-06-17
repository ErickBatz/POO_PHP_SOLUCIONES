<?php
    class CuentaBancaria{
        private $numeroCuenta;
        private $titular;
        private $saldo;

        public function setNumeroCuenta($numeroCuenta){
            $this->numeroCuenta = $numeroCuenta;
        }
        public function setTitular($titular){
            $this->titular = $titular;
        }
        public function setSaldo($saldo){
            $this->saldo = $saldo;
        }

        public function mostrarDatos(){
            echo "---estos son los datos---";
            echo "<br> Numero de la cuenta: ".$this->numeroCuenta;
            echo "<br> Titular ".$this->titular;
            echo "<br> saldo: ".$this->saldo;
        }

    }
?>