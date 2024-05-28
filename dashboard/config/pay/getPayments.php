<?php
include '../conexion.php';
include '../../class/user.php';
include '../../class/booking.php';
include '../../class/pay.php';
include '../../class/folder.php';
include '../../core/Security.php';


session_start();
$id = Security::getUserId();
$userObj = User::getClientId($id);

if (isset($_POST['action']) && $_POST['action'] == 'get_all_payments') {
    $result = Pay::getPayments();
    echo json_encode($result);
}
