<?php
function connect(){
//Llama al archivo de configuracion ubicado en un directorio distinto al del sitio web, los datos estan en un archivo oculto llamado ".config.ini"
$db_conf=parse_ini_file('../Conf-confecciones/conf.ini', true); 
//Los datos son almacenados como un array multidimencional, abajo se asignan las variables. 
$host=$db_conf['database']['db.config.host']; //nombre del servidor
$user=$db_conf['database']['db.config.user']; //nombre de usuario de la base de datos
$pass=$db_conf['database']['db.config.psr']; //contraseña de la base de datos
$name=$db_conf['database']['db.config.name']; //nombre de la base de datos

//var_dump($db_conf);
	if(!($link=mysql_connect($host, $user, $pass)))
	{
		echo ("Error de conexion"); //si los datos de conexion estan erroneos arroja un error
		exit();
	}
	
	if(!mysql_select_db($name, $link))
	{
		echo("Error de base de datos"); //si la base de datos no existe arroja un error
		exit();
	}
	return $link;
}
$link=connect(); //se ejecuta la funcion o sea conecta a la base de datos

?>