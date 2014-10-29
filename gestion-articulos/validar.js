<script>



//solo letras
function sololetras() {
 if ((event.keyCode != 32) && (event.keyCode < 65) || (event.keyCode > 90) && (event.keyCode < 97) || (event.keyCode > 122))
  event.returnValue = false;
}

function valida(){
	
alert("llllll")
//valida email
valor = document.getElementById("campo").value;
if( !(/\w+([-+.']\w+)*@\w+( [-.]\w+)*\.\w+([-.]\w+)/.test(valor)) ) {
  return false;
}
//fecha
var ano = document.getElementById("ano").value;
var mes = document.getElementById("mes").value;
var dia = document.getElementById("dia").value;
valor = new Date(ano, mes, dia);
if( !isNaN(valor) ) {
  return false;
}

//Función que permite solo Números
function ValidaSoloNumeros() {
 if ((event.keyCode < 48) || (event.keyCode > 57)) 
  event.returnValue = false;
}




function valida(){
if(document.for.rut.value == "") {
alert("Por favor indique Su rut");
document.for.rut.focus();
return false;
}

if(document.for.nom.value == "") {
alert("Por favor ingrese un nombre");
document.for.nom.focus();
return false;
}
else{//Paso por las dos validaciones ahora mandamos formulario
alert("Muchas gracias por tu comentario");
document.for.submit(); 
}
}

</script>

//para llamar a funcion
// <form id="for" name="for"method="post" action="F_galeria.php"onSubmit="return valida()">