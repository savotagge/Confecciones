<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" type="text/css" href="../css/style2.css"/>
    </head>
    <body>
<?php 

include("../conn/conn.php");

$RUT=$_GET['rut'];

$result=mysql_query("SELECT * FROM CLIENTES WHERE RUT_CLIENTE='$RUT'", $link);
$row=mysql_fetch_array($result);

if($row == 0){
echo "El cliente ingresado no existe en nuestros registros, para volver a intentarlo pinche <a href='consultaCliente.html'>aqui</a>";
}else{

$NOMBRE=$row[NOMBRE_CLIENTE];

header("Location: pedido.php?rut=$RUT&nombre=$NOMBRE");
}
?>
</body>
</html>
