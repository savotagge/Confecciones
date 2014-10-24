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
if(isset($_POST['rut_cliente'], $_POST['nombre_cliente'], $_POST['direccion_cliente'], $_POST['fono_cliente'], $_POST['mail_cliente'])) {

	//Se verifica si el RUT del cliente ya existe en la base de datos
	$RESULT1=mysql_query("SELECT RUT_CLIENTE from CLIENTES", $link);
	while($ROW=mysql_fetch_array($RESULT1)){
		if($_POST['rut_cliente']==$ROW[0]){
			$ID=base64_encode($ROW[0]);
			echo '<div class="contenedor"><center class="titulo">El rut: <font color="red"><a href="detalle_cliente.php?id='.$ID.'"">'.$_POST['rut_cliente'].'</font></a> ya se encuentra registrado</center><br>';
			echo '<center class="titulo"><a href="javascript:history.back()">Regresar</a></center></div>';
			
			exit; //si el rut ya existe se detiene la ejecucion del script
		}
	}

//ASIGNACION DE VARIABLES con los datos enviados desde el formulario
$RUT_CLIENTE=$_POST['rut_cliente'];
$NOMBRE_CLIENTE=$_POST['nombre_cliente'];
$DIRECCION_CLIENTE=$_POST['direccion_cliente'];
$FECHA_ALTA=strftime("%Y/%m/%d");
$FONO_CLIENTE=$_POST['fono_cliente'];
$MAIL_CLIENTE=$_POST['mail_cliente'];
$FIABILIDAD_CLIENTE='Pendiente';
$ACTIVO=0;

//se guarda en la base de datos
$RESULT=mysql_query(("INSERT INTO `CONFECCIONES`.`CLIENTES` (`RUT_CLIENTE`, `NOMBRE_CLIENTE`, `DIRECCION_CLIENTE`, `FECHA_ALTA`, `FONO_CLIENTE`, `MAIL_CLIENTE`, `FIABILIDAD_CLIENTE`, `ACTIVO`) VALUES ('$RUT_CLIENTE', '$NOMBRE_CLIENTE', '$DIRECCION_CLIENTE', '$FECHA_ALTA', '$FONO_CLIENTE', '$MAIL_CLIENTE', '$FIABILIDAD_CLIENTE', '$ACTIVO')"),$link);

echo '<div class="contenedor"><center class="titulo">Cliente creado correctamente</center><br>';
echo '<center class="titulo"><a href="ver_clientes.php">Atras</a></center></div>';
}else{

	echo "Acceso no autorizado";
}
?>