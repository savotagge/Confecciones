<html>
<head>
<link href="estilos.css" rel="stylesheet" type="text/css" />
</head>
<body>
<br>
<nav>
<br>
<?php include("conexion.php");

$nom=$_GET['nom'];
 $dir=$_GET['dir'];
 $tel=$_GET['tel'];
 $corr=$_GET['corr'];
 $per=$_GET['per'];
 
$sql="select max(COD_PROVEEDOR) from proveedores";//CODIGO PEDIDO SE TIENE QUE AUTOGENERAR
$datos=mysql_query($sql,$link);
$cod=mysql_result($datos,0,0);
$cod=$cod+1;

$sql="insert into proveedores(COD_PROVEEDOR,NOMBRE_PROVEEDOR,DIRECCION_PROVEEDOR,FONO_PROVEEDOR,CORREO_PROVEEDOR,PERSONA_CONTACTO) 
values('$cod','$nom','$dir','$tel','$corr','$per')";   
mysql_query($sql,$link);



$result = mysql_query("SELECT * FROM proveedores WHERE COD_PROVEEDOR='$cod'", $link); 
echo "<table border = '3'> \n"; 
echo "<tr>
<caption>Ultimo proveedor registrado</caption>
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
