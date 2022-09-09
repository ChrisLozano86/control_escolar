function isValidDate(day,month,year){
    var dteDate; 
    month=month-1;    
    dteDate=new Date(year,month,day); 
    return ((day==dteDate.getDate()) && (month==dteDate.getMonth()) && (year==dteDate.getFullYear()));
  }
 
  function validate_fecha(fecha){
    var patron=new RegExp("^(19|20)+([0-9]{2})([-])([0-9]{1,2})([-])([0-9]{1,2})$");
    if(fecha.search(patron)==0){
      var values=fecha.split("-");
      if(isValidDate(values[2],values[1],values[0])){
        return true;
      }
    }
    return false;
  }
 
  function calcularEdad(){
    var fecha=document.getElementById("fechaNac").value;
    if(validate_fecha(fecha)==true){
      var values=fecha.split("-");
      var dia = values[2];
      var mes = values[1];
      var ano = values[0];
  
      var fecha_hoy = new Date();
      var ahora_ano = fecha_hoy.getYear();
      var ahora_mes = fecha_hoy.getMonth()+1;
      var ahora_dia = fecha_hoy.getDate();
  
      var edad = (ahora_ano + 1900) - ano;
        if ( ahora_mes < mes ){
          edad--;
        }
        if ((mes == ahora_mes) && (ahora_dia < dia)){
          edad--;
        }
        if (edad > 1900){
          edad -= 1900;
        } 
        document.getElementById("edad").value=""+edad+" años";
      }else{
        document.getElementById("edad").value="Edad";
      }
  }
  window.onload=calcularEdad();