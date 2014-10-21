<?php include("../conn/conn.php");
//se revisa que las variables han sido declaradas
if(isset($_POST['rut_cliente'], $_POST['nombre_cliente'], $_POST['direccion_cliente'], $_POST['fono_cliente'], $_POST['mail_cliente'])) {

	//Se verifica si el RUT del cliente ya existe en la base de datos
	$RESULT1=mysql_query("SELECT RUT_CLIENTE from CLIENTES", $link);
	while($ROW=mysql_fetch_array($RESULT1)){
		if($_POST['rut_cliente']==$ROW[0]){

			echo "El rut ".$_POST['rut_cliente']." ya esta registrado";
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
$ACTIVO=0;

//se guarda en la base de datos
$RESULT=mysql_query(("INSERT INTO `CONFECCIONES`.`CLIENTES` (`RUT_CLIENTE`, `NOMBRE_CLIENTE`, `DIRECCION_CLIENTE`, `FECHA_ALTA`, `FONO_CLIENTE`, `MAIL_CLIENTE`, `FIABILIDAD_CLIENTE`, `ACTIVO`) VALUES ('$RUT_CLIENTE', '$NOMBRE_CLIENTE', '$DIRECCION_CLIENTE', '$FECHA_ALTA', '$FONO_CLIENTE', '$MAIL_CLIENTE', '$FIABILIDAD_CLIENTE', '$ACTIVO')"),$link);

echo "Agregado!";
}else{

	echo "Acceso no autorizado";
}
