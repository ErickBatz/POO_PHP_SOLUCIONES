<?php
    class CuentaAhorro extends CuentaBancaria{
        private $tasaInteres;

        public function setTasaInteres($tasaInteres){
            $this->tasaInteres = $tasaInteres;
        }
        public function mostrarDatos(){
            parent :: mostrarDatos();
            echo "<br> Tasa Interes: ".$this->tasaInteres;
        }
    }
?>