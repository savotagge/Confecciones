<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" type="text/css" href="../css/style2.css"/>
	<title>Notificación</title>
</head>
<body >
<?php include("../conn/conn.php");
//se revisa que las variables han sido declaradas

if(isset($_POST['Id'])){

	
//ASIGNACION DE VARIABLES con los datos enviados desde el formulario
$RUT_CLIENTE=base64_decode($_POST['Id']); //se decodifica la variable


//se elimina al cliente desde la base de datos

$RESULT=mysql_query(("DELETE FROM CLIENTES WHERE RUT_CLIENTE like '$RUT_CLIENTE'"),$link);

echo '<div class="contenedor"><center class="titulo">Eliminado correctamente</center><br>';
echo '<center class="titulo"><a href="ver_clientes.php">Regresar</a></center></div>';
}else{
	//accesos no autizados
	
	echo '<div class="contenedor"><center class="titulo"><font color="red">Acceso no autorizado!</font></center></div><br>';
}
?>

</body>
</html>

