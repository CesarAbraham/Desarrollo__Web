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
    <title>Generar tablas</title>
</head>
<body>
    <center>
    <h1>Generador de tablas</h1>
    <form action="tablas.php" method="Get">

    <label for="">Columna</label>
    <input type="number" name="columna">
    <label for="">Fila</label>
    <input type="number" name="fila" >
    <input type="submit" value="Generar">
    <br>
    <br>
    <br>
    </form>
    </center>
</body>
</html>
<?php
    if($_GET){

        $columna=$_GET['columna'];
        $fila=$_GET['fila'];

        if($fila&&$columna&&isset($_GET['columna'])){
            echo "<center>";
            echo "<table aling:'center' border='1px'>" ;
                for($fil=1; $fil<=$_GET['fila']; $fil++) {
                    echo"<tr>";
                    for($col=1; $col<=$_GET['columna']; $col++){
                        echo "<td>";
                        echo "$fil$col";
                        echo "</td>";
                    }
                    echo "<tr>";
                }
            echo "</table>";
            echo "</center>";
        }
    }
?>