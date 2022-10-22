<?php
    /*
    * Descripción: Componente de los datos de formulario;
    * Autor: César Abraham López Aguilar 5"PM";
    * Fecha: 12 Octubre 2022;
    */

    //Obtiene nombre de formulario
    
    $nombre=$_POST['nombre'];
    $edad=$_POST['edad'];
    $telefono=$_POST['telefono'];

    echo "Hola $nombre" ."<br>". "Tu edad es: $edad". "<br>". "Tu numero de telefono es: $telefono";

    echo "<h1>";
    echo "<br><br><br>";
    echo "<a href='../html/greetingFom.html'> Regresar </a>";
?>