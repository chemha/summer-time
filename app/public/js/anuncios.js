//Preparaciones despues de cargar el HTML
$(window).on("load", () => {
    //Preparación de datatable
    const tabla = $("#tabla-anuncios").DataTable({
        //Traducciones al español
        language: {
            url: "//cdn.datatables.net/plug-ins/1.11.5/i18n/es-ES.json",
        },

        responsive: true,

        //Opciones para cuantos registros mostar
        lengthMenu: [
            [7, 12, 50, -1],
            [7, 12, 50, "Mostrar todo"],
        ],
    });

    //Preparacion del evento para mostra los datos en el modal
    $("#btnEditar").on("click", function (e) {
        e.stopPropagation();
        const fila = this.closest("tr");
        const datos = tabla.row(fila).data();
        console.log(datos);
        $("#modalEditar").modal("show");
    });

    //Preparación de evento para el modal de eliminación
    $("#btnBorrar").on("click", function (e) {
        e.stopPropagation();
        e.preventDefault();
        const form = $(this).closest("form");

        swal({
            title: "¿Estás seguro de que quieres eliminar este registro?",
            text: "Estos cambios no pueden deshacerse",
            icon: "warning",
            buttons: ["Cancelar", "Eliminar"],
            dangerMode: true,
        }).then((confirmado) => {
            if (confirmado) form.trigger("submit");
        });
    });
});
