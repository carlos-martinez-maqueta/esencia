$(document).ready(function () {
    // Ocultar el overlay de carga al inicio
    $('#spinner').hide();

    // Mostrar el overlay de carga cuando comienza una solicitud AJAX
    $(document).ajaxStart(function() {
        $('#spinner').show();
    });

    // Ocultar el overlay de carga cuando finaliza una solicitud AJAX
    $(document).ajaxStop(function() {
        $('#spinner').hide();
    });

    // Evento submit del formulario de acceso
    $('#access').on('submit', function (e) {
        e.preventDefault();
        var formData = new FormData(this); // Obtener los datos del formulario

        $.ajax({
            url: 'dashboard/config/user/verify-user.php',
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            dataType: 'json',
            success: function (response) {
                if (response.status === 'success') {
                    Swal.fire({
                        icon: 'success',
                        title: 'Access granted',
                        text: response.message
                    }).then(function(result) {
                        if (result.isConfirmed) {
                            window.location.href = 'dashboard/';
                        }
                    });
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Access denied',
                        text: response.message
                    });
                }
            },
            error: function (xhr, status, error) {
                console.error(xhr.responseText);
                Swal.fire({
                    icon: 'error',
                    title: 'Error de conexión',
                    text: 'Hubo un problema al verificar el usuario'
                });
            }
        });
    });
});
