function Limpiar_form_Agregar_Cliente(){

document.formAgregarCliente.reset()

}

function Validar_form_Agregar_Cliente(){ //esta funcion validara el formulario de ingreso de clientes a la base de datos

var rut=document.formAgregarCliente.rut_cliente.value
var nombre=document.formAgregarCliente.nombre_cliente.value
var direccion=document.formAgregarCliente.direccion_cliente.value
var fono=document.formAgregarCliente.fono_cliente.value
var mail=document.formAgregarCliente.mail_cliente.value


//Validad si los campos han sido enviados vacios
if (rut=="" && nombre=="" && direccion=="" && fono=="" && mail==""){
    alert("Debe llenar todos los campos")
    document.formAgregarCliente.rut_cliente.focus()
    return "0";}

    if (rut==""){
    alert("Debe ingresar el Rut del cliente")
    document.formAgregarCliente.rut_cliente.focus()
    return "0";}
    //se valida el formato del rut para el formato 12.123.123-4
    expr_rut = /^([0-9]{1,2}\.[0-9]{3}\.[0-9]{3}\-[0-9kK])+$/
    if ( !expr_rut.test(rut) ){
        alert("Error: El Rut: " + rut + " es incorrecto, verifique el ejemplo.")
        document.formAgregarCliente.rut_cliente.focus()
    return "0";}

    if (nombre==""){
    alert("Debe ingresar el Nombre del cliente")
    document.formAgregarCliente.nombre_cliente.focus()
    return "0";}

    if (direccion==""){
    alert("Debe ingresar la Dirección del cliente")
    document.formAgregarCliente.direccion_cliente.focus()
    return "0";}

    if (fono==""){
    alert("Debe ingresar el Telefono del cliente")
    document.formAgregarCliente.fono_cliente.focus()
    return "0";}

    if (mail==""){
    alert("Debe ingresar el Mail del cliente")
    document.formAgregarCliente.mail_cliente.focus()
    return "0";}

    //se valida el formato de correo electronico
	 expr_mail = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/
    if ( !expr_mail.test(mail) ){
        alert("Error: La dirección de correo " + mail + " es incorrecta.")
        document.formAgregarCliente.mail_cliente.focus()
    return "0";}
    
document.formAgregarCliente.submit()
}

function Validar_form_Actualizar_Cliente(){ //esta funcion validara el formulario de ingreso de clientes a la base de datos


var nombre=document.formDetalleCliente.nombre_cliente.value
var direccion=document.formDetalleCliente.direccion_cliente.value
var fono=document.formDetalleCliente.fono_cliente.value
var mail=document.formDetalleCliente.mail_cliente.value


//Validad si los campos han sido enviados vacios
if (nombre=="" && direccion=="" && fono=="" && mail==""){
    alert("Debe llenar todos los campos")
    document.formDetalleCliente.nombre_cliente.focus()
    return "0";}

    if (nombre==""){
    alert("Debe ingresar el Nombre del cliente")
    document.formDetalleCliente.nombre_cliente.focus()
    return "0";}

    if (direccion==""){
    alert("Debe ingresar la Dirección del cliente")
    document.formDetalleCliente.direccion_cliente.focus()
    return "0";}

    if (fono==""){
    alert("Debe ingresar el Telefono del cliente")
    document.formDetalleCliente.fono_cliente.focus()
    return "0";}

    if (mail==""){
    alert("Debe ingresar el Mail del cliente")
    document.formDetalleCliente.mail_cliente.focus()
    return "0";}

    //se valida el formato de correo electronico
	 expr_mail = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/
    if ( !expr_mail.test(mail) ){
        alert("Error: La dirección de correo " + mail + " es incorrecta.")
        document.formDetalleCliente.mail_cliente.focus()
    return "0";}
   
    	//se pide confirmacion antes de actualizar los datos de un cliente
    	if(confirm('¿Esta seguro de guardar los cambios?')){

    		document.formDetalleCliente.submit()
    	}else{
    		return false;
    	}

}

function Eliminar_Cliente(){

	//se pide confirmacion antes de actualizar los datos de un cliente
    	if(confirm('¿Esta seguro que desea eliminar al cliente?')){

    		document.formEliminarCliente.submit()
    	}else{
    		return false;
    	}
}