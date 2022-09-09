$(document).ready(function() {
    $('#tablaAlumnos').DataTable( {    
      language: {
        "decimal":        "",
        "emptyTable":     "No hay datos",
        "info":           "Mostrando _START_ a _END_ de _TOTAL_ registros",
        "infoEmpty":      "Mostrando 0 a 0 de 0 registros",
        "infoFiltered":   "(Filtro de _MAX_ total registros)",
        "infoPostFix":    "",
        "thousands":      ",",
        "lengthMenu":     "Mostrar _MENU_ registros",
        "loadingRecords": "Cargando...",
        "processing":     "Procesando...",
        "search":         "Buscar:",
        "zeroRecords":    "No se encontraron coincidencias",
        "paginate": {
            "first":      "Primero",
            "last":       "Ultimo",
            "next":       "Siguiente",
            "previous":   "Anterior"
        },
        "aria": {
            "sortAscending":  ": Activar orden de columna ascendente",
            "sortDescending": ": Activar orden de columna desendente"
        }
    },
    "scrollX": true,
    "scrollY": true, 
    "order": [[ 0, 'asc' ], [1, 'asc'], [2, 'asc']], 
    "responsive": true
    } );
} );