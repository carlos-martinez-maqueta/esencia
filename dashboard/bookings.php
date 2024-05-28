<?php include 'app/components/header.php'; ?>

<?php include 'app/components/sidebar.php'; ?>

<?php include 'app/components/topbar.php'; ?>



<!-- start content -->
<div class="container-fluid px-4">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800 d-flex align-items-center gap-2 font_two"><i class='bx bx-library me-1'></i> Bookings List</h1>
        <div class="d-flex gap-1">
            <!-- <a href="budgets" class="btn btn-dark d-flex align-items-center" target="_blank"><i class='bx bx-library me-1'></i> Ver Cotizaciones</a> -->
        </div>
    </div>
    <div class="row">
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

<!-- end content -->

<?php include 'app/components/footer.php'; ?>
<script src="assets/js/booking/get-bookings.js"></script>