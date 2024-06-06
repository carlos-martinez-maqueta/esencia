<?php

include 'dashboard/config/conexion.php';
include 'dashboard/class/folder.php';
include 'dashboard/class/user.php';
include 'dashboard/class/booking.php';

$homeObj = Folder::getFolderHome();

// Obtener las fechas reservadas
$query = "SELECT date_start, date_end FROM tbl_booking";
$stmt = $conn->prepare($query);
$stmt->execute();
$reserved_dates = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Convertir las fechas reservadas a un formato legible por JavaScript
$dates = [];
foreach ($reserved_dates as $date) {
    $start = new DateTime($date['date_start']);
    $end = new DateTime($date['date_end']);
    $interval = new DateInterval('P1D');
    $daterange = new DatePeriod($start, $interval, $end->modify('+1 day'));
    foreach ($daterange as $date) {
        $dates[] = $date->format('Y-m-d');
    }
}
$reserved_dates_js = json_encode($dates);

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>VILLA ESENCIA TULUM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="assets/css/home.css">
    <link rel="stylesheet" type="text/css" href="assets/css/footer.css">
    <link rel="stylesheet" type="text/css" href="assets/css/fonts.css">
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/gotham-serif-bold?styles=140064" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.6/dist/sweetalert2.min.css">


</head>
<style>
    .flatpickr-disabled {
        /* opacity: 0.5; */
        color: rgba(57, 57, 57, 0.3) !important;
    }
</style>

<body>
    <section class="section_banner">
        <div class="cont_banner">
            <div class="fondo_banner">
                <div class="menu_banner">
                    <a class="btn" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                        <img src="assets/img/menu.svg" alt="">
                    </a>
                    <div class="nav_iz offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasExampleLabel">
                                <img src="assets/img/logo.png" alt="" class="img-fluid" style="width: 130px;">
                            </h5>
                            <button type="button" class="btn" data-bs-dismiss="offcanvas" aria-label="Close">
                                <img src="assets/img/close.svg" alt="">
                            </button>
                        </div>
                        <div class="offcanvas-body">
                            <ul>
                                <li><a href="index">HOME</a></li>
                                <li><a href="places">BOOK NOW</a></li>
                                <li><a href="about">ABOUT US</a></li>
                                <li><a href="events">EVENTS</a></li>
                                <li><a href="vip-experience">VIP EXPERIENCE</a></li>
                            </ul>
                        </div>
                        <div class="offcanvas-bottom">
                            <!-- <ul>
                                <li><a href="sign-in">SIGN IN</a></li>
                                <li><a href="sign-up">SIGN UP</a></li>
                            </ul> -->
                            <div class="d-flex lenguaje">
                                <div class=""><a class="me-3" href="index">EN </a></div>
                                <div class="me-3" style="color: #ffffff"> / </div>
                                <div class=""><a class="me-3" href="es">ES </a></div>
                            </div>
                            <div class="d-flex mt-4">
                                <a href="https://www.instagram.com/solistiq.mx/" class=" redes_menu">INSTAGRAM</a>
                                <!-- <a href="" class=" redes_menu">FACEBOOK</a>
                                <a href="" class=" redes_menu">LINKEDIN</a> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="btn_boook_banner ">
                    <a href="places" class="book_now_a">
                        BOOK NOW
                        <img src="assets/img/btn-book-now.svg" alt="" class="blanco">
                        <img src="assets/svg/dark.svg" alt="" class="negro">
                    </a>
                    <!-- <a class="book_now_a" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                        BOOK NOW
                        <img src="assets/img/btn-book-now.svg" alt="" class="blanco">
                        <img src="assets/svg/dark.svg" alt="" class="negro">
                    </a> -->
                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                        <div class="offcanvas-header">
                            <!-- <h5 class="offcanvas-title" id="offcanvasRightLabel">Offcanvas right</h5> -->
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body px-5">
                            <h3>WELCOME TO SOLISTIQ</h3>
                            <p>Enjoy your stay at <br> Solistiq Tulum</p>
                            <form class="mt-5" id="availability-space" method="POST" enctype="multipart/form-data">
                                <div class="dates_input">
                                    <div class="d-flex mb-3">
                                        <label for="checkin">CHECK IN*</label>
                                        <input type="text" id="fecha1" name="fecha1" placeholder="dd/mm/yyyy" required>
                                    </div>
                                </div>
                                <div class="dates_input">
                                    <div class="d-flex mb-3">
                                        <label for="checkout">CHECK OUT*</label>
                                        <input type="text" id="fecha2" name="fecha2" placeholder="dd/mm/yyyy" disabled required>
                                    </div>
                                </div>

                                <div class="mb-3 mt-4">
                                    <label for="destination" class="form-label">DESTINATION <img src="assets/img/destination.svg"></label>
                                    <select class="form-select" id="destination" name="destination" aria-label="Default select example">
                                        <option>Select Place</option>
                                        <option value="1" selected>Villa Tulum</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="guests" class="form-label">GUESTS <img src="assets/img/guest.svg"></label>
                                    <select class="form-select" id="guests" name="guests" aria-label="Default select example">
                                        <option>Select Guest</option>
                                        <option value="12" selected>12</option>
                                    </select>
                                </div>
                                <div>
                                    <button type="submit" class="btn btn_plan_your">PLAN YOUR TRIP</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <video src="assets/video/home.mp4" autoplay muted loop class="img_banner"></video>

            <!-- <img src="dashboard/files/home/<?//= $homeObj->banner ?>" class="img_banner" alt=""> -->
        </div>
    </section>
    <section class="section_about">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div>
                        <img src="assets/img/about.png" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-5 position-relative">
                    <div class="card_about">
                        <h3 class="mb-4">ABOUT OUR HOTEL</h3>
                         <div class="mb-4">
                            <?= $homeObj->short_text_about ?> 
                         </div>

                        <a href="about" class="read_more mt-5">READ MORE <!-- <img src="assets/img/izquierda.svg" class="ms-3"> --></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section_point">
        <div class="position-relative">
            <div class="ubicacion_maps">
                <p>Location and contact</p>

                <div>
                    <ul>
                        <li><a href=""><img class="me-2" src="assets/svg/point.svg"><?= $homeObj->location ?></a></li>
                        <li><a href=""><img class="me-2" src="assets/svg/wsp.svg"><?= $homeObj->phone ?></a></li>
                        <li><a href=""><img class="me-2" src="assets/svg/mail.svg"><?= $homeObj->email ?></a></li>
                    </ul>
                </div>
            </div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3744.358602954746!2d-87.48193909999999!3d20.2024142!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f4fd7ac9bdba79f%3A0x7ccc31c16c7bb814!2sEsencia%20Villas%20-%20Tulum!5e0!3m2!1ses-419!2spe!4v1715808814840!5m2!1ses-419!2spe" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>
    <section class="section_boletin">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-lg-6 banner_boletin p-0">
                    <img src="assets/img/banner_boletin.png" class="d-lg-block d-none ">
                </div>
                <div class="col-lg-6  fondo_boletin_form">
                    <div class="px-lg-5 px-3">
                        <h3 class="mb-3">Stay Updated!</h3>
                        <p class="mb-5">SUBSCRIBE TO OUR NEWSLETTER</p>

                        <form>
                            <div class="row">
                                <div class="">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="" placeholder="">
                                        <label for="">First Name*</label>
                                    </div>
                                </div>
                                <div class="">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="" placeholder="">
                                        <label for="">Last Name*</label>
                                    </div>
                                </div>
                                <div class="">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="" placeholder="">
                                        <label for="">Email*</label>
                                    </div>
                                </div>
                            </div>
                            <p class="my-4">Be the first to know about exclusive offers, new villa listings, and special events. <br> Join our community of luxury travelers and receive updates directly to your inbox.</p>
                            <button class="btn_boletin">SUBMIT</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include 'app/footer.php'; ?>
    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- SWEETALERT CDN -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.6/dist/sweetalert2.min.js"></script>



    <script src="dashboard/assets/js/booking/availability-space.js"></script>


    <div class="whatstapp-link">
        <a href="">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="48px" height="48px">
                <path fill="#fff" d="M4.868,43.303l2.694-9.835C5.9,30.59,5.026,27.324,5.027,23.979C5.032,13.514,13.548,5,24.014,5c5.079,0.002,9.845,1.979,13.43,5.566c3.584,3.588,5.558,8.356,5.556,13.428c-0.004,10.465-8.522,18.98-18.986,18.98c-0.001,0,0,0,0,0h-0.008c-3.177-0.001-6.3-0.798-9.073-2.311L4.868,43.303z"></path>
                <path fill="#fff" d="M4.868,43.803c-0.132,0-0.26-0.052-0.355-0.148c-0.125-0.127-0.174-0.312-0.127-0.483l2.639-9.636c-1.636-2.906-2.499-6.206-2.497-9.556C4.532,13.238,13.273,4.5,24.014,4.5c5.21,0.002,10.105,2.031,13.784,5.713c3.679,3.683,5.704,8.577,5.702,13.781c-0.004,10.741-8.746,19.48-19.486,19.48c-3.189-0.001-6.344-0.788-9.144-2.277l-9.875,2.589C4.953,43.798,4.911,43.803,4.868,43.803z"></path>
                <path fill="#cfd8dc" d="M24.014,5c5.079,0.002,9.845,1.979,13.43,5.566c3.584,3.588,5.558,8.356,5.556,13.428c-0.004,10.465-8.522,18.98-18.986,18.98h-0.008c-3.177-0.001-6.3-0.798-9.073-2.311L4.868,43.303l2.694-9.835C5.9,30.59,5.026,27.324,5.027,23.979C5.032,13.514,13.548,5,24.014,5 M24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974 M24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974 M24.014,4C24.014,4,24.014,4,24.014,4C12.998,4,4.032,12.962,4.027,23.979c-0.001,3.367,0.849,6.685,2.461,9.622l-2.585,9.439c-0.094,0.345,0.002,0.713,0.254,0.967c0.19,0.192,0.447,0.297,0.711,0.297c0.085,0,0.17-0.011,0.254-0.033l9.687-2.54c2.828,1.468,5.998,2.243,9.197,2.244c11.024,0,19.99-8.963,19.995-19.98c0.002-5.339-2.075-10.359-5.848-14.135C34.378,6.083,29.357,4.002,24.014,4L24.014,4z"></path>
                <path fill="#40c351" d="M35.176,12.832c-2.98-2.982-6.941-4.625-11.157-4.626c-8.704,0-15.783,7.076-15.787,15.774c-0.001,2.981,0.833,5.883,2.413,8.396l0.376,0.597l-1.595,5.821l5.973-1.566l0.577,0.342c2.422,1.438,5.2,2.198,8.032,2.199h0.006c8.698,0,15.777-7.077,15.78-15.776C39.795,19.778,38.156,15.814,35.176,12.832z"></path>
                <path fill="#fff" fill-rule="evenodd" d="M19.268,16.045c-0.355-0.79-0.729-0.806-1.068-0.82c-0.277-0.012-0.593-0.011-0.909-0.011c-0.316,0-0.83,0.119-1.265,0.594c-0.435,0.475-1.661,1.622-1.661,3.956c0,2.334,1.7,4.59,1.937,4.906c0.237,0.316,3.282,5.259,8.104,7.161c4.007,1.58,4.823,1.266,5.693,1.187c0.87-0.079,2.807-1.147,3.202-2.255c0.395-1.108,0.395-2.057,0.277-2.255c-0.119-0.198-0.435-0.316-0.909-0.554s-2.807-1.385-3.242-1.543c-0.435-0.158-0.751-0.237-1.068,0.238c-0.316,0.474-1.225,1.543-1.502,1.859c-0.277,0.317-0.554,0.357-1.028,0.119c-0.474-0.238-2.002-0.738-3.815-2.354c-1.41-1.257-2.362-2.81-2.639-3.285c-0.277-0.474-0.03-0.731,0.208-0.968c0.213-0.213,0.474-0.554,0.712-0.831c0.237-0.277,0.316-0.475,0.474-0.791c0.158-0.317,0.079-0.594-0.04-0.831C20.612,19.329,19.69,16.983,19.268,16.045z" clip-rule="evenodd"></path>
            </svg>
        </a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- Incluir scripts de Flatpickr y tu código JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

    <script>
        // Inicializar el primer Flatpickr
        flatpickr("#fecha1", {
            disable: <?php echo $reserved_dates_js; ?>,
            minDate: "today",
            onChange: function(selectedDates, dateStr, instance) {
                if (selectedDates.length > 0) {
                    // Obtener la fecha seleccionada y sumarle un día
                    let checkInDate = new Date(selectedDates[0]);
                    let checkOutDate = new Date(checkInDate);
                    checkOutDate.setDate(checkOutDate.getDate() + 1);

                    // Formatear la fecha a "dd/mm/yyyy"
                    let formattedDate = checkOutDate.toLocaleDateString('en-GB').split('/').reverse().join('-');

                    // Actualizar el segundo Flatpickr
                    flatpickr("#fecha2", {
                        defaultDate: formattedDate,
                        disable: <?php echo $reserved_dates_js; ?>
                    });

                    // Habilitar el campo de fecha de salida
                    document.getElementById("fecha2").disabled = false;
                }
            }
        });

        // Inicializar el segundo Flatpickr sin fecha por defecto
        flatpickr("#fecha2", {
            disable: <?php echo $reserved_dates_js; ?>
        });
    </script>
</body>

</html>
<!-- <script>
    $(function() {
        const reservedDates = <?= $reserved_dates_js ?>;

        function disableDates(date) {
            const currentDate = new Date();
            currentDate.setHours(0, 0, 0, 0); // Establecer la hora a las 00:00:00 para comparar solo fechas
            const dateString = $.datepicker.formatDate('yy-mm-dd', date);
            return [date < currentDate || reservedDates.indexOf(dateString) === -1];
        }

        $("#checkin").datepicker({
            dateFormat: 'yy-mm-dd',
            beforeShowDay: disableDates,
            minDate: 0, // Solo permite seleccionar a partir de hoy
            onSelect: function(selectedDate) {
                const date = $(this).datepicker('getDate');
                const nextDay = new Date(date.setDate(date.getDate()));
                $('#checkout').datepicker('option', 'minDate', nextDay);

                const checkoutDate = new Date(date); // Clonar la fecha seleccionada
                checkoutDate.setDate(checkoutDate.getDate() + 1); // Sumar 2 días
                $('#checkout').datepicker('setDate', checkoutDate); // Establecer la fecha de check-out

                // Actualizar el valor del campo de "CHECK OUT"
                $('#checkout').val($.datepicker.formatDate('yy-mm-dd', checkoutDate));
            }
        });

        $("#checkout").datepicker({
            dateFormat: 'yy-mm-dd',
            beforeShowDay: disableDates,
            minDate: 2 // Deshabilitar fechas anteriores a 2 días después de la fecha actual
        });
    });

    document.addEventListener("DOMContentLoaded", function() {
        const checkinInput = document.getElementById("checkin");
        const today = new Date().toISOString().split('T')[0];
        checkinInput.value = today;

        // Establecer la fecha de "CHECK OUT" 2 días después de la fecha actual
        const checkoutInput = document.getElementById("checkout");
        const checkoutDate = new Date(today);
        checkoutDate.setDate(checkoutDate.getDate() + 1); // Sumar 2 días
        checkoutInput.value = checkoutDate.toISOString().split('T')[0];
    });
</script> -->