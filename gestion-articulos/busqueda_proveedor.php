<html>
<head>
<link href="estilos.css" rel="stylesheet" type="text/css" />
</head>
<body>
<nav>
<?php include("conexion.php");
$cod=$_GET['cod'];

$result = mysql_query("SELECT * FROM proveedores where COD_PROVEEDOR='$cod'", $link); 
echo "<table border = '3'> \n"; 
echo "<tr>
<caption>Proveedor encontrado..</caption>
<td>codigo proveedor</td>
<td>nombre</td>
<td>direccion</td>
<td>telefono</td>
<td>correo</td>
<td>persona contacto</td>
<td>editar</td>
<td>eliminar</td>
</tr> \n"; 
while($row=mysql_fetch_row($result)){ 
       echo"<tr><td>$row[0]</td>
	   <td>$row[1]</td>
	    <td>$row[2]</td>	
		<td>$row[3]</td>
		<td>$row[4]</td>
		<td>$row[5]</td>
		<td><a href='f_editaProveedor.php?cod=$row[0]&nom=$row[1]&dir=$row[2]&tel=$row[3]&corr=$row[4]&per=$row[5]'> <img src=edita.ico></a></td>		
		<td><a href='e_eliminaProveedor.php?cod=$row[0]'> <img src=elimina.ico></a></td>	
		</tr> \n"; 
       } 
      echo "</table> \n <br>";

?>
</nav>
</body>
</html>
