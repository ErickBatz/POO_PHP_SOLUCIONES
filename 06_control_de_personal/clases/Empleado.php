<?php
    class Empleado {
        private $codigoEmpleado;
        private $nombre;
        private $puesto;
        private $sueldoBase;

        //metodos set
        public function setCodigoEmpleado($codigoEmpleado){
            $this->codigoEmpleado = $codigoEmpleado;
        }
        public function setNombre($nombre){
            $this->nombre = $nombre;
        }
        public function setPuesto($puesto){
            $this->puesto=$puesto;
        }
        public function setSueldoBase($sueldoBase){
            $this->sueldoBase = $sueldoBase;
        }
        public function getSueldoBase(){
            return $this->sueldoBase;
        }
        public function mostrarDatos(){
            echo "---estos son los datos---";
            echo "<br> codigo empleado: ".$this->codigoEmpleado;
            echo "<br> Nombre: ".$this->nombre;
            echo "<br> puesto: ".$this->puesto;
            echo "<br> sueldo Base: ".$this->sueldoBase;
        }
        public function calcularIggs(){
            $iggs = $this->sueldoBase * 0.0483;
            return $iggs;
        }

    }
?>