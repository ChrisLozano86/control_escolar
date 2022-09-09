$(function(){ 
    $.validator.addMethod('alfaNumAcen', function(value, element){
        return this.optional(element) || /^[a-zA-ZÀ-ÿ-0-9_\u00f1\u00d1]+(\s*[a-zA-ZÀ-ÿ-0-9_\u00f1\u00d1]*)*[a-zA-ZÀ-ÿ-0-9_\u00f1\u00d1]+$/.test(value);
    }, "Ingrese solo letras y/o números");  
    
    $(document).ready(function() {
        $("#frmUsuario").validate({
            rules: {
                nombre: {
                    required: true,
                    alfaNumAcen: true,
                    minlength: 5                
                },
                email: {
                    required: true,
                    email: true                
                },
                password: {
                    required: true,
                    minlength: 5
                },
                estatus: {
                    required: true
                },
                privilegios: {
                    required: true
                },
            },
            messages: {
                nombre: {
                    required: "Ingrese un nombre",                    
                    minlength: "El nombre debe tener al menos 5 letras"               
                },
                email: {
                    required: "Ingrese un email",
                    email: "Ingresa un email con el formato miemail@email.com"                
                },
                password: {
                    required: "Ingrese una contraseña",
                    minlength: "La contraseña debe tener al menos 5 caracteres"
                },
                estatus: {
                    required: "Seleccione un estatus"
                },
                privilegios: {
                    required: "Seleccione un privilegio"
                },
            }        
        });  
     });
});