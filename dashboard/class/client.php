<?php

class Client {
    public static function addClient($name, $lastname, $email, $country, $phone, $password)
    {
        global $conn;
        $sql = "INSERT INTO tbl_client (name, lastname, email, country, phone, password) 
        VALUES (:name, :lastname, :email, :country, :phone, :password)";
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
}