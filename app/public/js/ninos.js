/**
 * Recibe un array de datos y los asigna a un objeto para
 * poder utilizar los datos del array de forma más intuitiva.
 * Después inserta los datos en un modal y lo muestra.
 * @param {Array} datos 
 */
function mostrarDatos(datos) {
    const nino = {
        nombre: datos[11],
        apellidos: datos[12],
        edad: datos[0],
        hermanos: datos[1],
        medicacion: datos[2],
        especial: datos[3],
        observacionesMedicas: datos[4],
        tutor: datos[13],
        email: datos[5],
        telefono1: datos[14],
        telefono2: datos[6],

        grupo: datos[16],
        horario: datos[17],
        quincena1: datos[18],
        quincena2: datos[19],
        quincena3: datos[20],
        quincena4: datos[21],
        datos: datos[8],
        fotos: datos[9],
        anotaciones: datos[10],
        recibo: datos[15],
        pago: datos[7],
    };

    $("#modalVer #nombre").text(nino.nombre);
    $("#modalVer #apellidos").text(nino.apellidos);
    $("#modalVer #edad").text(nino.edad);
    $("#modalVer #hermanos").text(nino.hermanos);

    if (nino.medicacion == 1) $("#modalVer #medicacion").text("sí");
    else $("#modalVer #medicacion").text("no");
    if (nino.especial == 1) $("#modalVer #especial").text("sí");
    else $("#modalVer #especial").text("no");

    $("#modalVer #observacionesMedicas").text(nino.observacionesMedicas);
    $("#modalVer #tutor").text(nino.tutor);
    $("#modalVer #email").text(nino.email);
    $("#modalVer #telefono1").text(nino.telefono1);
    $("#modalVer #telefono2").text(nino.telefono2);
    $("#modalVer #grupo").text(nino.grupo);
    $("#modalVer #horario").text(nino.horario);
    $("#modalVer #quincena1").html(nino.quincena1);
    $("#modalVer #quincena2").html(nino.quincena2);
    $("#modalVer #quincena3").html(nino.quincena3);
    $("#modalVer #quincena4").html(nino.quincena4);

    if (nino.datos == 1) $("#modalVer #datos").text("sí");
    else $("#modalVer #datos").text("no");
    if (nino.fotos == 1) $("#modalVer #fotos").text("sí");
    else $("#modalVer #fotos").text("no");

    $("#modalVer #anotaciones").text(nino.anotaciones);
    $("#modalVer #recibo").text(nino.recibo);
    $("#modalVer #pago").text(nino.pago);

    $("#modalVer").modal("show");
}

/**
 * Recibe un formulario y muestra un popup pidiendo que
 * se confirme la eliminación. Una vez confirmada, el
 * formulario se sube.
 * @param {Element} form 
 */
function confirmarEliminar(form) {
    swal({
        title: "¿Estás seguro de que quieres eliminar este registro?",
        text: "Estos cambios no pueden deshacerse",
        icon: "warning",
        buttons: ["Cancelar", "Eliminar"],
        dangerMode: true,
    }).then((confirmado) => {
        if (confirmado) form.trigger("submit");
    });
}

//Preparaciones despues de cargar el HTML
$(window).on("load", () => {
    //Preparación de datatable
    const tabla = $("#tabla-ninos").DataTable({
        responsive: true,

        //Traducciones al español
        language: {
            url: "//cdn.datatables.net/plug-ins/1.11.5/i18n/es-ES.json",
        },

        //Opciones para cuantos registros mostar
        lengthMenu: [
            [7, 12, 50, -1],
            [7, 12, 50, "Mostrar todo"],
        ],

        //Campos ocultos para luego utilizarlos para mostrar los datos
        columnDefs: [
            {
                targets: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10],
                visible: false,
                searchable: false,
            },
        ],

        order: [[12, "asc"]],
    });

    //Preparacion del evento para mostra los datos en el modal
    $("#tabla-ninos").on("click", "#btnVer", (e) => {
        let fila = $(e.target).parents("tr");
        if (fila.hasClass("child")) fila = fila.prev();
        mostrarDatos(table.row(fila).data());
   });

    //Preparación de evento para el modal de eliminación
    $("#tabla-ninos #btnBorrar").on("click", (e) => {
        confirmarEliminar($(e.target).closest("form"));
    });
});
