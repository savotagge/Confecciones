<html>
<head>
<link href="estilos.css" rel="stylesheet" type="text/css" />
<?
$cod=$_GET['cod'];
?>
</head>

<body>
<nav>
<table align="center">
<form method='GET' action="e_eliminaProveedor.php">
<h6 align="center">Realmente desea  eliminar el registro <input name="cod" type="text" value='<?php echo $cod ?>'></h6>
<tr><td>
<input value="si" type="submit"> <button><a href="index.php">no</a></button>
</td></tr>
</form>
</table>
</nav>


</body>
</html>