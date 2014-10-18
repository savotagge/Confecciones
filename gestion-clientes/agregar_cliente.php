<?php include("../conn/conn.php");
//se revisa que las variables han sido declaradas
if(isset($_POST['rut_cliente'], $_POST['nombre_cliente'], $_POST['direccion_cliente'], $_POST['fono_cliente'], $_POST['mail_cliente'], $_POST['fiabilidad_cliente'], $_POST['status_cliente'])) {

//ASIGNACION DE VARIABLES con los datos enviados desde el formulario
$RUT_CLIENTE=$_POST['rut_cliente'];
$NOMBRE_CLIENTE=$_POST['nombre_cliente'];
$DIRECCION_CLIENTE=$_POST['direccion_cliente'];
$FECHA_ALTA=strftime("%Y/%m/%d");
$FONO_CLIENTE=$_POST['fono_cliente'];
$MAIL_CLIENTE=$_POST['mail_cliente'];
$FIABILIDAD_CLIENTE=$_POST['fiabilidad_cliente'];
$ACTIVO=0;

//se guarda en la base de datos
$RESULT=mysql_query(("INSERT INTO `CONFECCIONES`.`CLIENTES` (`RUT_CLIENTE`, `NOMBRE_CLIENTE`, `DIRECCION_CLIENTE`, `FECHA_ALTA`, `FONO_CLIENTE`, `MAIL_CLIENTE`, `FIABILIDAD_CLIENTE`, `ACTIVO`) VALUES ('$RUT_CLIENTE', '$NOMBRE_CLIENTE', '$DIRECCION_CLIENTE', '$FECHA_ALTA', '$FONO_CLIENTE', '$MAIL_CLIENTE', '$FIABILIDAD_CLIENTE', '$ACTIVO')"),$link);

echo "Agregado!";
}else{

	echo "Acceso no autorizado";
}
