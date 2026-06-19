<?php
    class EmpleadoPorHoras extends Empleado{
        private $horasTrabajadas;
        private $pagoPorHora;

        public function setHorasTrabajadas($horasTrabajadas){
            $this->horasTrabajadas = $horasTrabajadas;
        }
        public function setPagoPorHora($pagoPorHora){
            $this->pagoPorHora = $pagoPorHora;
        }
        public function mostrarDatos(){
            parent :: mostrarDatos();
            echo "<br> horas Trabajadas: ".$this->horasTrabajadas;
            echo "<br> pago por hora: ".$this->pagoPorHora;
            echo "<br> sueldo Liquido: ".$this->sueldoLiquido();
        }
        public function calcularEmpleadoPorHoras(){
            $total = ( $this->getSueldoBase()+ $this->horasTrabajadas)*$this->pagoPorHora;
            return $total; 
        }
        public function sueldoLiquido(){
            $sueldoLiquio = $this->calcularEmpleadoPorHoras() - parent :: calcularIggs(); 
            return $sueldoLiquio;

        }
    }
?>