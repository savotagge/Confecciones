<?php include("../conn/conn.php");

//ver datos de l base de datos
$RESULT=mysql_query("SELECT RUT_CLIENTE as RUT, NOMBRE_CLIENTE as NOMBRE, FIABILIDAD_CLIENTE as FIABILIDAD, ACTIVO as ESTADO from CLIENTES",$link);
//se obtiene el numero de resultados
$NU=mysql_num_rows($RESULT);
if($NU==0){ 
echo 'Sin datos';
}else{
$MOSTRAR_CLIENTES="";
//se obtiene el numero de cabeceras de columnas (campos) de la busqueda
$NUMERO_CAMPO=mysql_num_fields($RESULT);
$MOSTRAR_CLIENTES.="<meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>";
$MOSTRAR_CLIENTES.="<table align='center' border=1>";
$MOSTRAR_CLIENTES.="<tr>";
for($NC=0;$NC<$NUMERO_CAMPO;$NC++){
  $NCAMPO=mysql_field_name($RESULT,$NC);
  $MOSTRAR_CLIENTES.="<td height='25'>";
  $MOSTRAR_CLIENTES.=$NCAMPO;
  $MOSTRAR_CLIENTES.="</td>";
  }
$MOSTRAR_CLIENTES.="</tr>";
while($ROW=mysql_fetch_array($RESULT)){
  $MOSTRAR_CLIENTES.="<tr>";
  $ID=base64_encode($ROW[0]);
  $MOSTRAR_CLIENTES.="<td><a href='detalle_cliente.php?id=".$ID."'>".$ROW[0]."</a></td>";
  $MOSTRAR_CLIENTES.="<td>".$ROW[1]."</td>";
  $MOSTRAR_CLIENTES.="<td>".$ROW[2]."</td>";
  //como la base de datos carece de una tabla de estados se asigna aqui el valor del estado y se muestra en pantalla
  if($ROW[3]==0){
    $ESTADO="Activo";
  }else{
    $ESTADO="Inactivo";
  }
  $MOSTRAR_CLIENTES.="<td>".$ESTADO."</td>";
  $MOSTRAR_CLIENTES.="</tr>";
}
$MOSTRAR_CLIENTES.="</table></center>";
echo $MOSTRAR_CLIENTES;

}
?>