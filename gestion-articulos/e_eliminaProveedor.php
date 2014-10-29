<?php include("conexion.php");
$cod=$_GET['cod'];
header("Location:index.php");
  $sql="delete from proveedores where COD_PROVEEDOR='$cod'";
  mysql_query($sql,$link);
?>

 
