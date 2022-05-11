/**
 * Recibe un array de datos y los muestra en un modal
 * de edición
 * @param {Array} datos
 */
function mostrarDatos(datos) {
    datos[3] == "administrador"
        ? $("#modalEditar #admin").val(1)
        : $("#modalEditar #admin").val(0);

    $("#modalEditar #email").val(datos[2]);
    $("#modalEditar #name").val(datos[1]);
    $("#modalEditar #id").text(datos[0]);

    $("#modalEditar").modal("show");
}

/**
 * Recibe un array de datos en el que va el ID del usuario
 * Inserta ese id en un span invisible para su futura utilización
 * Muestra el modal con el formulario para modificar la contraseña
 * @param {Array} datos
 */
function cambiarClave(datos) {
    $("#modalClave #id").text(datos[0]);
    $("#modalClave").modal("show");
}

/**
 * Recibe un formulario y muestra un popup pidiendo que
 * se confirme la eliminación. Una vez confirmada, el
 * formulario se sube.
 * @param {Object} form
 */
function confirmarEliminar(form) {
    swal({
        title: "¿Estás seguro de que quieres eliminar este usuario?",
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
    const tabla = $("#tabla-users").DataTable({
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
                targets: [0],
                visible: false,
                searchable: false,
            },
        ],

        order: [[4, "asc"]],
    });

    //Preparacion del evento para mostra los datos en el modal
    $("#tabla-users #btnEditar").on("click", function () {
        mostrarDatos(tabla.row(this.closest("tr")).data());
    });

    //Preparación del evento para mostrar el modal para cambiar la clave
    $("#tabla-users #btnClave").on("click", function () {
        cambiarClave(tabla.row(this.closest("tr")).data());
    });

    //Preparación del evento para subir el formulario de edición de datos
    $("#modalEditar #btnEditar").on("click", function () {
        const form = $(this).closest("form");
        form.attr("action", "/users/" + $("#modalEditar #id").text());
        form.trigger("submit");
    });

    //Preparación del evento para subir el formulario de edición de contraseña
    $("#modalClave #btnEditar").on("click", function () {
        const form = $(this).closest("form");
        form.attr("action", "/users/" + $("#modalClave #id").text());
        form.trigger("submit");
    });

    //Preparación de evento para el modal de eliminación
    $("#tabla-users #btnBorrar").on("click", function () {
        confirmarEliminar($(this).closest("form"));
    });
});
