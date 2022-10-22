<?php

/*
    Descripcion:Componente de los datos del formulario;
    Autor:César Abraham López Aguilar 5"PM";
    Fecha: 12/10/2022;
*/

$tabla=$_POST['tabla'];

echo "<h1> Tabla de multiplicar del $tabla </h1>";

for($i=1;$i<=10;$i++){
    echo"$i x $tabla = ". $i*$tabla . "<br>";
}
echo "<h1>";
echo "<br><br>";
echo "<a href='../html/tabla.html'> Regresar </a>";

?>