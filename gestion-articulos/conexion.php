<?php
function conectarse(){
	if(!($link=mysql_connect("localhost","confecciones","confecciones2014")))
	{
		echo ("error de conexion");
		exit();
	}
	
	if(!mysql_select_db("CONFECCIONES",$link))
	{
		echo("error de base de datos");
		exit();
	}
	return $link;
}
$link=conectarse();

?>