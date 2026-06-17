<?php
    class Libro{
        private $isbn;
        private $titulo;
        private $autor;
        private $anioPublicacion;
        //metodos 
        public function setIsbn($isbn){
            $this->isbn=$isbn;
        }
        public function setTitulo($titulo){
            $this->titulo=$titulo;
        }
        public function setAutor($autor){
            $this->autor=$autor;
        }
        public function setAnioPublicacion($anioPublicacion){
            $this->anioPublicacion = $anioPublicacion;
        }
        public function  motrarDatos(){
            echo "---Datos del libro---";
            echo "<br>isbn: ".$this->isbn;
            echo "<br>Titulo: ".$this->titulo;
            echo "<br>Autor: ".$this->autor;
            echo "<br>Año Publicacion: ".$this->anioPublicacion;
        }
    }

?>