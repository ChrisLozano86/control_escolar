$(document).ready(function() {
    $("#frmPeriodo").validate({
        rules: {
            mesInicio: {
                required: true                              
            },
            anioInicio: {
                required: true,
                range: [1992, 2050]               
            },
            mesFinal: {
                required: true                
            },
            anioFinal: {
                required: true,
                range: [1992, 2050]
            },            
        },
        messages: {
            mesInicio: {
                required: "Seleccione un mes"                            
            },
            anioInicio: {
                required: "Ingrese el año de inicio",
                range: "Ingrese un año entre 1992 y 2050"                               
            },
            mesFinal: {
                required: "Seleccione un mes"                            
            },
            anioFinal: {
                required: "Ingrese el año de fin",
                range: "Ingrese un año entre 1992 y 2050"             
            },
        }        
    });  
 });