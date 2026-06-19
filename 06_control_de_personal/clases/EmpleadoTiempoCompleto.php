<?php
    class EmpleadoTiempoCompleto extends Empleado{
            private $bono;
        
            public function setBono($bono){
                $this->bono = $bono;
            }
            public function mostrarDatos(){
                parent :: mostrarDatos();
                echo "<br> bono: ".$this->bono;
                echo "<br> sueldo Liquido: ".$this->sueldoLiquido();
            }
            public function calcularEmpleadoTiempoCompleto(){
                $total = $this->getSueldoBase() + $this->bono;
                return $total;
            }
            public function sueldoLiquido(){
                $sueldoLiquido = $this->calcularEmpleadoTiempoCompleto() - parent :: calcularIggs();
                return $sueldoLiquido;

            }


    }

?>