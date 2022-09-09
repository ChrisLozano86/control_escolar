// EXCEL DINÁMICO -- Sirve para palomear las demás opciones cuando se selecciona datos escolares y/o personales
function comprobarDatosEsco(obj){   
    if (obj.checked){
        document.getElementById('checNomCompleto').checked = "true";
        document.getElementById('checNumFicha').checked = "true";
        document.getElementById('checNumCtrl').checked = "true";
        document.getElementById('checEst').checked = "true";
        document.getElementById('checRepetidor').checked = "true";
        document.getElementById('checEspe').checked = "true";
        document.getElementById('checClaveEspe').checked = "true";
        document.getElementById('checSem').checked = "true";
        document.getElementById('checGrup').checked = "true";
        document.getElementById('checTurn').checked = "true";
        document.getElementById('checGeneracion').checked = "true";
        document.getElementById('checPeriodoEs').checked = "true";
        document.getElementById('checExtracurri').checked = "true";
        document.getElementById('checBecas').checked = "true";
        document.getElementById('checSurems').checked = "true";
        document.getElementById('checFechaBaja').checked = "true";
        document.getElementById('checCausaBaja').checked = "true";
        document.getElementById('checClaveCecy').checked = "true";
        document.getElementById('checPrope').checked = "true";
        document.getElementById('checSecun').checked = "true";        
    }else{
        document.getElementById('checNomCompleto').checked = "";
        document.getElementById('checNumFicha').checked = "";
        document.getElementById('checNumCtrl').checked = "";
        document.getElementById('checEst').checked = "";
        document.getElementById('checRepetidor').checked = "";
        document.getElementById('checEspe').checked = "";
        document.getElementById('checClaveEspe').checked = "";
        document.getElementById('checSem').checked = "";
        document.getElementById('checGrup').checked = "";
        document.getElementById('checTurn').checked = "";
        document.getElementById('checGeneracion').checked = "";
        document.getElementById('checPeriodoEs').checked = "";
        document.getElementById('checExtracurri').checked = "";
        document.getElementById('checBecas').checked = "";
        document.getElementById('checSurems').checked = "";
        document.getElementById('checFechaBaja').checked = "";
        document.getElementById('checCausaBaja').checked = "";
        document.getElementById('checClaveCecy').checked = "";
        document.getElementById('checPrope').checked = "";
        document.getElementById('checSecun').checked = "";
    }
  }

function comprobarDatosPerso(obj){   
    if (obj.checked){
        document.getElementById('checCurp').checked = "true";
        document.getElementById('checTelAlum').checked = "true";
        document.getElementById('checSexo').checked = "true";
        document.getElementById('checTs').checked = "true";
        document.getElementById('checCuestSalud').checked = "true";
        document.getElementById('checLugarNac').checked = "true";
        document.getElementById('checFechaNac').checked = "true";
        document.getElementById('checEmails').checked = "true";
        document.getElementById('checNomTutor').checked = "true";
        document.getElementById('checTelTutor').checked = "true";
        document.getElementById('checDom').checked = "true";       
    }else{
        document.getElementById('checCurp').checked = "";
        document.getElementById('checTelAlum').checked = "";
        document.getElementById('checSexo').checked = "";
        document.getElementById('checTs').checked = "";
        document.getElementById('checCuestSalud').checked = "";
        document.getElementById('checLugarNac').checked = "";
        document.getElementById('checFechaNac').checked = "";
        document.getElementById('checEmails').checked = "";
        document.getElementById('checNomTutor').checked = "";
        document.getElementById('checTelTutor').checked = "";
        document.getElementById('checDom').checked = "";
    }
}