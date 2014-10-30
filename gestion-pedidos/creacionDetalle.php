<?php 

include("../conn/conn.php");

$NPEDIDO=$_GET['nPedido'];
$sql=mysql_query("SELECT * FROM DETALLE_PEDIDO ORDER BY COD_DETALLE_PEDIDO DESC LIMIT 1",$link);
$row = mysql_fetch_array($sql);
$NDETALLE= $row['COD_DETALLE_PEDIDO'] + 1;
$PRODUCTO=$_GET['productos'];
$CANTIDAD=$_GET['cantidad'];
$VUNIT=$_GET['valorUnit'];
$SUB=$CANTIDAD * $VUNIT;

mysql_query("INSERT INTO `DETALLE_PEDIDO` (`COD_DETALLE_PEDIDO`, `COD_PEDIDO`, `COD_ARTICULO`, `CANTIDAD_DETALLE_PEDIDO`, `VALOR_UNITARIO`,`SUB_TOTAL`) VALUES ('$NDETALLE','$NPEDIDO','$PRODUCTO','$CANTIDAD', '$VUNIT', '$SUB')",$link);

header('Location:' .getenv('HTTP_REFERER'));
?>
