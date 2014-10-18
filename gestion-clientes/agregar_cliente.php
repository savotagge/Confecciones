<?php include("../conn/conn.php");

//if(isset($_POST['rut'], $_POST['nombre'], $_POST['direccion'], $_POST['fono'], $_POST['cargo'], $_POST['afp'], $_POST['salud'], $_POST['cuenta'], $_POST['tipo_cuenta'], $_POST['banco'], $_POST['sucursal'])) {

//ASIGNACION DE VARIABLES con los datos enviados desde el formulario
$RUT_CLIENTE=$_POST['rut_cliente'];
$NOMBRE_CLIENTE=$_POST['nombre_cliente'];
$DIRECCION_CLIENTE=$_POST['direccion_cliente'];
$FECHA_ALTA=strftime("%Y/%m/%d");
$FONO_CLIENTE=$_POST['fono_cliente'];
$MAIL_CLIENTE=$_POST['mail_cliente'];
$FIABILIDAD_CLIENTE=$_POST['fiabilidad_cliente'];
$ACTIVO=$_POST['status_cliente'];

//se guarda en la base de datos
$result=mysql_query(("INSERT INTO `CONFECCIONES`.`CLIENTES` (`RUT_CLIENTE`, `NOMBRE_CLIENTE`, `DIRECCION_CLIENTE`, `FECHA_ALTA`, `FONO_CLIENTE`, `MAIL_CLIENTE`, `FIABILIDAD_CLIENTE`, `ACTIVO`) VALUES ('$RUT_CLIENTE', '$NOMBRE_CLIENTE', '$DIRECCION_CLIENTE', '$FECHA_ALTA', '$FONO_CLIENTE', '$MAIL_CLIENTE', '$FIABILIDAD_CLIENTE', '$ACTIVO')"),$link);

echo "Agregado!";
//}
