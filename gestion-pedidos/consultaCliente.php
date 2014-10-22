<?php include("../conn/conn.php");

$RUT=$_GET['rut'];

$result=mysql_query("SELECT * FROM CLIENTES WHERE RUT_CLIENTE='$RUT'", $link);
$row=mysql_fetch_array($result);

$NOMBRE=$row[NOMBRE_CLIENTE];

header("Location: pedido.php?rut=$RUT&nombre=$NOMBRE");

?>
