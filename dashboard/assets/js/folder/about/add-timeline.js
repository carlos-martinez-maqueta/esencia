$(document).ready(function () {
    var form = $("#add-timeline");

    form.submit(function (e) {
        e.preventDefault();

        var formData5 = new FormData(this);
        $.ajax({
            url: "config/folder/get-add-time.php",
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
                            $("#exampleModal").modal("hide");
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
$(document).on("click", ".edit-timeline", function() {
    var tomelineId = $(this).data("id");

    // Realizar la petición AJAX para obtener la descripción
    $.ajax({
        url: "config/folder/getFolder.php",
        method: "POST",
        data: {
            action: "get_all_timeline_id",
            tomelineId: tomelineId,
        },
        dataType: "json",
        success: function(data) {

            $("#editTimeLineModal .modal-body #usuario_id").val(data.id);
            $("#editTimeLineModal .modal-body #year").val(data.year);
            // Asigna el valor de la descripción al textarea
            $("#editTimeLineModal .modal-body #summer2").val(data.description);

            // Inicializa Summernote en el textarea
            $('#summer2').summernote({
                placeholder: 'Hello user',
                tabsize: 2,
                height: 150,
                imageMaxSize: 5242880,
            });
        },
    });
});



$(document).ready(function() {
    var form = $("#edit-form-timeline");

    form.submit(function(e) {
        e.preventDefault();

        var formData5 = new FormData(this);
        $.ajax({
            url: "config/folder/get-edit-time.php",
            method: "POST",
            data: formData5,
            processData: false,
            contentType: false,
            dataType: "json", // Especifica que esperas una respuesta JSON
            beforeSend: function() {
                // Muestra el overlay de carga antes de enviar la solicitud
                $("#loading-overlay").css("display", "flex");
            },
            success: function(response) {
                // Oculta el overlay de carga después de procesar la respuesta
                $("#loading-overlay").css("display", "none");

                // Maneja la respuesta del servidor
                if (response.status === "success") {
                    // Muestra la alerta de éxito
                    Swal.fire({
                        icon: "success",
                        title: "Edited successfully.",
                        text: response.message,
                        confirmButtonText: "OK",
                    }).then((result) => {
                        // if (result.isConfirmed) {
                        //     $("#editModal").modal("hide");
                        //     window.location.reload();
                        // }
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
            error: function(xhr, status, error) {
                // Oculta el overlay de carga en caso de error
                $("#loading-overlay").css("display", "none");
                console.error(xhr.responseText);
            },
        });
    });
});

$(document).on("click", ".danger-timeline", function() {
    var resultId = $(this).data("id");

    // Mostrar el mensaje de confirmación
    Swal.fire({
        title: 'Are you sure?',
        text: 'You won\'t be able to revert this!',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Yes, delete it!',
        cancelButtonText: 'Cancel'
    }).then((result) => {
        if (result.isConfirmed) {
            // Realizar la petición AJAX para eliminar la línea de tiempo
            $.ajax({
                url: "config/folder/getFolder.php",
                method: "POST",
                data: {
                    action: "delete_timeline_id",
                    resultId: resultId,
                },
                dataType: "json",
                success: function(data) {
                    // Mostrar mensaje de éxito o error
                    if (data.status === "success") {
                        Swal.fire('Deleted!', 'Your file has been deleted.', 'success');
                        // Aquí puedes recargar la página o realizar otra acción necesaria
                        window.location.reload();
                    } else {
                        Swal.fire('Error!', 'Failed to delete file.', 'error');
                    }
                },
            });
        }
    });
});
