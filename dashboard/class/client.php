<?php

class Client {
    public static function addClient($name, $lastname, $email, $country, $phone, $password)
    {
        global $conn;
        $sql = "INSERT INTO tbl_client (name, lastname, email, country, phone, password, creation_date) 
        VALUES (:name, :lastname, :email, :country, :phone, :password, NOW())";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(':name', $name);
        $stmt->bindValue(':lastname', $lastname);
        $stmt->bindValue(':email', $email);
        $stmt->bindValue(':country', $country);
        $stmt->bindValue(':phone', $phone);
        $stmt->bindValue(':password', $password);
        return $stmt;
    }
    public static function getClientId($id)
    {
        global $conn;
        $statement = $conn->prepare("SELECT * FROM tbl_client WHERE id = :id");
        $statement->bindValue(":id", $id);
        $statement->execute();
        $result = $statement->fetch(PDO::FETCH_OBJ);
        return $result;
    }
    public static function countClients()
    {
        global $conn;

        // Contar el número de clientes en la tabla tbl_clients
        $statement = $conn->prepare("SELECT COUNT(*) AS total_clients FROM tbl_client");
        $statement->execute();
        $result = $statement->fetch(PDO::FETCH_ASSOC);
        
        return $result['total_clients'];
    }
}