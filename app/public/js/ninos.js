//Preparaciones despues de cargar el HTML
$(window).on("load", () => {
    //Preparación de datatable
    const tabla = $("#ninos").DataTable({
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

        //Campos ocultos para luego utilizarlos para mostrar los datos
        columnDefs: [
            {
                targets: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10],
                visible: false,
                searchable: false,
            },
        ],
    });

    //Preparacion del evento para mostra los datos en el modal
    $("#ninos tbody").on("click", "tr", function () {
        const fila = tabla.row(this).data();
        const nino = {
            nombre: fila[11],
            apellidos: fila[12],
            edad: fila[0],
            hermanos: fila[1],
            medicacion: fila[2],
            especial: fila[3],
            observacionesMedicas: fila[4],
            tutor: fila[13],
            email: fila[5],
            telefono1: fila[14],
            telefono2: fila[6],

            grupo: fila[16],
            horario: fila[17],
            quincena1: fila[18],
            quincena2: fila[19],
            quincena3: fila[20],
            quincena4: fila[21],
            datos: fila[8],
            fotos: fila[9],
            anotaciones: fila[10],
            recibo: fila[15],
            pago: fila[7],
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

        if (nino.quincena1 == 1) $("#modalVer #quincena1").text("sí");
        else $("#modalVer #quincena1").text("no");
        if (nino.quincena2 == 1) $("#modalVer #quincena2").text("sí");
        else $("#modalVer #quincena2").text("no");
        if (nino.quincena3 == 1) $("#modalVer #quincena3").text("sí");
        else $("#modalVer #quincena3").text("no");
        if (nino.quincena4 == 1) $("#modalVer #quincena4").text("sí");
        else $("#modalVer #quincena4").text("no");

        if (nino.datos == 1) $("#modalVer #datos").text("sí");
        else $("#modalVer #datos").text("no");
        if (nino.fotos == 1) $("#modalVer #fotos").text("sí");
        else $("#modalVer #fotos").text("no");

        $("#modalVer #anotaciones").text(nino.anotaciones);
        $("#modalVer #recibo").text(nino.recibo);
        $("#modalVer #pago").text(nino.pago);

        $("#modalVer").modal("show");
    });

    //Preparación de evento para el boton de edición
    $("#btnEditar").on("click", (e) => e.stopPropagation());

    //Preparación de evento para el modal de eliminación
    $("#btnBorrar").on("click", function (e) {
        e.stopPropagation();
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
