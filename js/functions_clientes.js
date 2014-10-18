function Validar_form_Agregar_Cliente{

var rut=document.formAgregarCliente.rut_cliente.value
var nombre=document.formAgregarCliente.nombre_cliente.value
var direccion=document.formAgregarCliente.direccion_cliente.value
var fono=document.formAgregarCliente.fono_cliente.value
var mail=document.formAgregarCliente.mail_cliente.value
var fiabilidad=document.formAgregarCliente.fiabilidad_cliente.value

//Validad si los campos han sido enviados vacios

//valido todos los campos
    if (rut==0 && nombre==0 && direccion==0 && fono==0 && mail==0 && fiabilidad==0){
    alert("Debe llenar todos los campos")
    document.formAgregarCliente.rut_cliente.focus()
    return "0";







}