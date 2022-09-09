// EXCEL DINÁMICO -- SIRVE PARA FILTRAR LOS CAMPOS QUE TENDRÁ EL REPORTE DE EXCEL
function comprobar(){ 
    datosEscolares=""; nomCompleto=""; numFicha=""; numCtrl=""; estatus=""; repetidor=""; semestre=""; grupo=""; turno=""; espe=""; claveEspe=""; generacion=""; periodo=""; extracurri=""; becas=""; surems=""; fechaBaja=""; causaBaja=""; claveCecy=""; propes=""; datosSecun="";
    datosPersonales=""; curp=""; telAlumno=""; sexo=""; ts=""; cuestSalud=""; lugarNac=""; fechaNac=""; emails=""; nomTutor=""; telTutor=""; domicilio=""; 
    //DATOS ESCOLARES
    if ((document.getElementById('checNomCompleto').checked == "") && (document.getElementById('checNumFicha').checked == "") && (document.getElementById('checNumCtrl').checked == "") && (document.getElementById('checEst').checked == "") 
            && (document.getElementById('checRepetidor').checked == "") && (document.getElementById('checSem').checked == "") && (document.getElementById('checGrup').checked == "") && (document.getElementById('checTurn').checked == "") && (document.getElementById('checEspe').checked == "")
            && (document.getElementById('checClaveEspe').checked == "") && (document.getElementById('checGeneracion').checked == "") && (document.getElementById('checPeriodoEs').checked == "") && (document.getElementById('checExtracurri').checked == "") && (document.getElementById('checBecas').checked == "") && (document.getElementById('checSurems').checked == "") 
            && (document.getElementById('checFechaBaja').checked == "") && (document.getElementById('checCausaBaja').checked == "") && (document.getElementById('checClaveCecy').checked == "") && (document.getElementById('checPrope').checked == "") && (document.getElementById('checSecun').checked == "") && (document.getElementById('checCurp').checked == "") && (document.getElementById('checTelAlum').checked == "")
            && (document.getElementById('checSexo').checked == "") && (document.getElementById('checTs').checked == "") && (document.getElementById('checCuestSalud').checked == "") && (document.getElementById('checLugarNac').checked == "") && (document.getElementById('checFechaNac').checked == "") && (document.getElementById('checEmails').checked == "") && (document.getElementById('checNomTutor').checked == "") && (document.getElementById('checTelTutor').checked == "")
            && (document.getElementById('checDom').checked == "")){
                alert("Seleccione al menos un campo");
    }
    if (document.getElementById('checDatosEscolares').checked){
        document.getElementById("MODAL_NomCompleto").value=" apePaterno, apeMaterno, nomAlumno";
        document.getElementById("MODAL_NumFicha").value=", ficha";
        document.getElementById("MODAL_NumCtrl").value=", numControl";
        document.getElementById("MODAL_Estatus").value=", nomEstatus";
        document.getElementById("MODAL_Repetidor").value=", repetidor";  
        document.getElementById("MODAL_Semestre").value=", nomSemestre";
        document.getElementById("MODAL_Grupo").value=" letra";
        document.getElementById("MODAL_Turno").value=" nomTurno";
        document.getElementById("MODAL_Espe").value=" nomEspe"; 
        document.getElementById("MODAL_ClaveEspe").value=" b.claveEspe";
        document.getElementById("MODAL_Gene").value=" ingreso, egreso";
        document.getElementById("MODAL_Period").value=" mesInicio, anioInicio, mesFinal, anioFinal";
        document.getElementById("MODAL_Extracurri").value=" nomExtra";
        document.getElementById("MODAL_Becas").value=" beca, beca2, beca3";
        document.getElementById("MODAL_Surems").value=" surems";
        document.getElementById("MODAL_FechaBaja").value= " fechaBaja";
        document.getElementById("MODAL_CausaBaja").value=" causaBaja";
        document.getElementById("MODAL_ClaveCecy").value=" claveCecyte";
        document.getElementById("MODAL_Prope").value= " j.nomPrope AS 'propedeutica1', k.nomPrope AS 'propedeutica2'";
        document.getElementById("MODAL_DatosSecun").value=" nomSecundaria, claveSecundaria, promeSecundaria, l.nomLugar AS 'estadoSecundaria' ";
        
        datosEscolares = " nomAlumno, apePaterno, apeMaterno, ficha, numControl, nomEstatus, repetidor, nomEspe, b.claveEspe, nomSemestre, letra, nomTurno, ingreso, egreso, mesInicio, anioInicio, mesFinal, anioFinal, nomExtra, beca, beca2, beca3, surems, fechaBaja, razon, claveCecyte, j.nomPrope AS 'propedeutica1', K.nomPrope AS 'propedeutica2', nomSecundaria, claveSecundaria, promeSecundaria, l.nomLugar AS 'estadoSecundaria' ";
        document.getElementById("MODAL_DatosEsc").value=datosEscolares; 
    }else{ // -if datos escolares
        if (document.getElementById('checNomCompleto').checked){
            nomCompleto = " apePaterno, apeMaterno, nomAlumno";
            document.getElementById("MODAL_NomCompleto").value=nomCompleto;
        } // -if nom completo
        if (document.getElementById('checNumFicha').checked){
            if (document.getElementById('checNomCompleto').checked == ""){
                numFicha = " ficha";
                document.getElementById("MODAL_NumFicha").value=numFicha; 
            }else{        
                numFicha = ", ficha";
                document.getElementById("MODAL_NumFicha").value=numFicha;
            }
        }// -if num ficha
        if (document.getElementById('checNumCtrl').checked){
            if ((document.getElementById('checNomCompleto').checked == "") && (document.getElementById('checNumFicha').checked == "")){
                numCtrl = " numControl";
                document.getElementById("MODAL_NumCtrl").value=numCtrl; 
            }else{        
                numCtrl = ", numControl";
                document.getElementById("MODAL_NumCtrl").value=numCtrl;
            }
        } // -if num control
        if (document.getElementById('checEst').checked){
            if ((document.getElementById('checNomCompleto').checked == "") && (document.getElementById('checNumFicha').checked == "") && (document.getElementById('checNumCtrl').checked == "")){
                estatus = " nomEstatus";
                document.getElementById("MODAL_Estatus").value=estatus; 
            }else{        
                estatus = ", nomEstatus";
                document.getElementById("MODAL_Estatus").value=estatus;
            }
        } // -if estatus
        if (document.getElementById('checRepetidor').checked){
            if ((document.getElementById('checNomCompleto').checked == "") && (document.getElementById('checNumFicha').checked == "") && (document.getElementById('checNumCtrl').checked == "") && (document.getElementById('checEstatus').checked == "")){
                repetidor = " repetidor";
                document.getElementById("MODAL_Repetidor").value=repetidor; 
            }else{        
                repetidor = ", repetidor";
                document.getElementById("MODAL_Repetidor").value=repetidor;
            }
        } // -if repetidor
        if (document.getElementById('checSem').checked){
            if ((document.getElementById('checNomCompleto').checked == "") && (document.getElementById('checNumFicha').checked == "") && (document.getElementById('checNumCtrl').checked == "") && (document.getElementById('checEst').checked == "") 
            && (document.getElementById('checRepetidor').checked == "")){
                semestre = " nomSemestre";
                document.getElementById("MODAL_Semestre").value=semestre; 
            }else{        
                semestre = ", nomSemestre";
                document.getElementById("MODAL_Semestre").value=semestre;
            }
        } // -if semestre
        if (document.getElementById('checGrup').checked){
            if ((document.getElementById('checNomCompleto').checked == "") && (document.getElementById('checNumFicha').checked == "") && (document.getElementById('checNumCtrl').checked == "") && (document.getElementById('checEst').checked == "") 
            && (document.getElementById('checRepetidor').checked == "")  && (document.getElementById('checSem').checked == "")){
                grupo = " letra";
                document.getElementById("MODAL_Grupo").value=grupo; 
            }else{        
                grupo = ", letra";
                document.getElementById("MODAL_Grupo").value=grupo;
            }
        } // -if grupo
        if (document.getElementById('checTurn').checked){
            if ((document.getElementById('checNomCompleto').checked == "") && (document.getElementById('checNumFicha').checked == "") && (document.getElementById('checNumCtrl').checked == "") && (document.getElementById('checEst').checked == "") 
            && (document.getElementById('checRepetidor').checked == "")  && (document.getElementById('checSem').checked == "") && (document.getElementById('checGrup').checked == "")){
                turno = " nomTurno";
                document.getElementById("MODAL_Turno").value=turno; 
            }else{        
                turno = ", nomTurno";
                document.getElementById("MODAL_Turno").value=turno;
            }
        } // -if turno
        if (document.getElementById('checEspe').checked){
            if ((document.getElementById('checNomCompleto').checked == "") && (document.getElementById('checNumFicha').checked == "") && (document.getElementById('checNumCtrl').checked == "") && (document.getElementById('checEst').checked == "") 
            && (document.getElementById('checRepetidor').checked == "")  && (document.getElementById('checSem').checked == "") && (document.getElementById('checGrup').checked == "") && (document.getElementById('checTurn').checked == "")){
                espe = " nomEspe";
                document.getElementById("MODAL_Espe").value=espe; 
            }else{        
                espe = ", nomEspe";
                document.getElementById("MODAL_Espe").value=espe;
            }
        } // -if especialidad
        if (document.getElementById('checClaveEspe').checked){
            if ((document.getElementById('checNomCompleto').checked == "") && (document.getElementById('checNumFicha').checked == "") && (document.getElementById('checNumCtrl').checked == "") && (document.getElementById('checEst').checked == "") 
            && (document.getElementById('checRepetidor').checked == "")  && (document.getElementById('checSem').checked == "") && (document.getElementById('checGrup').checked == "") && (document.getElementById('checTurn').checked == "") && (document.getElementById('checEspe').checked == "")){
                claveEspe = " b.claveEspe";
                document.getElementById("MODAL_ClaveEspe").value=claveEspe; 
            }else{        
                claveEspe = ", b.claveEspe";
                document.getElementById("MODAL_ClaveEspe").value=claveEspe;
            }
        } // -if clave especialidad
        if (document.getElementById('checGeneracion').checked){
            if ((document.getElementById('checNomCompleto').checked == "") && (document.getElementById('checNumFicha').checked == "") && (document.getElementById('checNumCtrl').checked == "") && (document.getElementById('checEst').checked == "") 
            && (document.getElementById('checRepetidor').checked == "")  && (document.getElementById('checSem').checked == "") && (document.getElementById('checGrup').checked == "") && (document.getElementById('checTurn').checked == "") && (document.getElementById('checEspe').checked == "")
            && (document.getElementById('checClaveEspe').checked == "")){
                generacion = " ingreso, egreso";
                document.getElementById("MODAL_Gene").value=generacion; 
            }else{        
                generacion = ", ingreso, egreso";
                document.getElementById("MODAL_Gene").value=generacion;
            }
        } // -if generación
        if (document.getElementById('checPeriodoEs').checked){
            if ((document.getElementById('checNomCompleto').checked == "") && (document.getElementById('checNumFicha').checked == "") && (document.getElementById('checNumCtrl').checked == "") && (document.getElementById('checEst').checked == "") 
            && (document.getElementById('checRepetidor').checked == "")  && (document.getElementById('checSem').checked == "") && (document.getElementById('checGrup').checked == "") && (document.getElementById('checTurn').checked == "") && (document.getElementById('checEspe').checked == "")
            && (document.getElementById('checClaveEspe').checked == "") && (document.getElementById('checGeneracion').checked == "")){
                periodo = " mesInicio, anioInicio, mesFinal, anioFinal";
                document.getElementById("MODAL_Period").value=periodo; 
            }else{        
                periodo = ", mesInicio, anioInicio, mesFinal, anioFinal";
                document.getElementById("MODAL_Period").value=periodo;
            }
        } // -if periodo escolar
        if (document.getElementById('checExtracurri').checked){
            if ((document.getElementById('checNomCompleto').checked == "") && (document.getElementById('checNumFicha').checked == "") && (document.getElementById('checNumCtrl').checked == "") && (document.getElementById('checEst').checked == "") 
            && (document.getElementById('checRepetidor').checked == "")  && (document.getElementById('checSem').checked == "") && (document.getElementById('checGrup').checked == "") && (document.getElementById('checTurn').checked == "") && (document.getElementById('checEspe').checked == "")
            && (document.getElementById('checClaveEspe').checked == "") && (document.getElementById('checGeneracion').checked == "") && (document.getElementById('checPeriodoEs').checked == "")){
                extracurri = " nomExtra";
                document.getElementById("MODAL_Extracurri").value=extracurri; 
            }else{        
                extracurri = ", nomExtra";
                document.getElementById("MODAL_Extracurri").value=extracurri;
            }
        } // -if extracurricular
        if (document.getElementById('checBecas').checked){
            if ((document.getElementById('checNomCompleto').checked == "") && (document.getElementById('checNumFicha').checked == "") && (document.getElementById('checNumCtrl').checked == "") && (document.getElementById('checEst').checked == "") 
            && (document.getElementById('checRepetidor').checked == "")  && (document.getElementById('checSem').checked == "") && (document.getElementById('checGrup').checked == "") && (document.getElementById('checTurn').checked == "") && (document.getElementById('checEspe').checked == "")
            && (document.getElementById('checClaveEspe').checked == "") && (document.getElementById('checGeneracion').checked == "") && (document.getElementById('checPeriodoEs').checked == "") && (document.getElementById('checExtracurri').checked == "")){
                becas = " beca, beca2, beca3";
                document.getElementById("MODAL_Becas").value=becas; 
            }else{        
                becas = ", beca, beca2, beca3";
                document.getElementById("MODAL_Becas").value=becas;
            }
        } // -if becas
        if (document.getElementById('checSurems').checked){
            if ((document.getElementById('checNomCompleto').checked == "") && (document.getElementById('checNumFicha').checked == "") && (document.getElementById('checNumCtrl').checked == "") && (document.getElementById('checEst').checked == "") 
            && (document.getElementById('checRepetidor').checked == "")  && (document.getElementById('checSem').checked == "") && (document.getElementById('checGrup').checked == "") && (document.getElementById('checTurn').checked == "") && (document.getElementById('checEspe').checked == "")
            && (document.getElementById('checClaveEspe').checked == "") && (document.getElementById('checGeneracion').checked == "") && (document.getElementById('checPeriodoEs').checked == "") && (document.getElementById('checExtracurri').checked == "") && (document.getElementById('checBecas').checked == "")){
                surems = " surems";
                document.getElementById("MODAL_Surems").value=surems; 
            }else{        
                surems = ", surems";
                document.getElementById("MODAL_Surems").value=surems;
            }
        } // -if surems
        if (document.getElementById('checFechaBaja').checked){
            if ((document.getElementById('checNomCompleto').checked == "") && (document.getElementById('checNumFicha').checked == "") && (document.getElementById('checNumCtrl').checked == "") && (document.getElementById('checEst').checked == "") 
            && (document.getElementById('checRepetidor').checked == "")  && (document.getElementById('checSem').checked == "") && (document.getElementById('checGrup').checked == "") && (document.getElementById('checTurn').checked == "") && (document.getElementById('checEspe').checked == "")
            && (document.getElementById('checClaveEspe').checked == "") && (document.getElementById('checGeneracion').checked == "") && (document.getElementById('checPeriodoEs').checked == "") && (document.getElementById('checExtracurri').checked == "") && (document.getElementById('checBecas').checked == "") && (document.getElementById('checSurems').checked == "")){
                fechaBaja = " fechaBaja";
                document.getElementById("MODAL_FechaBaja").value=fechaBaja; 
            }else{        
                fechaBaja = ", fechaBaja";
                document.getElementById("MODAL_FechaBaja").value=fechaBaja;
            }
        } // -if fecha baja
        if (document.getElementById('checCausaBaja').checked){
            if ((document.getElementById('checNomCompleto').checked == "") && (document.getElementById('checNumFicha').checked == "") && (document.getElementById('checNumCtrl').checked == "") && (document.getElementById('checEst').checked == "") 
            && (document.getElementById('checRepetidor').checked == "")  && (document.getElementById('checSem').checked == "") && (document.getElementById('checGrup').checked == "") && (document.getElementById('checTurn').checked == "") && (document.getElementById('checEspe').checked == "")
            && (document.getElementById('checClaveEspe').checked == "") && (document.getElementById('checGeneracion').checked == "") && (document.getElementById('checPeriodoEs').checked == "") && (document.getElementById('checExtracurri').checked == "") && (document.getElementById('checBecas').checked == "") && (document.getElementById('checSurems').checked == "") 
            && (document.getElementById('checFechaBaja').checked == "")){
                causaBaja = " razon";
                document.getElementById("MODAL_CausaBaja").value=causaBaja; 
            }else{        
                causaBaja = ", razon";
                document.getElementById("MODAL_CausaBaja").value=causaBaja;
            }
        } // -if causa baja
        if (document.getElementById('checClaveCecy').checked){
            if ((document.getElementById('checNomCompleto').checked == "") && (document.getElementById('checNumFicha').checked == "") && (document.getElementById('checNumCtrl').checked == "") && (document.getElementById('checEst').checked == "") 
            && (document.getElementById('checRepetidor').checked == "") && (document.getElementById('checSem').checked == "") && (document.getElementById('checGrup').checked == "") && (document.getElementById('checTurn').checked == "") && (document.getElementById('checEspe').checked == "")
            && (document.getElementById('checClaveEspe').checked == "") && (document.getElementById('checGeneracion').checked == "") && (document.getElementById('checPeriodoEs').checked == "") && (document.getElementById('checExtracurri').checked == "") && (document.getElementById('checBecas').checked == "") && (document.getElementById('checSurems').checked == "") 
            && (document.getElementById('checFechaBaja').checked == "") && (document.getElementById('checCausaBaja').checked == "")){
                claveCecy = " claveCecyte";
                document.getElementById("MODAL_ClaveCecy").value=claveCecy; 
            }else{        
                claveCecy = ", claveCecyte";
                document.getElementById("MODAL_ClaveCecy").value=claveCecy;
            }
        } // -if clave cecy
        if (document.getElementById('checPrope').checked){
            if ((document.getElementById('checNomCompleto').checked == "") && (document.getElementById('checNumFicha').checked == "") && (document.getElementById('checNumCtrl').checked == "") && (document.getElementById('checEst').checked == "") 
            && (document.getElementById('checRepetidor').checked == "") && (document.getElementById('checSem').checked == "") && (document.getElementById('checGrup').checked == "") && (document.getElementById('checTurn').checked == "") && (document.getElementById('checEspe').checked == "")
            && (document.getElementById('checClaveEspe').checked == "") && (document.getElementById('checGeneracion').checked == "") && (document.getElementById('checPeriodoEs').checked == "") && (document.getElementById('checExtracurri').checked == "") && (document.getElementById('checBecas').checked == "") && (document.getElementById('checSurems').checked == "") 
            && (document.getElementById('checFechaBaja').checked == "") && (document.getElementById('checCausaBaja').checked == "") && (document.getElementById('checClaveCecy').checked == "")){
                propes = " j.nomPrope AS 'propedeutica1', k.nomPrope AS 'propedeutica2'";
                document.getElementById("MODAL_Prope").value=propes; 
            }else{        
                propes = ", j.nomPrope AS 'propedeutica1', k.nomPrope AS 'propedeutica2'";
                document.getElementById("MODAL_Prope").value=propes;
            }
        } // -if propedeúticas
        if (document.getElementById('checSecun').checked){
            if ((document.getElementById('checNomCompleto').checked == "") && (document.getElementById('checNumFicha').checked == "") && (document.getElementById('checNumCtrl').checked == "") && (document.getElementById('checEst').checked == "") 
            && (document.getElementById('checRepetidor').checked == "") && (document.getElementById('checSem').checked == "") && (document.getElementById('checGrup').checked == "") && (document.getElementById('checTurn').checked == "") && (document.getElementById('checEspe').checked == "")
            && (document.getElementById('checClaveEspe').checked == "") && (document.getElementById('checGeneracion').checked == "") && (document.getElementById('checPeriodoEs').checked == "") && (document.getElementById('checExtracurri').checked == "") && (document.getElementById('checBecas').checked == "") && (document.getElementById('checSurems').checked == "") 
            && (document.getElementById('checFechaBaja').checked == "") && (document.getElementById('checCausaBaja').checked == "") && (document.getElementById('checClaveCecy').checked == "") && (document.getElementById('checPrope').checked == "")){
                datosSecun = " nomSecundaria, claveSecundaria, promeSecundaria, l.nomLugar AS 'estadoSecundaria' ";
                document.getElementById("MODAL_DatosSecun").value=datosSecun; 
            }else{        
                datosSecun = ", nomSecundaria, claveSecundaria, promeSecundaria, l.nomLugar AS 'estadoSecundaria' ";
                document.getElementById("MODAL_DatosSecun").value=datosSecun;
            }
        } // -if datos secundaria        
        datosEscolares = nomCompleto+numFicha+numCtrl+estatus+repetidor+semestre+grupo+turno+espe+claveEspe+generacion+periodo+extracurri+becas+surems+fechaBaja+causaBaja+claveCecy+propes+datosSecun;
        document.getElementById("MODAL_DatosEsc").value=datosEscolares;
    } // fin del else del if de datos escolares
    

    // DATOS PERSONALES
    if (document.getElementById('checDatosPersonales').checked){     
        document.getElementById("MODAL_Curp").value=", curp";
        document.getElementById("MODAL_TelAlumno").value= ", telAlumno";
        document.getElementById("MODAL_Sexo").value = ", sexo";
        document.getElementById("MODAL_TS").value = " m.nom AS 'ts'";
        document.getElementById("MODAL_CuestSalud").value= " cuestSalud";
        document.getElementById("MODAL_LugarNac").value= ", n.nomLugar AS 'lugarNac'";
        document.getElementById("MODAL_FechaNac").value=" fechaNac";
        document.getElementById("MODAL_Emails").value=" emailInsti, emailPerso";
        document.getElementById("MODAL_NomTutor").value=" nomTutor";
        document.getElementById("MODAL_TelTutor").value=" telTutor";
        document.getElementById("MODAL_Domicilio").value=", calle, numExt, numInt, colonia, cp, poblacion, municipio, p.nomLugar AS 'estadoDom'";
        
        datosPersonales = " curp, telAlumno, sexo, m.nom AS 'ts', cuestSalud, n.nomLugar AS 'lugarNac', fechaNac, emailInsti, emailPerso, nomTutor, telTutor, calle, numExt, numInt, colonia, cp, poblacion, municipio, p.nomLugar AS 'estadoDom' ";
        document.getElementById("MODAL_DatosPerso").value=datosPersonales; 
    }else{ // if datos personales
        if (document.getElementById('checCurp').checked){
            if ((document.getElementById('checNomCompleto').checked == "") && (document.getElementById('checNumFicha').checked == "") && (document.getElementById('checNumCtrl').checked == "") && (document.getElementById('checEst').checked == "") 
            && (document.getElementById('checRepetidor').checked == "") && (document.getElementById('checSem').checked == "") && (document.getElementById('checGrup').checked == "") && (document.getElementById('checTurn').checked == "") && (document.getElementById('checEspe').checked == "")
            && (document.getElementById('checClaveEspe').checked == "") && (document.getElementById('checGeneracion').checked == "") && (document.getElementById('checPeriodoEs').checked == "") && (document.getElementById('checExtracurri').checked == "") && (document.getElementById('checBecas').checked == "") && (document.getElementById('checSurems').checked == "") 
            && (document.getElementById('checFechaBaja').checked == "") && (document.getElementById('checCausaBaja').checked == "") && (document.getElementById('checClaveCecy').checked == "") && (document.getElementById('checPrope').checked == "") && (document.getElementById('checSecun').checked == "")){
                curp = " curp";
                document.getElementById("MODAL_Curp").value=curp; 
            }else{        
                curp = ", curp";
                document.getElementById("MODAL_Curp").value=curp;
            }
        } // -if curp 
        if (document.getElementById('checTelAlum').checked){
            if ((document.getElementById('checNomCompleto').checked == "") && (document.getElementById('checNumFicha').checked == "") && (document.getElementById('checNumCtrl').checked == "") && (document.getElementById('checEst').checked == "") 
            && (document.getElementById('checRepetidor').checked == "") && (document.getElementById('checSem').checked == "") && (document.getElementById('checGrup').checked == "") && (document.getElementById('checTurn').checked == "") && (document.getElementById('checEspe').checked == "")
            && (document.getElementById('checClaveEspe').checked == "") && (document.getElementById('checGeneracion').checked == "") && (document.getElementById('checPeriodoEs').checked == "") && (document.getElementById('checExtracurri').checked == "") && (document.getElementById('checBecas').checked == "") && (document.getElementById('checSurems').checked == "") 
            && (document.getElementById('checFechaBaja').checked == "") && (document.getElementById('checCausaBaja').checked == "") && (document.getElementById('checClaveCecy').checked == "") && (document.getElementById('checPrope').checked == "") && (document.getElementById('checSecun').checked == "") && (document.getElementById('checCurp').checked == "")){
                telAlumno = " telAlumno";
                document.getElementById("MODAL_TelAlumno").value=telAlumno; 
            }else{        
                telAlumno = ", telAlumno";
                document.getElementById("MODAL_TelAlumno").value=telAlumno;
            }
        } // -if tel alumno
        if (document.getElementById('checSexo').checked){
            if ((document.getElementById('checNomCompleto').checked == "") && (document.getElementById('checNumFicha').checked == "") && (document.getElementById('checNumCtrl').checked == "") && (document.getElementById('checEst').checked == "") 
            && (document.getElementById('checRepetidor').checked == "") && (document.getElementById('checSem').checked == "") && (document.getElementById('checGrup').checked == "") && (document.getElementById('checTurn').checked == "") && (document.getElementById('checEspe').checked == "")
            && (document.getElementById('checClaveEspe').checked == "") && (document.getElementById('checGeneracion').checked == "") && (document.getElementById('checPeriodoEs').checked == "") && (document.getElementById('checExtracurri').checked == "") && (document.getElementById('checBecas').checked == "") && (document.getElementById('checSurems').checked == "") 
            && (document.getElementById('checFechaBaja').checked == "") && (document.getElementById('checCausaBaja').checked == "") && (document.getElementById('checClaveCecy').checked == "") && (document.getElementById('checPrope').checked == "") && (document.getElementById('checSecun').checked == "") && (document.getElementById('checCurp').checked == "") && (document.getElementById('checTelAlum').checked == "")){
                sexo = " sexo";
                document.getElementById("MODAL_Sexo").value=sexo; 
            }else{        
                sexo = ", sexo";
                document.getElementById("MODAL_Sexo").value=sexo;
            }
        } // -if sexo
        if (document.getElementById('checTs').checked){
            if ((document.getElementById('checNomCompleto').checked == "") && (document.getElementById('checNumFicha').checked == "") && (document.getElementById('checNumCtrl').checked == "") && (document.getElementById('checEst').checked == "") 
            && (document.getElementById('checRepetidor').checked == "") && (document.getElementById('checSem').checked == "") && (document.getElementById('checGrup').checked == "") && (document.getElementById('checTurn').checked == "") && (document.getElementById('checEspe').checked == "")
            && (document.getElementById('checClaveEspe').checked == "") && (document.getElementById('checGeneracion').checked == "") && (document.getElementById('checPeriodoEs').checked == "") && (document.getElementById('checExtracurri').checked == "") && (document.getElementById('checBecas').checked == "") && (document.getElementById('checSurems').checked == "") 
            && (document.getElementById('checFechaBaja').checked == "") && (document.getElementById('checCausaBaja').checked == "") && (document.getElementById('checClaveCecy').checked == "") && (document.getElementById('checPrope').checked == "") && (document.getElementById('checSecun').checked == "") && (document.getElementById('checCurp').checked == "") && (document.getElementById('checTelAlum').checked == "")
            && (document.getElementById('checSexo').checked == "")){
                ts = " m.nom AS 'ts'";
                document.getElementById("MODAL_TS").value=ts; 
            }else{        
                ts = ", m.nom AS 'ts'";
                document.getElementById("MODAL_TS").value=ts;
            }
        } // -if ts
        if (document.getElementById('checCuestSalud').checked){
            if ((document.getElementById('checNomCompleto').checked == "") && (document.getElementById('checNumFicha').checked == "") && (document.getElementById('checNumCtrl').checked == "") && (document.getElementById('checEst').checked == "") 
            && (document.getElementById('checRepetidor').checked == "") && (document.getElementById('checSem').checked == "") && (document.getElementById('checGrup').checked == "") && (document.getElementById('checTurn').checked == "") && (document.getElementById('checEspe').checked == "")
            && (document.getElementById('checClaveEspe').checked == "") && (document.getElementById('checGeneracion').checked == "") && (document.getElementById('checPeriodoEs').checked == "") && (document.getElementById('checExtracurri').checked == "") && (document.getElementById('checBecas').checked == "") && (document.getElementById('checSurems').checked == "") 
            && (document.getElementById('checFechaBaja').checked == "") && (document.getElementById('checCausaBaja').checked == "") && (document.getElementById('checClaveCecy').checked == "") && (document.getElementById('checPrope').checked == "") && (document.getElementById('checSecun').checked == "") && (document.getElementById('checCurp').checked == "") && (document.getElementById('checTelAlum').checked == "")
            && (document.getElementById('checSexo').checked == "") && (document.getElementById('checTs').checked == "")){
                cuestSalud = " cuestSalud";
                document.getElementById("MODAL_CuestSalud").value=cuestSalud; 
            }else{        
                cuestSalud = ", cuestSalud";
                document.getElementById("MODAL_CuestSalud").value=cuestSalud;
            }
        } // -if cuestiones de salud
        if (document.getElementById('checLugarNac').checked){
            if ((document.getElementById('checNomCompleto').checked == "") && (document.getElementById('checNumFicha').checked == "") && (document.getElementById('checNumCtrl').checked == "") && (document.getElementById('checEst').checked == "") 
            && (document.getElementById('checRepetidor').checked == "") && (document.getElementById('checSem').checked == "") && (document.getElementById('checGrup').checked == "") && (document.getElementById('checTurn').checked == "") && (document.getElementById('checEspe').checked == "")
            && (document.getElementById('checClaveEspe').checked == "") && (document.getElementById('checGeneracion').checked == "") && (document.getElementById('checPeriodoEs').checked == "") && (document.getElementById('checExtracurri').checked == "") && (document.getElementById('checBecas').checked == "") && (document.getElementById('checSurems').checked == "") 
            && (document.getElementById('checFechaBaja').checked == "") && (document.getElementById('checCausaBaja').checked == "") && (document.getElementById('checClaveCecy').checked == "") && (document.getElementById('checPrope').checked == "") && (document.getElementById('checSecun').checked == "") && (document.getElementById('checCurp').checked == "") && (document.getElementById('checTelAlum').checked == "")
            && (document.getElementById('checSexo').checked == "") && (document.getElementById('checTs').checked == "") && (document.getElementById('checCuestSalud').checked == "")){
                lugarNac = " n.nomLugar AS 'lugarNac'";
                document.getElementById("MODAL_LugarNac").value=lugarNac; 
            }else{        
                lugarNac = ", n.nomLugar AS 'lugarNac'";
                document.getElementById("MODAL_LugarNac").value=lugarNac;
            }
        } // -if lugar nac
        if (document.getElementById('checFechaNac').checked){
            if ((document.getElementById('checNomCompleto').checked == "") && (document.getElementById('checNumFicha').checked == "") && (document.getElementById('checNumCtrl').checked == "") && (document.getElementById('checEst').checked == "") 
            && (document.getElementById('checRepetidor').checked == "") && (document.getElementById('checSem').checked == "") && (document.getElementById('checGrup').checked == "") && (document.getElementById('checTurn').checked == "") && (document.getElementById('checEspe').checked == "")
            && (document.getElementById('checClaveEspe').checked == "") && (document.getElementById('checGeneracion').checked == "") && (document.getElementById('checPeriodoEs').checked == "") && (document.getElementById('checExtracurri').checked == "") && (document.getElementById('checBecas').checked == "") && (document.getElementById('checSurems').checked == "") 
            && (document.getElementById('checFechaBaja').checked == "") && (document.getElementById('checCausaBaja').checked == "") && (document.getElementById('checClaveCecy').checked == "") && (document.getElementById('checPrope').checked == "") && (document.getElementById('checSecun').checked == "") && (document.getElementById('checCurp').checked == "") && (document.getElementById('checTelAlum').checked == "")
            && (document.getElementById('checSexo').checked == "") && (document.getElementById('checTs').checked == "") && (document.getElementById('checCuestSalud').checked == "") && (document.getElementById('checLugarNac').checked == "")){
                fechaNac = " fechaNac";
                document.getElementById("MODAL_FechaNac").value=fechaNac; 
            }else{        
                fechaNac = ", fechaNac";
                document.getElementById("MODAL_FechaNac").value=fechaNac;
            }
        } // -if fecha nac
        if (document.getElementById('checEmails').checked){
            if ((document.getElementById('checNomCompleto').checked == "") && (document.getElementById('checNumFicha').checked == "") && (document.getElementById('checNumCtrl').checked == "") && (document.getElementById('checEst').checked == "") 
            && (document.getElementById('checRepetidor').checked == "") && (document.getElementById('checSem').checked == "") && (document.getElementById('checGrup').checked == "") && (document.getElementById('checTurn').checked == "") && (document.getElementById('checEspe').checked == "")
            && (document.getElementById('checClaveEspe').checked == "") && (document.getElementById('checGeneracion').checked == "") && (document.getElementById('checPeriodoEs').checked == "") && (document.getElementById('checExtracurri').checked == "") && (document.getElementById('checBecas').checked == "") && (document.getElementById('checSurems').checked == "") 
            && (document.getElementById('checFechaBaja').checked == "") && (document.getElementById('checCausaBaja').checked == "") && (document.getElementById('checClaveCecy').checked == "") && (document.getElementById('checPrope').checked == "") && (document.getElementById('checSecun').checked == "") && (document.getElementById('checCurp').checked == "") && (document.getElementById('checTelAlum').checked == "")
            && (document.getElementById('checSexo').checked == "") && (document.getElementById('checTs').checked == "") && (document.getElementById('checCuestSalud').checked == "") && (document.getElementById('checLugarNac').checked == "") && (document.getElementById('checFechaNac').checked == "")){
                emails = " emailInsti, emailPerso";
                document.getElementById("MODAL_Emails").value=emails; 
            }else{        
                emails = ", emailInsti, emailPerso";
                document.getElementById("MODAL_Emails").value=emails;
            }
        } // -if emails
        if (document.getElementById('checNomTutor').checked){
            if ((document.getElementById('checNomCompleto').checked == "") && (document.getElementById('checNumFicha').checked == "") && (document.getElementById('checNumCtrl').checked == "") && (document.getElementById('checEst').checked == "") 
            && (document.getElementById('checRepetidor').checked == "") && (document.getElementById('checSem').checked == "") && (document.getElementById('checGrup').checked == "") && (document.getElementById('checTurn').checked == "") && (document.getElementById('checEspe').checked == "")
            && (document.getElementById('checClaveEspe').checked == "") && (document.getElementById('checGeneracion').checked == "") && (document.getElementById('checPeriodoEs').checked == "") && (document.getElementById('checExtracurri').checked == "") && (document.getElementById('checBecas').checked == "") && (document.getElementById('checSurems').checked == "") 
            && (document.getElementById('checFechaBaja').checked == "") && (document.getElementById('checCausaBaja').checked == "") && (document.getElementById('checClaveCecy').checked == "") && (document.getElementById('checPrope').checked == "") && (document.getElementById('checSecun').checked == "") && (document.getElementById('checCurp').checked == "") && (document.getElementById('checTelAlum').checked == "")
            && (document.getElementById('checSexo').checked == "") && (document.getElementById('checTs').checked == "") && (document.getElementById('checCuestSalud').checked == "") && (document.getElementById('checLugarNac').checked == "") && (document.getElementById('checFechaNac').checked == "") && (document.getElementById('checEmails').checked == "")){
                nomTutor = " nomTutor";
                document.getElementById("MODAL_NomTutor").value=nomTutor; 
            }else{        
                nomTutor = ", nomTutor";
                document.getElementById("MODAL_NomTutor").value=nomTutor;
            }
        } // -if nom tutor
        if (document.getElementById('checTelTutor').checked){
            if ((document.getElementById('checNomCompleto').checked == "") && (document.getElementById('checNumFicha').checked == "") && (document.getElementById('checNumCtrl').checked == "") && (document.getElementById('checEst').checked == "") 
            && (document.getElementById('checRepetidor').checked == "") && (document.getElementById('checSem').checked == "") && (document.getElementById('checGrup').checked == "") && (document.getElementById('checTurn').checked == "") && (document.getElementById('checEspe').checked == "")
            && (document.getElementById('checClaveEspe').checked == "") && (document.getElementById('checGeneracion').checked == "") && (document.getElementById('checPeriodoEs').checked == "") && (document.getElementById('checExtracurri').checked == "") && (document.getElementById('checBecas').checked == "") && (document.getElementById('checSurems').checked == "") 
            && (document.getElementById('checFechaBaja').checked == "") && (document.getElementById('checCausaBaja').checked == "") && (document.getElementById('checClaveCecy').checked == "") && (document.getElementById('checPrope').checked == "") && (document.getElementById('checSecun').checked == "") && (document.getElementById('checCurp').checked == "") && (document.getElementById('checTelAlum').checked == "")
            && (document.getElementById('checSexo').checked == "") && (document.getElementById('checTs').checked == "") && (document.getElementById('checCuestSalud').checked == "") && (document.getElementById('checLugarNac').checked == "") && (document.getElementById('checFechaNac').checked == "") && (document.getElementById('checEmails').checked == "") && (document.getElementById('checNomTutor').checked == "")){
                telTutor = " telTutor";
                document.getElementById("MODAL_TelTutor").value=telTutor; 
            }else{        
                telTutor = ", telTutor";
                document.getElementById("MODAL_TelTutor").value=telTutor;
            }
        } // -if tel tutor
        if (document.getElementById('checDom').checked){
            if ((document.getElementById('checNomCompleto').checked == "") && (document.getElementById('checNumFicha').checked == "") && (document.getElementById('checNumCtrl').checked == "") && (document.getElementById('checEst').checked == "") 
            && (document.getElementById('checRepetidor').checked == "") && (document.getElementById('checSem').checked == "") && (document.getElementById('checGrup').checked == "") && (document.getElementById('checTurn').checked == "") && (document.getElementById('checEspe').checked == "")
            && (document.getElementById('checClaveEspe').checked == "") && (document.getElementById('checGeneracion').checked == "") && (document.getElementById('checPeriodoEs').checked == "") && (document.getElementById('checExtracurri').checked == "") && (document.getElementById('checBecas').checked == "") && (document.getElementById('checSurems').checked == "") 
            && (document.getElementById('checFechaBaja').checked == "") && (document.getElementById('checCausaBaja').checked == "") && (document.getElementById('checClaveCecy').checked == "") && (document.getElementById('checPrope').checked == "") && (document.getElementById('checSecun').checked == "") && (document.getElementById('checCurp').checked == "") && (document.getElementById('checTelAlum').checked == "")
            && (document.getElementById('checSexo').checked == "") && (document.getElementById('checTs').checked == "") && (document.getElementById('checCuestSalud').checked == "") && (document.getElementById('checLugarNac').checked == "") && (document.getElementById('checFechaNac').checked == "") && (document.getElementById('checEmails').checked == "") && (document.getElementById('checNomTutor').checked == "") && (document.getElementById('checTelTutor').checked == "")){
                domicilio = " calle, numExt, numInt, colonia, cp, poblacion, municipio, p.nomLugar AS 'estadoDom'";
                document.getElementById("MODAL_Domicilio").value=domicilio; 
            }else{        
                domicilio = ", calle, numExt, numInt, colonia, cp, poblacion, municipio, p.nomLugar AS 'estadoDom'";
                document.getElementById("MODAL_Domicilio").value=domicilio;
            }
        } // -if domicilio
        datosPersonales = curp+telAlumno+sexo+ts+cuestSalud+lugarNac+fechaNac+emails+nomTutor+telTutor+domicilio;
        document.getElementById("MODAL_DatosPerso").value=datosPersonales;
    } // fin del else del if datos personales

    campos = "alumnopk, " + datosEscolares + datosPersonales;
    document.getElementById("MODAL_CAMPOS").value=campos;
}  