<?php include 'app/components/header.php'; ?>

<?php include 'app/components/sidebar.php'; ?>

<?php include 'app/components/topbar.php'; ?>



<!-- start content -->
<div class="container-fluid px-4">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800 d-flex align-items-center gap-2 font_two"><i class='bx bx-calendar-star me-1'></i> Calendar</h1>
        <div class="d-flex gap-1">
            <!-- <a href="budgets" class="btn btn-dark d-flex align-items-center" target="_blank"><i class='bx bx-library me-1'></i> Ver Cotizaciones</a> -->
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 d-flex justify-content-center">
            <div class="col-11">

                <div id="calendar"></div>
            </div>
        </div>
    </div>
</div>

<!-- end content -->

<?php include 'app/components/footer.php'; ?>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');

        var calendar = new FullCalendar.Calendar(calendarEl, {
            locale: 'es', // Establecer el idioma a español
            initialView: 'dayGridMonth', // Vista inicial del calendario (mes)
            headerToolbar: {
                start: 'prev,next today',
                center: 'title',
                end: 'dayGridMonth,timeGridWeek,timeGridDay' // Agrega los botones para cambiar entre las vistas de día, semana y mes
            },
            events: function(info, successCallback, failureCallback) {
                // Make an AJAX request to fetch bookings data
                $.ajax({
                    url: 'config/booking/getBookings.php',
                    method: 'POST',
                    data: {
                        action: 'get_all_booking'
                    },
                    dataType: 'json',
                    success: function(data) {
                        // Process the data to format it for FullCalendar
                        var events = [];
                        data.forEach(function(booking) {
                            // Calculate the dates between date_start and date_end
                            var startDate = new Date(booking.date_start);
                            var endDate = new Date(booking.date_end);
                            var currentDate = new Date(startDate);

                            // Loop through all dates in the range
                            while (currentDate <= endDate) {
                                events.push({
                                    title: 'Booking ID: ' + booking.id,
                                    start: new Date(currentDate), // Use a new instance of the date
                                    allDay: true, // Set to true to mark the entire day as occupied
                                    color: '#2C3E50' // Set color to indicate occupied dates
                                });
                                // Move to the next day
                                currentDate.setDate(currentDate.getDate() + 1);
                            }
                        });
                        // Pass the formatted events to FullCalendar
                        successCallback(events);
                    },

                    error: function(xhr, status, error) {
                        // Handle errors
                        console.error(error);
                        failureCallback(error);
                    }
                });
            }
        });

        calendar.render(); // Renderizar el calendario
    });
</script>