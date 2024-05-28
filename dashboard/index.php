<?php include 'app/components/header.php';

$bookingObj = Booking::getBooking();

$bookingCount = Booking::getBookingCountPerMonth();
$totalDuration = Booking::getTotalDurationPerMonth();
$totalClients = Client::countClients();
?>

<?php include 'app/components/sidebar.php'; ?>

<?php include 'app/components/topbar.php'; ?>



<!-- start content -->
<div class="container-fluid px-4">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800 d-flex align-items-center gap-2 font_two">Welcome Back Admin</h1>

    </div>
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold font_two text-uppercase mb-1">
                                Income Summary (Monthly)</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">$40,000</div>
                        </div>
                        <div class="col-auto">
                            <img src="files/gif/money-bag.gif" alt="" width="50">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold font_two text-uppercase mb-1">
                                Total Reservations (Monthly)</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $bookingCount ?></div>
                        </div>
                        <div class="col-auto">
                            <img src="files/gif/checklist.gif" alt="" width="50">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold font_two text-uppercase mb-1">
                                Reserved Days (Monthly)</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $totalDuration ?></div>
                        </div>
                        <div class="col-auto">
                            <img src="files/gif/calendar.gif" alt="" width="50">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Total Clients Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold font_two text-uppercase mb-1">
                                Total Clients</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $totalClients ?></div>
                        </div>
                        <div class="col-auto">
                            <img src="files/gif/customer.gif" alt="" width="50">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="row">

        <!-- Area Chart -->
        <div class="col-xl-8 col-lg-7">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold font_two">Reservation Summary</h6>

                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="col-lg-12 ">
                        <div class="table-responsive table-light shadow small-table p-3">
                            <table class="table p-lg-4" id="table-booking">
                                <!-- Van haber las opciones : VER ECUACION, VER VOUCHER DE COMPRA, CAMBIO DE ESTADO A APROBADO O RECHAZADO -->
                                <thead>
                                    <tr>
                                        <th class="text-center" scope="col">ID</th>
                                        <th class="text-center" scope="col">CORRELATIVE</th>
                                        <th class="text-center" scope="col">CLIENT</th>
                                        <th class="text-center" scope="col">SPACE</th>
                                        <th class="text-center" scope="col">DURATION DAYS</th>
                                        <th class="text-center" scope="col">DATE START</th>
                                        <th class="text-center" scope="col">DATE END</th>
                                        <th class="text-center" scope="col">ACTIONS</th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pie Chart -->
        <div class="col-xl-4 col-lg-5">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold font_two">Reservation graph</h6>

                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="pt-4 pb-2">
                        <canvas id="myChart" width="400" height="200"></canvas>
                    </div>
                    <div class="mt-4 text-center small">
                        <span class="mr-2">
                            <i class="fas fa-circle text-primary"></i> Monthly reservation count
                        </span>
                    </div>
                </div>
            </div>
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold font_two">Revenue Sources</h6>

                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="pt-4 pb-2">
                        <canvas id="myPieChart" width="400" height="200"></canvas>
                    </div>
                    <div class="mt-4 text-center small">
                        <span class="mr-2">
                            <i class="fas fa-circle text-primary"></i> Direct
                        </span>
                        <span class="mr-2">
                            <i class="fas fa-circle text-success"></i> Social
                        </span>
                        <span class="mr-2">
                            <i class="fas fa-circle text-info"></i> Referral
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end content -->

<?php include 'app/components/footer.php'; ?>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="assets/js/booking/get-bookings.js"></script>
<script>
    // Obtener los datos de reservas por mes desde PHP
    let reservasPorMes = <?php echo json_encode(Booking::getReservationsPerMonth()); ?>;

    // Procesar los datos para el gráfico
    let labels = [];
    let data = [];
    reservasPorMes.forEach(function(item) {
        labels.push(item.mes);
        data.push(item.total_reservas); // Aquí debes cambiar item.total a item.total_reservas
    });

    // Obtener los nombres de los meses en inglés
    const monthNames = ["January", "February", "March", "April", "May", "June",
        "July", "August", "September", "October", "November", "December"
    ];

    // Dibujar el gráfico
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: labels.map(function(month) {
                // Convertir el mes a nombre en inglés
                let monthNumber = parseInt(month.substring(5)) - 1; // Restar 1 porque los meses en JS son base 0
                return monthNames[monthNumber];
            }),
            datasets: [{
                label: 'Reservations per month',
                data: data,
                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
</script>
<script>
    // Obtener los datos de ganancias por mes desde PHP
    let gananciasPorMes = <?php echo json_encode(Pay::getEarningsPerMonth()); ?>;

    // Procesar los datos para el gráfico circular
    let labelsPie = [];
    let dataPie = [];
    gananciasPorMes.forEach(function(item) {
        labelsPie.push(item.mes);
        dataPie.push(item.total_ganancias);
    });

    // Dibujar el gráfico circular
    var ctxPie = document.getElementById('myPieChart').getContext('2d');
    var myPieChart = new Chart(ctxPie, {
        type: 'pie',
        data: {
            labels: labelsPie.map(function(month) {
                // Convertir el mes a nombre en inglés
                let monthNumber = parseInt(month.substring(5)) - 1; // Restar 1 porque los meses en JS son base 0
                return monthNames[monthNumber];
            }),
            datasets: [{
                label: 'Ganancias por Mes',
                data: dataPie,
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
</script>