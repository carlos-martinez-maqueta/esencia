<?php
include '../conexion.php';
include '../../class/user.php';
include '../../class/folder.php';
include '../../core/Security.php';

header('Content-Type: application/json'); // Asegura que la respuesta sea de tipo JSON

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fecha1 = $_POST["fecha1"];

    // Convertir la fecha de entrada al formato adecuado para MySQL
    $fecha1 = date('Y-m-d', strtotime($fecha1));

    // Sumar un día a la fecha de entrada para obtener la fecha de salida
    $fecha2 = date('Y-m-d', strtotime($fecha1 . ' +1 day'));

    try {
        // Consulta para verificar la disponibilidad
        $sql = "SELECT * FROM tbl_booking WHERE 
                (date_start <= :fecha1 AND date_end >= :fecha1) OR 
                (date_start <= :fecha2 AND date_end >= :fecha2) OR
                (date_start >= :fecha1 AND date_end <= :fecha2)";

        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':fecha1', $fecha1);
        $stmt->bindParam(':fecha2', $fecha2);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            // Hay una reserva existente en el rango de fechas seleccionado
            $response = array(
                'status' => 'error',
                'message' => 'The selected dates are not available.'
            );
        } else {
            // No hay reserva en el rango de fechas seleccionado
            $response = array(
                'status' => 'success',
                'message' => 'The selected dates are available.'
            );
        }
    } catch (PDOException $e) {
        // Error en la consulta
        $response = array(
            'status' => 'error',
            'message' => 'Database error: ' . $e->getMessage()
        );
    }

    // Devolver la respuesta como JSON
    echo json_encode($response);
}
?>
