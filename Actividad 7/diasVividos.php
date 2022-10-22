<!-- 
    Autor: César Abraham López Aguilar;
    Fecha: 21/10/2022 
 -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Días Vividos</title>
</head>
<body>
    <center>
    <h1>Programa que calcula los días Vividos</h1>

    <form action="diasVividos.php" method="$_GET">
        <label for="">Ingresa la edad</label>
        <input type="number" name="edad" id="edad" main='0' max='120'><br><br>
        <input type="submit" value="Calcular los días vividos">
    </form>
    </center>
</body>
</html>

<?php

   if($_GET){
    $edad=$_GET['edad'];

    if(isset($_GET['edad'])){
        $edad=$edad*365;
        echo "<h3 style='text-aling:center;'> Los días vividos son: $edad</h3>";
    }

   }

    
?>