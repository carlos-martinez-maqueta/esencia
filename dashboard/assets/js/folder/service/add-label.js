$(document).ready(function () {
    var form = $("#add-label");

    form.submit(function (e) {
        e.preventDefault();

        var formData5 = new FormData(this);
        $.ajax({
            url: "config/folder/add-label.php",
            method: "POST",
            data: formData5,
            processData: false,
            contentType: false,
            dataType: "json", // Especifica que esperas una respuesta JSON
            beforeSend: function () {
                // Muestra el overlay de carga antes de enviar la solicitud
                $("#loading-overlay").css("display", "flex");
            },
            success: function (response) {
                // Oculta el overlay de carga después de procesar la respuesta
                $("#loading-overlay").css("display", "none");

                // Maneja la respuesta del servidor
                if (response.status === "success") {
                    // Muestra la alerta de éxito
                    Swal.fire({
                        icon: "success",
                        title: "Created successfully.",
                        text: response.message,
                        confirmButtonText: "OK",
                    }).then((result) => {
                        if (result.isConfirmed) {
                            $("#addLabelModal").modal("hide");
                            window.location.reload();
                        }
                    });
                } else {
                    // Muestra la alerta de error
                    Swal.fire({
                        icon: "error",
                        title: "Error",
                        text: response.message,
                        confirmButtonText: "OK",
                    });
                }
            },
            error: function (xhr, status, error) {
                // Oculta el overlay de carga en caso de error
                $("#loading-overlay").css("display", "none");
                console.error(xhr.responseText);
            },
        });
    });
});
$(document).on("click", ".edit-equipment", function() {
    var tomelineId = $(this).data("id");

    // Realizar la petición AJAX para obtener la descripción
    $.ajax({
        url: "config/folder/getFolder.php",
        method: "POST",
        data: {
            action: "get_all_equiptment_id",
            tomelineId: tomelineId,
        },
        dataType: "json",
        success: function(data) {

            $("#editEquipmentModal .modal-body #id").val(data.id);
            $("#editEquipmentModal .modal-body #name").val(data.name);
            $("#editEquipmentModal .modal-body #charge").val(data.charge);
            $("#editEquipmentModal .modal-body #linkedin").val(data.linkedin);
            $("#editEquipmentModal .modal-body #page").val(data.www);
            $("#editEquipmentModal .modal-body #instagram").val(data.instagram);
   

        },
    });
});

