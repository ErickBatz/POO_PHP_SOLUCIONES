<?php
    class Producto{
        //atributos
        private $codigo;
        private $nombre;
        private $precio;
        private $existencia;
        
        //metodos 
        public  function setCodigo($codigo){
            $this->codigo=$codigo;
        }
        public function setNombre($nombre){
            $this->nombre=$nombre;
        }
        public  function setPrecio($precio){
            $this->precio=$precio;
        }
        public  function setExistencia($existencia){
            $this->existencia=$existencia;
        }

        public function mostrarDatos(){
           echo"---valores de inventario---<br>";
            echo "Codigo: ".$this->codigo."<br>";
            echo "Nombre: ".$this->nombre."<br>";
            echo "Precio: ".$this->precio."<br>";
            echo "Existencia: ".$this->existencia."<br>";
            echo "Valor de Invetario: " . $this->precio*$this->existencia."<br>";
        }

        
    }



?>