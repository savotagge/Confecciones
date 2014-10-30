$(document).ready(function(){
        $("#productos").change(function(){ 
        $.post("carga_area.php", {id:$(this).val()},function(data){$("#valorUnit").val(data);})
        });
        })
        
        function fecha_automatica() {

                var f = new Date();
                document.formPedido.fechaPedido.value = f.getFullYear() + "-" + (f.getMonth() + 1) + "-" + f.getDate();
            }

        function Solo_Numerico(variable){
        Numer=parseInt(variable);
        if (isNaN(Numer)){
            return "";
        }
        return Numer;
    }

    function ValNumero(Control){
        Control.value=Solo_Numerico(Control.value);
    }



function valida_envia(){

if (document.formDetalle.productos.selectedIndex ==0){
                                                     alert("Debe seleccionar producto");
                                                     return false;
                                                     }else{
                                                           if(document.formDetalle.cantidad.value !=0){
                                                           document.formDetalle.submit();
                                                           return true;
                                                           }else{
                                                                 alert("Ingrese cantidad");
                                                                 return false;
                                                                 }
}
}

function valida_envia2(){

if (document.formPedido.pago.selectedIndex ==0){
                                                     alert("Debe seleccionar un medio de pago");
                                                     return false;
                                                     }else{
                                                           if(document.formPedido.fechaLimite.value !=0){
                                                           document.formPedido.submit();
                                                           return true;
                                                           }else{
                                                                 alert("Ingrese fecha limite");
                                                                 return false;
                                                                 }
}
}   

function validar(e){
 
  tecla = (document.all) ? e.keyCode : e.which;
  if (tecla==8) return true;
  tecla = String.fromCharCode(tecla)
  return /^[0-9\-]+$/.test(tecla);
}
