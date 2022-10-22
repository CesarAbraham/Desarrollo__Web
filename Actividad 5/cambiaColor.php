<!-- 
    Autor:César Abraham López Aguilar. 
    Descripción: Código que hece que el título en pantalla cambie de color en función del boton oprimido.
-->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad 5</title>
</head>
<body>
    
    <h1 id="juan">Soy una simple página!!! =() =( =)</h1>

    <button id="btnrojo" style="background-color:red ;" onmouseover="rojo()">Red</button>
    <button id="btnamarillo" style="background-color:yellow ;" onmouseover="amarillo()">Yellow</button>
    <button id="btnnaranja" style="background-color:orange ;" onmouseover="naranja()">Orange</button>

    <script>
        function rojo(){
           // alert("Outchh Soy Rojo");
            document.getElementById("juan").style.backgroundColor = "red";
        }
        function amarillo(){
            //alert("Outchh Soy Amarillo");
            document.getElementById("juan").style.backgroundColor = "yellow";
        }
        function naranja(){
            //alert("Outchh Soy Naranja");
            document.getElementById("juan").style.backgroundColor = "orange";
        }
    </script>
</body>
</html>