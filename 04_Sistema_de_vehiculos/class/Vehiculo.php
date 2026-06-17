<?php
    class Vehiculo{
        private $placa;
        private $marca;
        private $modelo;
        private $precio;
        //metodos 
        public function setPlaca($placa){
            $this->placa = $placa;
        }
        public function setMarca($marca){
            $this->marca = $marca;
        }
        public function setModelo($modelo){
            $this->modelo = $modelo;
        }
        public function setPrecio($precio){
                $this->precio = $precio;
        }
        public function mostrarDatos(){
            echo "-----estos son los datos-----";
            echo "<br> placa: ".$this->placa;
            echo "<br> marca: ".$this->marca;
            echo "<br> modelo: ".$this->modelo;
            echo "<br> precio: ".$this->precio;
        }
    }
       



?>