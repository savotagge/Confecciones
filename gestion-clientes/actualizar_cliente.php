<?php include("../conn/conn.php");
//se revisa que las variables han sido declaradas

if(isset($_POST['rut_cliente'],$_POST['nombre_cliente'],$_POST['direccion_cliente'],$_POST['fono_cliente'],$_POST['mail_cliente'],$_POST['status_cliente'],$_POST['fiabilidad_cliente'])) {

	
//ASIGNACION DE VARIABLES con los datos enviados desde el formulario
$RUT_CLIENTE=$_POST['rut_cliente'];
$NOMBRE_CLIENTE=$_POST['nombre_cliente'];
$DIRECCION_CLIENTE=$_POST['direccion_cliente'];
$FECHA_ALTA=$POST['fecha_alta'];
$FONO_CLIENTE=$_POST['fono_cliente'];
$MAIL_CLIENTE=$_POST['mail_cliente'];
$ACTIVO=$_POST['status_cliente'];
$FIABILIDAD=$_POST['fiabilidad_cliente'];
$NOTAS=$_POST['notas'];

//se guardan en la base de datos

$RESULT=mysql_query(("UPDATE CLIENTES SET NOMBRE_CLIENTE='$NOMBRE_CLIENTE',DIRECCION_CLIENTE='$DIRECCION_CLIENTE',FONO_CLIENTE='$FONO_CLIENTE',MAIL_CLIENTE='$MAIL_CLIENTE',FIABILIDAD_CLIENTE='$FIABILIDAD',ACTIVO='$ACTIVO',NOTAS='$NOTAS' WHERE RUT_CLIENTE like '$RUT_CLIENTE'"),$link);

echo "Datos actualizados actualizados correctamente!";
}else{

	echo "Acceso no autorizado";
}