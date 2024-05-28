<?php

class Pay {
   
    public static function getPayments()
    {
        // Es una variable que esta en otro archivos
        global $conn;
        $statement = $conn->prepare("
        SELECT 
            *
        FROM 
            tbl_pays
            ");
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_OBJ);
        return $result;
    }
    public static function getEarningsPerMonth()
{
    global $conn;
    $statement = $conn->prepare("
    SELECT DATE_FORMAT(creation_date, '%Y-%m') AS mes, SUM(total) AS total_ganancias
    FROM tbl_pays
    GROUP BY DATE_FORMAT(creation_date, '%Y-%m');
    ");
    $statement->execute();
    $result = $statement->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
}