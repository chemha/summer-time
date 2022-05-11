function mostrarDatos(datos) {
    $("#modalEditar #titulo").val(datos[2]);
    $("#modalEditar #descripcion").text(datos[1]);
    $("#modalEditar #id").text(datos[0]);

    $("#modalEditar").modal("show");
}

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
    $("#tabla-anuncios #btnEditar").on("click", function () {
        mostrarDatos(tabla.row(this.closest("tr")).data());
    });

    $("#modalEditar #btnEditar").on("click", function () {
        const form = $(this).closest("form");
        form.attr("action", "/anuncios/" + $("#modalEditar #id").text());
        form.trigger("submit");
    });

    //Preparación de evento para el modal de eliminación
    $("#tabla-anuncios #btnBorrar").on("click", function () {
        confirmarEliminar($(this).closest("form"));
    });
});
