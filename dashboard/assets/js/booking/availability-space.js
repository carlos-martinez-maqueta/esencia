$(document).ready(function () {
    var form = $("#availability-space");

    form.submit(function (e) {
        e.preventDefault();

        var formData5 = new FormData(this);
        $.ajax({
            url: "dashboard/config/booking/availability-space.php",
            method: "POST",
            data: formData5,
            processData: false,
            contentType: false,
            dataType: "json",
            beforeSend: function () {
                $("#loading-overlay").css("display", "flex");
            },
            success: function (response) {
                $("#loading-overlay").css("display", "none");

                if (response.status === "success") {
                    // Guardar datos en localStorage
                    localStorage.setItem('fecha1', $('#fecha1').val());
                    localStorage.setItem('fecha2', $('#fecha2').val());
                    // localStorage.setItem('destination', $('#destination').val());
                    // localStorage.setItem('guests', $('#guests').val());

                    Swal.fire({
                        icon: "success",
                        title: "Dates available",
                        text: response.message,
                        confirmButtonText: "OK",
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href = "places"; 
                        }
                    });
                } else {
                    Swal.fire({
                        icon: "error",
                        title: "Error",
                        text: response.message,
                        confirmButtonText: "OK",
                    });
                }
            },
            error: function (xhr, status, error) {
                $("#loading-overlay").css("display", "none");
                console.error(xhr.responseText);
                Swal.fire({
                    icon: "error",
                    title: "Request failed",
                    text: "An error occurred while processing your request. Please try again.",
                    confirmButtonText: "OK",
                });
            },
        });
    });
});