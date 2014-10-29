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

</script>
</head>
<body>
<nav>
<table border="0" align="center" >
<form method='GET' name="form1" action="i_proveedor" align="center" onSubmit="return validar()">
<br />
<tr><td>Registro de proveedores.</td></tr>
<tr><td>
<input type="text" name='nom' placeholder="nombre?"  onKeyPress="sololetras()" required><br /></td></tr>
<tr><td>
<input type="text" name='dir' placeholder="Direccion?" required><br /></td></tr>
<tr><td>
<input type="text" name='tel' placeholder="telefono?" onKeyPress="" required><br /></td>
</tr>
<tr><td>
<input type="text" name='corr'  placeholder="correo?" onKeyPress=""><br /></td></tr>
<tr><td>
<input type="text" name='per' placeholder="persona contacto?" onKeyPress="sololetras()" required >
<br /></td></tr>
<tr><td>
<input type="submit" value="Registrar" onClick="">
</tr></td>

</form>
<table/>
<br>
</nav>

</body>
</html>
