<?php include("../conn/conn.php");
//se recibe la variable enviada desde el formulario
if(isset($_GET['id'])){ //se revisa si la variable ha sido declarada

	if(!empty($_GET['id'])){ //se revisa si la variable contiene datos

	$RUT=base64_decode($_GET['id']); //se decodifica la variable

	//Se va a buscar a la base de datos los datos del cliente seleccionado
    $RESULT=mysql_query("SELECT * from CLIENTES where RUT_CLIENTE like '$RUT'",$link);
    while($ROW=mysql_fetch_array($RESULT)){
    
?>
<html>
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <script type="text/javascript" src="../js/functions_clientes.js"></script>
      <title>GESTION CLIENTES</title>
      <style type="text/css">

.Estilo1 {
	font-size: 18px;
	font-weight: bold;
}

      .Estilo3 {
	font-size: 24px;
	font-weight: bold;
}
      </style>
</head>
   <body>
      <div class="contenedor">
         <table width=950px >
            <tr>
               <td>
                  <div class="titulo Estilo3">
                     Detalles Cliente</div><br>              </td>
              
            </tr>
         </table>
		   
     
<form action='actualizar_cliente.php' method='POST' name='formDetalleCliente'>

<span class="Estilo1">Datos Personales</span> <br><br>

<table name='datos-personales' border='1' width=100%>
  <tr>
    <td width="11%" height="40">Rut Cliente </td>
    <td width="44%"><input tipe='text' name='rut_cliente' value="<?php echo $ROW['RUT_CLIENTE'] ?>" size='35' readonly="readonly">
    </td>
    <td width="9%">Telefono</td>
    <td width="36%"><input tipe='text' name='fono_cliente' value="<?php echo $ROW['FONO_CLIENTE'] ?>" size='30'>
        <span class="ejemplos"> (09 12345678)</span></td>
  </tr>
  <tr>
    <td height="42">Nombre</td>
    <td><input tipe='text' name='nombre_cliente' value="<?php echo $ROW['NOMBRE_CLIENTE'] ?>" size='65'></td>
	  <td width="9%">Mail</td>
      <td width="36%"><input tipe='text' name='mail_cliente' value="<?php echo $ROW['MAIL_CLIENTE'] ?>" size='50'></td>
  </tr>
  <tr>
    <td height="42">Direccion</td>
    <td colspan='3'><input tipe='text' name='direccion_cliente' value="<?php echo $ROW['DIRECCION_CLIENTE'] ?>" size='75'>
        <span class="ejemplos"> (Villa La Paz, Pasaje b, casa #123, Curico.)</span></td>
  </tr>
</table>
<br><br>
<span class="Estilo1">Otros Datos </span><br>
<br>
<table name='afiliaciones' Width=100% border='1'>

  <tr>
  <td width="89" height="40">Fecha de Alta </td>
      <td width="241"><input tipe='text' name='fecha_alta' value="<?php echo $ROW['FECHA_ALTA'] ?>" size='18' readonly="readonly">  
        
      <td width='124'>Estado cliente</td>
    <td width='156'>
    	<select name='status_cliente'>
    	<?php
    	//pre-carga el estatus del clientes

    	if($ROW['ACTIVO']==0){
    $activo="selected";
  }else{
    $inactivo="selected";
  }?>
      <option value=0 <?php echo $activo;?> >Activo</option>
      <option value=1 <?php echo $inactivo;?> > Inactivo</option>
     
    </select></td>
    <td width='96'>Fiabilidad</td>

<?php
    	//pre-carga la fiabilidad del cliente

    	if($ROW['FIABILIDAD_CLIENTE']=='Buena'){
    $buena="selected";
  }else{
  	if($ROW['FIABILIDAD_CLIENTE']=='Regular'){
  		$regular="selected";
  }else{
  if($ROW['FIABILIDAD_CLIENTE']=='Mala'){
  	$mala="selected";

  }
  }
    
  }?>

    <td width='160'><select name='fiabilidad_cliente'>
      <option value='Buena' <?php echo $buena;?> >Buena</option>
      <option value='Regular' <?php echo $regular;?> >Regular</option>
      <option value='Mala' <?php echo $mala;?> >Mala</option>
      </select></td>
  </tr>
  <tr>
  	<td>Notas</td>
  	<td colspan="5">
  		<textarea name='notas' style="width:1245px; height:100px"><?php echo $ROW['NOTAS'] ?></textarea>
  	</td>
  </tr>
</table>
<p><br>
      <input type="button" name='actualizar' value='Actualizar' onClick="Validar_form_Actualizar_Cliente()"> 
    <input type='button' name='eliminar' value='Eliminar' onClick="Eliminar_Cliente()">
  </div>
</p>
</form>

            </div>
                   
         </div>
      </div>
   </body>
</html>


<?php
}


	}else{
		echo "Acceso no autorizado"; //si la variable estaba declarada y venia vacia se muestra una advertencia
		}
}else{

	echo "Acceso no autorizado"; //si la variable nunca se declaro se muestra una advertencia
}

?>