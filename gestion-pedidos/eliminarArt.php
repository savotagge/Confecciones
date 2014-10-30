<?php 

include("../conn/conn.php");

$ID=$_GET['id'];

mysql_query("DELETE FROM DETALLE_PEDIDO WHERE COD_DETALLE_PEDIDO='$ID'",$link);

header('Location:' .getenv('HTTP_REFERER'));

?>
