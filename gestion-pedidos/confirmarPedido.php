<?php 

include("../conn/conn.php");


$NPEDIDO=$_GET['pedido'];
$TOTAL=$_GET['total'];
$OSB=$_GET['obs'];
$RUT=$_GET['rut'];
$FECHAP=$_GET['fped'];
$FECHAL=$_GET['flim'];
$PAGO=$_GET['pago'];

mysql_query("INSERT INTO `PEDIDOS`(`COD_PEDIDO`, `RUT_CLIENTE`, `FECHA_TOPE`, `FECHA_PEDIDO`, `CONDICIONES_PAGO`, `VALOR_TOTAL_PEDIDO`, `OBSERVACIONES`, `ESTADO_PEDIDO`) VALUES ('$NPEDIDO','$RUT','$FECHAL','$FECHAP','$PAGO', '$TOTAL', '$OSB','Por_facturar')",$link);

header("Location:consultaCliente.html");
?>
