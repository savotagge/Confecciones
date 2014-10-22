<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta charset="UTF-8">
        <script language="JavaScript" src="../js/scripts.js">

        </script>
    </head>
    <body onload="fecha_automatica()">

        <form name="formPedido" method="GET" action="creacionPedido.php">
            RUT:<?php $RUT=$_GET['rut']; echo $RUT;?><br> 
            Nombre:<?php $NOMBRE=$_GET['nombre']; echo $NOMBRE;?><br>
            <input type="text" name="fechaPedido">
        </form>
        
    </body>
</html>
