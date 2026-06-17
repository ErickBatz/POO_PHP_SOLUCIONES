<?php
    class Automovil extends Vehiculo{
        private $tipoVehiculo;
        private $numeroPuertas;
        private $tipoCombustible;

        public function setTipoVehiculo($tipoVehiculo){
            $this->tipoVehiculo = $tipoVehiculo;
        }
        public function setNumeroPuertas($numeroPuertas){
            $this->numeroPuertas = $numeroPuertas;
        }
        public function setTipoCombustible($tipoCombustible){
            $this->tipoCombustible = $tipoCombustible;
        }
        public function mostrarDatos(){
            parent :: mostrarDatos();
            echo "<br>Tipo de Vehiculo:".$this->tipoVehiculo;
            echo "<br>Numero Puertas: ".$this->numeroPuertas;
            echo "<br>Tipo de Combustible: ".$this->tipoCombustible;
        }

    }

?>