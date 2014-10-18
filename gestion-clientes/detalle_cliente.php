<?php include("../conn/conn.php");
//se recibe la variable enviada desde el formulario
if(isset($_GET['id'])){ //se revisa si la variable ha sido declarada

	if(!empty($_GET['id'])){ //se revisa si la variable contiene datos

	$RUT=base64_decode($_GET['id']); //se decodifica la variable

	//Se va a buscar a la base de datos los datos del cliente seleccionado
    $RESULT=mysql_query("SELECT * from CLIENTES where RUT_CLIENTE like '$RUT'",$link);
    while($ROW=mysql_fetch_array($RESULT)){
    echo "Nombre: <input type='text' value=".$ROW['NOMBRE_CLIENTE']."><br><br>";
    echo "Rut: <input type='text' value=".$ROW['RUT_CLIENTE'].">";

}


	}else{
		echo "Acceso no autorizado"; //si la variable estaba declarada y venia vacia se muestra una advertencia
		}
}else{

	echo "Acceso no autorizado"; //si la variable nunca se declaro se muestra una advertencia
}

?>