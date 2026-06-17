<?php
    require_once("Libro.php");

    $libro = new Libro();
    //agregamos los datos que vienen del formulario 
    $libro->setIsbn($_POST["num_isbn"]);
    $libro->setTitulo($_POST["txt_titulo"]);
    $libro->setAutor($_POST["txt_autor"]);
    $libro->setAnioPublicacion($_POST["date_anioPublicacion"]);
    $libro->motrarDatos();

?>