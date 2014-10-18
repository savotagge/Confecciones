<?php
//se recibe la variable enviada desde el formulario
if(isset($_GET['id'])){ //se revisa si la variable ha sido declarada

	if(!empty($_GET['id'])){ //se revisa si la variable contiene datos

	$RUT=base64_decode($_GET['id']); //se decodifica la variable
	echo $RUT;
	}else{
		echo "Acceso no autorizado"; //si la variable estaba declarada y venia vacia se muestra una advertencia
		}
}else{

	echo "Acceso no autorizado"; //si la variable nunca se declaro se muestra una advertencia
}

?>