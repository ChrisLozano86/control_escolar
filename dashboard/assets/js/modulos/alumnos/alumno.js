$(function(){ 
    /*$.validator.addMethod('latinos', function(value, element){
        return this.optional(element) || /^[a-záéóóúàèìòùäëïöüñ\s]+$/i.test(value);
    }, "Ingrese solo letras");  */     
    $.validator.addMethod('alfaNumAcen', function(value, element){
        return this.optional(element) || /^[a-zA-ZÀ-ÿ-0-9_\u00f1\u00d1]+(\s*[a-zA-ZÀ-ÿ-0-9_\u00f1\u00d1]*)*[a-zA-ZÀ-ÿ-0-9_\u00f1\u00d1]+$/.test(value);
    }, "Ingrese solo letras y/o números");   
    $.validator.addMethod('letrasNumeros', function(value, element){
        return this.optional(element) || /^[a-zA-Z0-9_]+( [a-zA-Z0-9_]+)*$/.test(value); // Permite espacios entre caracteres
    }, "Rellene el campo solo con letras y/o números");    
    $.validator.addMethod('decimal', function(value, element) {
        return this.optional(element) || /^((\d+(\\.\d{0,1})?)|((\d*(\.\d{1,1}))))$/.test(value);
    }, "Ingrese un número con el formato 0.0");
    $.validator.addMethod('telefono', function(value, element) {
        return this.optional(element) || /^1?\d{10}$/.test(value);
      }, "Ingrese un número telefónico a 10 dígitos");
    $.validator.addMethod('folios', function(value, element) {
        return this.optional(element) || /^[A-Za-z][A-Za-z0-9]*$/.test(value); // acepta letras y números sin caractes esp
      }, "Ingrese el registro sin espacios y sin caracteres especiales");
    $.validator.addMethod('numeros', function(value, element) {
        return this.optional(element) || /^[0-9]{0,}$/.test(value); // Solo acepta números sin espacios ni caracteres
      }, "Ingrese solo números, sin espacios ni caracteres especiales"); 
    $.validator.addMethod('curp', function(value, element) {
        return this.optional(element) || /^([A-Z][AEIOUX][A-Z]{2}\d{2}(?:0[1-9]|1[0-2])(?:0[1-9]|[12]\d|3[01])[HM](?:AS|B[CS]|C[CLMSH]|D[FG]|G[TR]|HG|JC|M[CNS]|N[ETL]|OC|PL|Q[TR]|S[PLR]|T[CSL]|VZ|YN|ZS)[B-DF-HJ-NP-TV-Z]{3}[A-Z\d])(\d)$/.test(value);
      }, "Ingrese una CURP con formato válido");
    $.validator.addMethod('cp', function(value, element) {
        return this.optional(element) || /^[0-9]{5}$/.test(value);
      }, "El CP debe tener un formato válido (5 dígitos)");
    
    $(document).on('change','input[type="file"]',function(){
        var fileName = this.files[0].name;
        var fileSize = this.files[0].size;
    
        if(fileSize > 500000){
            alert('El archivo no debe superar los 500KB');
            this.value = '';
            this.files[0].name = '';
        }else{
            // recuperamos la extensión del archivo
            var ext = fileName.split('.').pop();
            
            // Convertimos en minúscula porque 
            // la extensión del archivo puede estar en mayúscula
            ext = ext.toLowerCase();
        
            // console.log(ext);
            switch (ext) {
                case 'jpg':
                case 'png': 
                case 'pdf': break;
                default:
                    alert('El archivo no tiene la extensión adecuada');
                    this.value = ''; // reset del valor
                    this.files[0].name = '';
            }
        }
    });

    $(document).ready(function() {
        $("#frmAlumno").validate({
            rules: {
                nomAlumno: {
                    required: true,
                    alfaNumAcen: true,
                    rangelength: [3, 50]                                    
                },
                apePaterno: {
                    required: true,
                    alfaNumAcen: true,
                    rangelength: [3, 50]               
                },
                apeMaterno: {
                    required: true,
                    alfaNumAcen: true,
                    rangelength: [3, 50]              
                },
                claveCecyte: {                                        
                    rangelength: [10, 10]                 
                },
                ficha: {
                    required: true,
                    numeros: true,
                    rangelength: [10, 10]
                },
                numControl: {
                    numeros: true,
                    rangelength: [14, 14]              
                },
                estatus: {
                    required: true                    
                },
                repetidor: {
                    required: true                    
                },
                especialidad: {
                    required: true                    
                },
                claveEspe: {
                    required: true                    
                },               
                ingreso: {                    
                    range: [1992, 2050]
                },
                egreso: {                    
                    range: [1992, 2050]
                },
                beca: {
                    rangelength: [5, 100]
                },
                nomSecundaria: {
                    required: true,
                    alfaNumAcen: true,
                    rangelength: [5, 200]
                },
                claveSecundaria: {
                    folios: true,
                    rangelength: [5, 30]
                },
                promeSecundaria: {
                    decimal: true,
                    range: [0, 10]                    
                },
                estadoSecundaria: {
                    required: true
                },
                surems: {
                    required: true,
                    numeros: true,
                    rangelength: [8, 8]
                },              
                curp: {
                    required: true,
                    curp: true
                },
                telAlumno:{
                    required: true,
                    telefono: true                    
                },
                sexo: {
                    required: true
                },
                ts: {
                    required: true
                },
                lugarNac: {
                    required: true
                },
                fechaNac: {
                    required: true
                },
                emailInsti: {
                    email: true
                },
                emailPerso: {
                    required: true,
                    email: true
                },
                nomTutor: {
                    required: true,
                    alfaNumAcen: true,
                    rangelength: [3, 200]                
                },
                telTutor:{
                    required: true,
                    telefono: true                    
                },
                calle: {
                    required: true,
                    alfaNumAcen: true,
                    rangelength: [3, 80]
                },
                numExt: {
                    required: true,
                    letrasNumeros: true,
                    rangelength: [1, 7]
                },
                numInt: {              
                    letrasNumeros: true,      
                    rangelength: [1, 7]
                },
                colonia: {
                    required: true,
                    alfaNumAcen: true,
                    rangelength: [3, 80]
                },
                cp: {
                    required: true,                    
                    cp: true
                },
                poblacion: {
                    required: true,
                    alfaNumAcen: true,
                    rangelength: [5, 80]
                },
                municipio: {
                    required: true
                },
                estadoDom: {
                    required: true
                },
            },
            messages: {
                nomAlumno: {
                    required: "Ingrese el nombre",                                        
                    rangelength: "El nombre debe tener entre 3 y 50 letras"              
                },                 
                apePaterno: {
                    required: "Ingrese el apellido paterno",
                    rangelength: "El apellido debe tener entre 3 y 50 letras"              
                },
                apeMaterno: {
                    required: "Ingrese el apellido materno",
                    rangelength: "El apellido debe tener entre 3 y 50 letras"             
                },
                claveCecyte: {                    
                    rangelength: "La clave debe ser de 10 letras"                 
                },
                ficha: {
                    required: "Ingrese el número de ficha",
                    rangelength: "El número de ficha debe ser 10 caracteres"
                },
                numControl: {
                    rangelength: "El número de control debe ser de 14 dígitos"            
                },
                estatus: {
                    required: "Seleccione un estatus"                  
                },
                repetidor: {
                    required: "Seleccione una opción"                    
                },
                especialidad: {
                    required: "Seleccione una especialidad"                    
                },
                claveEspe: {
                    required: "Seleccione la clave de la especialidad"                   
                },               
                ingreso: {                    
                    range: "El año de ingreso tiene que estar entre 1992 y 2050"
                },
                egreso: {                    
                    range: "El año de egreso tiene que estar entre 1992 y 2050"
                },
                beca: {
                    rangeLength: "El nombre de la beca debe tener entre 5 y 100 letras"
                },
                nomSecundaria: {
                    required: "Ingrese el nombre de la secundaria de procedencia",
                    rangelength: "El nombre de la secundaria debe tener entre 5 y 200 letras"
                },
                claveSecundaria: {
                    rangelength: "La clave de la secundaria debe tener entre 5 y 30 caracteres"
                },
                promeSecundaria: {
                    range: "El promedio de la secundaria debe estar entre 0 y 10"                    
                },
                estadoSecundaria: {
                    required: "Seleccione el estado donde se encuentra la secundaria de procedencia"
                },
                surems: {
                    required: "Ingrese el folio SUREMS",
                    rangelength: "El folio SUREMS debe ser de 8 dígitos"
                },              
                curp: {
                    required: "Ingrese la CURP"                    
                },
                telAlumno:{
                    required: "Ingrese el teléfono personal"                 
                },
                sexo: {
                    required: "Seleccione el sexo"
                },
                ts: {
                    required: "Seleccione el tipo sanguíneo"
                },
                lugarNac: {
                    required: "Seleccione el lugar de nacimiento"
                },
                fechaNac: {
                    required: "Ingrese la fecha de nacimiento"
                },
                emailInsti: {
                    email: "Ingresa un email con el formato miemail@email.com"
                },
                emailPerso: {
                    required: "Ingrese el email personal",
                    email: "Ingresa un email con el formato miemail@email.com"
                },
                nomTutor: {
                    required: "Ingrese el nombre del tutor",
                    rangelength: "El nombre del tutor debe tener entre 3 y 200 letras"                
                },
                telTutor:{
                    required: "Ingrese el teléfono del tutor"                
                },
                calle: {
                    required: "Ingrese el nombre de la calle",
                    rangelength: "El nombre de la calle debe tener entre 3 y 80 caracteres"
                },
                numExt: {
                    required: "Ingrese el número exterior",                    
                    rangelength: "El número exterior debe tener entre 1 y 7 caracteres"
                },
                numInt: {           
                    rangelength: "El número exterior debe tener entre 1 y 7 caracteres"
                },
                colonia: {
                    required: "Ingrese la colonia",                    
                    rangelength: "La colonia debe tener entre 3 y 80 caracteres"
                },
                cp: {
                    required: "Ingrese el CP"                    
                },
                poblacion: {
                    required: "Ingrese la población",                    
                    rangelength: "La población debe tener entre 5 y 80 caracteres"
                },
                municipio: {
                    required: "Elige el municipio"
                },
                estadoDom: {
                    required: "Elige el estado"
                },           
            }        
        });  
     });
});