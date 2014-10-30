<html>
<head>
<link href="estilos.css" rel="stylesheet" type="text/css" />
<style type="text/css">
.botonicono
{background-image: url(busca.ico); }
</style>
<script>
//Función que permite solo Números
function SoloNumeros() {
 if ((event.keyCode < 48) || (event.keyCode > 57)) 
  event.returnValue = false;
}
</script>
</head>
<body >
<br>
<div>
<table align= "center" bgcolor="#006699"><tr><td>
<a href="f_i_proveedor.php"><button>REGISTRAR PROVEEDOR</button></a> 
</tr></td>
</table>
</div>
<br>

<nav>
<table align="right" border="0"><tr>
  <td>
Buscar
  <form method='GET' action="busqueda_proveedor.php">
<input name="cod" type="text" placeholder="codigo proveedor?" required onKeyPress="SoloNumeros()" > <input value=".." type="submit"  class="botonicono" > 
</form></td></tr>
</table>

<?php include("conexion.php");
$result = mysql_query("SELECT * FROM proveedores", $link); 
echo "<table border = '3'> \n"; 
echo "<tr>
<caption>Proveedores</caption>
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
		<td><a href='confirmar.php?cod=$row[0]'> <img src=elimina.ico></a></td>	
		</tr> \n"; 
       } 
      echo "</table> \n <br>"; 
?>

</nav>  
</body>
</head>
</html>