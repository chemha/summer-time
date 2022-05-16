/**
 * Recibe un array de datos y los muestra en un modal
 * de edición
 * @param {Array} datos
 */
function mostrarDatos(datos) {
    $("#modalEditar #titulo").val(datos[2]);
    $("#modalEditar #descripcion").text(datos[1]);
    $("#modalEditar #id").text(datos[0]);

    $("#modalEditar").modal("show");
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
    const tabla = $("#tabla-anuncios").DataTable({
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

        columnDefs: [
            {
                targets: [0, 1],
                visible: false,
                searchable: false,
            },
        ],

        order: [[0, "desc"]],
    });

    //Preparacion del evento para mostra los datos en el modal
    $("#tabla-anuncios").on("click", "#btnEditar", (e) => {
        let fila = $(e.target).parents("tr");
        if (fila.hasClass("child")) fila = fila.prev();
        mostrarDatos(tabla.row(fila).data());
    });

    $("#modalEditar ").on("click", "#btnEditar", (e) => {
        const form = $(e.target).closest("form");
        form.attr("action", "/anuncios/" + $("#modalEditar #id").text());
        form.trigger("submit");
    });

    //Preparación de evento para el modal de eliminación
    $("#tabla-anuncios #btnBorrar").on("click", "#btnBorrar", (e) => confirmarEliminar($(e.target).closest("form")));
});
