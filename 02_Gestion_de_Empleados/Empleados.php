<?php
    class Empleado{
        //atributos 
        private $nombre;
        private $puesto;
        private $horasTrabajadas;
        private $pagoPorHora;

        //metodos
        public function setNombre($nombre){
            $this->nombre=$nombre;
        }
        public function setPuesto($puesto){
            $this->puesto=$puesto;
        }
        public function setHoraTrabajadas($horasTrabajadas){
            $this->horasTrabajadas=$horasTrabajadas;
        }
        public function setPagoPorHora($pagoPorHora){
            $this->pagoPorHora=$pagoPorHora;
        }
        private function calcularSalarioMensual(){
            $salario = $this->horasTrabajadas * $this->pagoPorHora;
            return $salario;
        }
        private function calcularIgss(){
            $igss = $this->calcularSalarioMensual()*0.0483;
            return $igss;
        }
        private function sueldoLiquido(){
            $sueldoLiquido = $this->calcularSalarioMensual()-$this->calcularIgss();
            return $sueldoLiquido;
        }
        public function mostrarDatos(){
            echo"---datos del empleado---<br>";
            echo"<br>Nombre: ".$this->nombre;
            echo "<br>Puesto: ".$this->puesto;
            echo "<br>horas Trabajadas ".$this->horasTrabajadas;
            echo "<br>Pago por Hora: ".$this->pagoPorHora;
            echo "<br>salario mensual: ". $this->calcularSalarioMensual();
            echo "<br>Igss: ". $this->calcularIgss();
            echo "<br>sueldo liquido: ". $this->sueldoLiquido();
        }
    }
?>
