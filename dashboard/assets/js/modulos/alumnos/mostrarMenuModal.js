// Funciona para mostrar y ocultar los campos para el actualizado masivo
function comprobarSemestre(obj){   
  if (obj.checked){
    document.getElementById('actualizarSemestre').style.display = "";
  }else{
    document.getElementById('actualizarSemestre').style.display = "none";
  }     
}

function comprobarPeriodo(obj){   
    if (obj.checked){
      document.getElementById('actualizarPeriodo').style.display = "";
    }else{
      document.getElementById('actualizarPeriodo').style.display = "none";
    }     
}

function comprobarGrupo(obj){   
    if (obj.checked){
      document.getElementById('actualizarGrupo').style.display = "";
    }else{
      document.getElementById('actualizarGrupo').style.display = "none";
    }     
}

function comprobarTurno(obj){   
    if (obj.checked){
      document.getElementById('actualizarTurno').style.display = "";
    }else{
      document.getElementById('actualizarTurno').style.display = "none";
    }     
}

function comprobarEstatus(obj){   
    if (obj.checked){
      document.getElementById('actualizarEstatus').style.display = "";
    }else{
      document.getElementById('actualizarEstatus').style.display = "none";
    }     
}

function comprobarIngreso(obj){   
    if (obj.checked){
      document.getElementById('actualizarIngreso').style.display = "";
    }else{
      document.getElementById('actualizarIngreso').style.display = "none";
    }     
}

function comprobarEgreso(obj){   
    if (obj.checked){
      document.getElementById('actualizarEgreso').style.display = "";
    }else{
      document.getElementById('actualizarEgreso').style.display = "none";
    }     
}