<?php 

include("../conn/conn.php");

$NPEDIDO=$_GET['nPedido'];

mysql_query("DELETE FROM DETALLE_PEDIDO WHERE COD_PEDIDO='$NPEDIDO'",$link);

header("Location:consultaCliente.html");
?>
