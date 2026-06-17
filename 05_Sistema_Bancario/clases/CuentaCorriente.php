<?php
    class CuentaCorriente extends CuentaBancaria{
        private $limiteDebitoMensual;
        private $limiteDebitoDiario;

        public function setLimiteDebidoMensual($limiteDebitoMensual){
            $this->limiteDebitoMensual = $limiteDebitoMensual;
        }
        public function setLimiteDebitoDiario($limiteDebitoDiario){
            $this->limiteDebitoDiario = $limiteDebitoDiario;
        }
        public function mostrarDatos(){
            parent :: mostrarDatos();
            echo "<br> Limite Debito Mensual: ".$this->limiteDebitoMensual;
            echo "<br> Limire Debito Diario: ".$this->limiteDebitoDiario;
        }
    }

?>