<?php include("../conn/conn.php");
//se revisa que las variables han sido declaradas

if(isset($_POST['Id'])){

	
//ASIGNACION DE VARIABLES con los datos enviados desde el formulario
$RUT_CLIENTE=base64_decode($_POST['Id']); //se decodifica la variable


//se elimina al cliente desde la base de datos

$RESULT=mysql_query(("DELETE FROM CLIENTES WHERE RUT_CLIENTE like '$RUT_CLIENTE'"),$link);

echo "Cliente eliminado correctamente!";
}else{

	echo "Acceso no autorizado";
}