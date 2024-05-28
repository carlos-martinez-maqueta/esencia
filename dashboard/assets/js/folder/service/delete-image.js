$(document).ready(function() {
    // Evento de clic en el ícono de la papelera
    $(document).on("click", ".delete-image", function(event) {
        event.preventDefault(); // Prevenir el comportamiento predeterminado del enlace

        var imageId = $(this).data("id"); // Obtener el ID de la imagen desde el atributo data-id

        // Mostrar el mensaje de confirmación
        Swal.fire({
            title: '¿Estás seguro?',
            text: '¡No podrás revertir esto!',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Sí, eliminarlo',
            cancelButtonText: 'Cancelar'
        }).then((result) => {
            if (result.isConfirmed) {
                // Realizar la petición AJAX para eliminar la imagen
                $.ajax({
                    url: 'config/folder/getFolder.php', // Asegúrate de que la URL sea correcta
                    method: 'POST',
                    data: {
                        action: 'delete_image', // Acción para identificar qué se va a eliminar
                        imageId: imageId // ID de la imagen que se va a eliminar
                    },
                    dataType: 'json',
                    success: function(data) {
                        // Maneja la respuesta del servidor
                        if (data.status === "success") {
                            // Muestra la alerta de éxito
                            Swal.fire({
                                icon: "success",
                                title: "Successfully removed",
                                text: data.message,
                                confirmButtonText: "OK",
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    window.location.reload(); // Recargar la página
                                }
                            });
                        } else {
                            // Muestra la alerta de error
                            Swal.fire({
                                icon: "error",
                                title: "Error",
                                text: data.message,
                                confirmButtonText: "OK",
                            });
                        }
                    },
                    error: function(xhr, status, error) {
                        // Manejar errores de la petición AJAX
                        console.error(xhr);
                        console.error(status);
                        console.error(error);
                    }
                });
            }
        });
    });
});
