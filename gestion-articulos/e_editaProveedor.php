<html>
<head>
<link href="estilos.css" rel="stylesheet" type="text/css" />
</head>
<body>
<nav>
<?php include("conexion.php");
$cod=$_GET['cod'];
$n=$_GET['nom'];
$d=$_GET['dir'];
$t=$_GET['tel'];
$c=$_GET['corr'];
$p=$_GET['per'];
$sql="update proveedores set NOMBRE_PROVEEDOR='$n',DIRECCION_PROVEEDOR='$d',FONO_PROVEEDOR='$t',CORREO_PROVEEDOR='$c',PERSONA_CONTACTO='$p' where COD_PROVEEDOR='$cod'";
mysql_query($sql,$link);


$result = mysql_query("SELECT * FROM proveedores WHERE COD_PROVEEDOR='$cod'", $link); 
echo "<table border = '3'> \n"; 
echo "<tr>
<caption>Proveedor actualizado</caption>
<td>codigo proveedor</td>
<td>nombre</td>
<td>direccion</td>
<td>telefono</td>
<td>correo</td>
<td>persona contacto</td>
</tr> \n"; 
while($row=mysql_fetch_row($result)){ 
       echo"<tr><td>$row[0]</td>
	   <td>$row[1]</td>
	    <td>$row[2]</td>	
		<td>$row[3]</td>
		<td>$row[4]</td>
		<td>$row[5]</td>
		</tr> \n"; 
       } 
      echo "</table> \n <br>"; 
?>
<p align="right"><button><a href="index.php">Volver al Inicio</a></button></p>
</nav>
</body>
</html>






