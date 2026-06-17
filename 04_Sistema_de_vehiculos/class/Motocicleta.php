<?php
    class Motocicleta extends Vehiculo{
        private $cilindrada;
        private $tipoMoto;

        public function setCilindrada($cilindrada){
            $this->cilindrada = $cilindrada;
        }
        public function setTipoMoto($tipoMoto){
            $this->tipoMoto = $tipoMoto;
        }
        public function mostrarDatos(){
            parent :: mostrarDatos();
            echo"<br> Cilindrada: ".$this->cilindrada;
            echo"<br> Tipo de Moto ".$this->tipoMoto;
        }
    }
?>