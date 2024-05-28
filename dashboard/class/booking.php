<?php

class Booking
{

    public static function getBooking()
    {
        // Es una variable que esta en otro archivos
        global $conn;
        $statement = $conn->prepare("
        SELECT 
            *
        FROM 
            tbl_booking
        ORDER BY 
            creation_date DESC
            ");
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_OBJ);
        return $result;
    }
    public static function getBookingCountPerMonth()
    {
        global $conn;

        // Obtener el primer y último día del mes actual
        $firstDayOfMonth = date('Y-m-01');
        $lastDayOfMonth = date('Y-m-t');

        // Consulta para obtener el número de reservas en el mes actual
        $sql = "SELECT COUNT(*) AS booking_count 
                FROM tbl_booking 
                WHERE date_start BETWEEN :firstDayOfMonth AND :lastDayOfMonth";

        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':firstDayOfMonth', $firstDayOfMonth, PDO::PARAM_STR);
        $stmt->bindParam(':lastDayOfMonth', $lastDayOfMonth, PDO::PARAM_STR);
        $stmt->execute();

        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result['booking_count'];
    }
    public static function getTotalDurationPerMonth()
    {
        global $conn;

        // Obtener el número total de días de duración de todas las reservas para el mes actual
        $statement = $conn->prepare("
            SELECT SUM(CAST(duration_days AS UNSIGNED)) AS total_duration
            FROM tbl_booking
            WHERE MONTH(date_start) = MONTH(CURRENT_DATE()) AND YEAR(date_start) = YEAR(CURRENT_DATE())
        ");
        $statement->execute();
        $result = $statement->fetch(PDO::FETCH_ASSOC);

        return $result['total_duration'];
    }
    public static function getReservationsPerMonth()
    {
        global $conn;
        $statement = $conn->prepare("
        SELECT DATE_FORMAT(date_start, '%Y-%m') AS mes, COUNT(*) AS total_reservas
        FROM tbl_booking
        GROUP BY DATE_FORMAT(date_start, '%Y-%m');
        ");
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
}
