
<html>
<head>
<link href="estilos.css" rel="stylesheet" type="text/css" />
<title>Datos proveedor</title>
<script>
function validar(form1) {

var tel=document.form1.tel.value;
//telefono
if(!(/^\d{8}$/.test(tel)) ) {
alert("Tiene que escribir un teléfono de 8 dígitos");
document.form1.tel.focus();
return false;
}
//valida correo
var correo=document.form1.corr.value;
var c=0;var p=0;
for(i=1;i<correo.length;i++) {
if(correo.charAt(i-1)=="@") {
c++;
}
if(c==1) {
if(correo.charAt(i-1)==".") {
p++; 
}}}
if(c==1 && p==2 || p==1) {
alert ("correo valido");
return true;
}
else {
alert ("correo no valido");
return false;
}

}
 
 
function sololetras() {
 if ((event.keyCode != 32) && (event.keyCode < 65) || (event.keyCode > 90) && (event.keyCode < 97) || (event.keyCode > 122))
  event.returnValue = false;
}

//Función que permite solo Números
function SoloNumeros() {
 if ((event.keyCode < 48) || (event.keyCode > 57)) 
  event.returnValue = false;
}

</script>
</head>
<?
$cod=$_GET['cod'];
$nom=$_GET['nom'];
$dir=$_GET['dir'];
$tel=$_GET['tel'];
$corr=$_GET['corr'];
$per=$_GET['per'];
?>

<body>
<nav>
<table border="0" cellpadding="3" align="center" cellspacing="1" />
<form method='GET' name="form1" action="e_editaProveedor.php" onSubmit="return validar()"><br />
<tr><td>Actualisar datos proveedor.</td></tr>
<tr><td>
<input type="text" name='cod' value='<?php echo $cod ?>' placeholder="codigo?" required onKeyPress="SoloNumeros()"><br /></td></tr>
<tr><td>
<input type="text" name='nom' value='<?php echo $nom?>' placeholder="nombre?" required onKeyPress="sololetras()"><br /></td></tr>
<tr><td>
<input type="text" name='dir'  value='<?php echo $dir ?>' placeholder="Direccion?" required><br /></td></tr>
<tr><td>
<input type="text" name='tel' value='<?php echo $tel ?>' placeholder="telefono?"required><br /></td>
</tr>
<tr><td>
<input type="text" name='corr' value='<?php echo $corr ?>'  placeholder="correo?"><br /></td></tr>
<tr><td>
<input type="text" name='per' value='<?php echo $per ?>' placeholder="persona contacto?" onKeyPress="sololetras()" required >
<br /></td></tr>
<tr><td>
<input type="submit" value="Registrar.">
</tr></td>
 
</form>
</table>
 
<nav>
</body>
</html>
