<?php
include '../conexion.php';
include '../../class/user.php';
include '../../class/booking.php';
include '../../class/folder.php';
include '../../core/Security.php';


session_start();
$id = Security::getUserId();
$userObj = User::getClientId($id);

if (isset($_POST['action']) && $_POST['action'] == 'get_all_booking') {
    $result = Booking::getBooking();
    echo json_encode($result);
}
