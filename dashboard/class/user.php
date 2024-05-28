<?php

class User {
    public static function consultSecurytyUser($username, $password){
        global $conn;
        $statement = $conn->prepare("SELECT * FROM tbl_admin WHERE username = :username AND password = :password");
        $statement->bindParam(":username", $username);
        $statement->bindParam(":password", $password);
        $statement->execute();
        $result = $statement->fetch(PDO::FETCH_OBJ);
        return $result;
    }
    public static function consultSecurytyClient($username, $password){
        global $conn;
        $statement = $conn->prepare("SELECT * FROM tbl_client WHERE email = :username AND password = :password");
        $statement->bindParam(":username", $username);
        $statement->bindParam(":password", $password);
        $statement->execute();
        $result = $statement->fetch(PDO::FETCH_OBJ);
        return $result;
    }
    public static function getClientId($id)
    {
        global $conn;
        $statement = $conn->prepare("SELECT * FROM tbl_client WHERE id=:id");
        $statement->bindValue(":id", $id);
        $statement->execute();
        $result = $statement->fetch(PDO::FETCH_OBJ);
        return $result;
    }
    public static function getClientAll()
    {
        // Es una variable que esta en otro archivos
        global $conn;
        $statement = $conn->prepare("
        SELECT 
            *
        FROM 
        tbl_client
        
            ");
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_OBJ);
        return $result;
    }
    public static function getAdminId($id)
    {
        global $conn;
        $statement = $conn->prepare("SELECT * FROM tbl_admin WHERE id=:id");
        $statement->bindValue(":id", $id);
        $statement->execute();
        $result = $statement->fetch(PDO::FETCH_OBJ);
        return $result;
    }
    

}