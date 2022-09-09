function buscar_ahora(alumnoBuscado){
    var parametros = {"alumnoBuscado":alumnoBuscado};       
    $.ajax({
      data:parametros,
      type: 'POST',
      url:'buscado.php',
      success: function(data){
        document.getElementById("datos_buscados").innerHTML = data;
      }      
    });
} 