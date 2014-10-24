<html>
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <link rel="stylesheet" type="text/css" href="../css/style2.css"/>
      <!-- <script type="text/javascript" src="js/scripts.js"></script>-->
      <script type="text/javascript" src="../js/functions_clientes.js"></script>
      <title>GESTION CLIENTES</title>
      <style type="text/css">
<!--
.Estilo1 {
  font-size: 18px;
  font-weight: bold;
}
.Estilo2 {
  font-size: 24px;
  font-weight: bold;
}
-->
      </style>
</head>
 <body>
      <div class="contenedor">
         <table width=950px >
            <tr>
               <td>
                  <div class="titulo Estilo3">
                     Lista de Clientes</div><br>  
                      </td>
              
            </tr>
         </table>

<?php include("../conn/conn.php");

//ver datos de l base de datos
$RESULT=mysql_query("SELECT RUT_CLIENTE as RUT, NOMBRE_CLIENTE as NOMBRE, FIABILIDAD_CLIENTE as FIABILIDAD, ACTIVO as ESTADO from CLIENTES",$link);
//se obtiene el numero de resultados
$NU=mysql_num_rows($RESULT);
if($NU==0){ 
echo '<center class="titulo">No existen clientes</center>';
}else{
$MOSTRAR_CLIENTES="";
//se obtiene el numero de cabeceras de columnas (campos) de la busqueda
$NUMERO_CAMPO=mysql_num_fields($RESULT);
$MOSTRAR_CLIENTES.="<meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>";
$MOSTRAR_CLIENTES.="<table align='center' border=1,5>";
$MOSTRAR_CLIENTES.="<tr>";
for($NC=0;$NC<$NUMERO_CAMPO;$NC++){
  $NCAMPO=mysql_field_name($RESULT,$NC);
  $MOSTRAR_CLIENTES.="<td height='40' width='150'>";
  $MOSTRAR_CLIENTES.="<center>";
  $MOSTRAR_CLIENTES.=$NCAMPO;
  $MOSTRAR_CLIENTES.="</td>";
  }
$MOSTRAR_CLIENTES.="</tr>";
while($ROW=mysql_fetch_array($RESULT)){
  $MOSTRAR_CLIENTES.="<tr>";
  $ID=base64_encode($ROW[0]);
  $MOSTRAR_CLIENTES.="<td bgcolor='#FFFFFF'><a href='detalle_cliente.php?id=".$ID."'><center>".$ROW[0]."</center></a></td>";
  $MOSTRAR_CLIENTES.="<td bgcolor='#FFFFFF'>".$ROW[1]."</td>";
  $MOSTRAR_CLIENTES.="<td bgcolor='#FFFFFF'>".$ROW[2]."</td>";
  //como la base de datos carece de una tabla de estados se asigna aqui el valor del estado y se muestra en pantalla
  if($ROW[3]==0){
    $ESTADO="Activo";
  }else{
    $ESTADO="Inactivo";
  }
  $MOSTRAR_CLIENTES.="<td bgcolor='#FFFFFF'>".$ESTADO."</td>";
  $MOSTRAR_CLIENTES.="</tr>";
}
$MOSTRAR_CLIENTES.="</table></center><br><br>";
$MOSTRAR_CLIENTES.="<div align='center' class='titulo'><input type='button' name='crear_cliente' value='Agregar cliente' onClick=window.location.href='crear_cliente.html'> ";
$MOSTRAR_CLIENTES.='<a href="./">Atras</a></div>';
echo $MOSTRAR_CLIENTES;

}
?>
</html>