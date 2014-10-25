<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta charset="UTF-8">
        <script type="text/javascript" src="../js/jquery.js"></script>
        <script>
        $(document).ready(function(){
        $("#productos").change(function(){ 
        $.post("carga_area.php", {id:$(this).val()},function(data){$("#valorUnit").val(data);})
        });
        })
        
        function fecha_automatica() {

                var f = new Date();
                document.formPedido.fechaPedido.value = f.getFullYear() + "-" + (f.getMonth() + 1) + "-" + f.getDate();
            }
        </script>
    </head>
    <body onload="fecha_automatica()">

        <form name="formPedido" method="GET" action="creacionPedido.php">
        <?php include("../conn/conn.php");
        $sql=mysql_query("SELECT * FROM PEDIDOS ORDER BY COD_PEDIDO DESC LIMIT 1",$link);
        $row = mysql_fetch_array($sql);
        $fila= $row['COD_PEDIDO'] + 1;
        ?>
            N° Pedido:<input type="text" name="nPedido" value="<?php echo $fila;?>" readonly><br>
            RUT:<input type="text" name="rut" value="<?php $RUT=$_GET['rut']; echo $RUT;?>" readonly><br>
            Nombre:<input type="text" name="nombre" value="<?php $NOMBRE=$_GET['nombre']; echo $NOMBRE;?>" readonly><br>
            Fecha pedido:<input type="text" name="fechaPedido" readonly><br>
	    Fecha limite:<input type="text" name="fechaLimite"><br>
            <select name="productos" id="productos" >
            <option>Seleccione...</option>
	    <?php 
            $sql=mysql_query("SELECT * FROM ARTICULOS",$link);
            while($row = mysql_fetch_array($sql)){
            echo'<OPTION VALUE="'.$row['COD_ARTICULO'].'">'.$row['NOMBRE_ARTICULO'].'</OPTION>';
            }
            ?>
            </select><br> 
            Valor unitario:<input type="text" name="valorUnit" id="valorUnit"><br>
            Cantidad:<input type="text" name="cantidad"><br>
            <textarea name="obseravaciones" rows="10" cols="50" style="resize:none"></textarea><br>
            <input type="submit" value="Agregar"><br> 
        </form>
        <input type="button" value="Siguiente"> 
        
    </body>
</html>
