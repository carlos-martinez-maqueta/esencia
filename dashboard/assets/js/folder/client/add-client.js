$(document).ready(function () {
    var form = $("#add-client");

    form.submit(function (e) {
        e.preventDefault();

        var formData5 = new FormData(this);

        // Preguntar al usuario si desea enviar el formulario
        Swal.fire({
            icon: "question",
            title: "Are you sure you want to submit the form?",
            text: "Make sure all the information is correct before submitting.",
            showCancelButton: true,
            confirmButtonText: "Yes, submit",
            cancelButtonText: "Review information",
        }).then((result) => {
            if (result.isConfirmed) {
                // Enviar el formulario si el usuario confirma
                $.ajax({
                    url: "dashboard/config/folder/add-client.php",
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
                            Swal.fire({
                                icon: "success",
                                title: "Successful registration.",
                                text: response.message,
                                confirmButtonText: "OK",
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    window.location.href = 'sign-in';
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
                    },
                });
            }
        });
    });
});
