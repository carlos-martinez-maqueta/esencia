<?php

class Folder
{
    // HOME
    public static function getFolderHome()
    {
        global $conn;
        $statement = $conn->prepare("SELECT * FROM tbl_home WHERE id= 1");
        $statement->execute();
        $result = $statement->fetch(PDO::FETCH_OBJ);
        return $result;
    }
    public static function editBannerHome($banner)
    {
        global $conn;
        $sql = "UPDATE tbl_home SET banner=:banner WHERE id=1";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':banner', $banner);
        return $stmt;
    }
    public static function editFolderHome($porcenshort_text_abouttaje, $location, $phone, $email)
    {
        global $conn;
        $sql = "UPDATE tbl_home SET short_text_about=:porcenshort_text_abouttaje, location=:location, phone=:phone, email=:email WHERE id=1";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':porcenshort_text_abouttaje', $porcenshort_text_abouttaje);
        $stmt->bindParam(':location', $location);
        $stmt->bindParam(':phone', $phone);
        $stmt->bindParam(':email', $email);
        return $stmt;
    }
    // SOCIAL NETWORKS
    public static function getSocialNetworks()
    {
        global $conn;
        $statement = $conn->prepare("SELECT * FROM tbl_social_networks WHERE id= 1");
        $statement->execute();
        $result = $statement->fetch(PDO::FETCH_OBJ);
        return $result;
    }
    public static function editSocialNetworks($facebook, $instagram, $whatsapp, $spotify, $linkedin, $tiktok)
    {
        global $conn;
        $sql = "UPDATE tbl_social_networks SET facebook=:facebook, instagram=:instagram, whatsapp=:whatsapp, spotify=:spotify, linkedin=:linkedin, tiktok=:tiktok WHERE id=1";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':facebook', $facebook);
        $stmt->bindParam(':instagram', $instagram);
        $stmt->bindParam(':whatsapp', $whatsapp);
        $stmt->bindParam(':spotify', $spotify);
        $stmt->bindParam(':linkedin', $linkedin);
        $stmt->bindParam(':tiktok', $tiktok);
        return $stmt;
    }
    // ACCOUNT
    public static function getUser()
    {
        global $conn;
        $statement = $conn->prepare("SELECT * FROM tbl_admin WHERE id= 1");
        $statement->execute();
        $result = $statement->fetch(PDO::FETCH_OBJ);
        return $result;
    }
    public static function editUsername($username, $email)
    {
        global $conn;
        $sql = "UPDATE tbl_admin SET username=:username, email=:email, updated_at=NOW() WHERE id=1";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':email', $email);
        return $stmt;
    }

    public static function editUserPassword($password)
    {
        global $conn;
        $sql = "UPDATE tbl_admin SET password=:password, updated_at=NOW() WHERE id=1";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':password', $password);
        return $stmt;
    }
    // SERVICE
    public static function getFolderService()
    {
        global $conn;
        $statement = $conn->prepare("SELECT * FROM tbl_service WHERE id= 1");
        $statement->execute();
        $result = $statement->fetch(PDO::FETCH_OBJ);
        return $result;
    }
    public static function editBannerService($banner)
    {
        global $conn;
        $sql = "UPDATE tbl_service SET banner=:banner WHERE id=1";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':banner', $banner);
        return $stmt;
    }
    public static function editFolderService($title, $description)
    {
        global $conn;
        $sql = "UPDATE tbl_service SET title=:title, description=:description WHERE id=1";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':description', $description);
        return $stmt;
    }
    // ABOUT 
    public static function getFolderAbout()
    {
        global $conn;
        $statement = $conn->prepare("SELECT * FROM tbl_about WHERE id= 1");
        $statement->execute();
        $result = $statement->fetch(PDO::FETCH_OBJ);
        return $result;
    }
    public static function editBannerAbout($banner)
    {
        global $conn;
        $sql = "UPDATE tbl_about SET banner=:banner WHERE id=1";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':banner', $banner);
        return $stmt;
    }
    public static function editFolderAbout($title, $description)
    {
        global $conn;
        $sql = "UPDATE tbl_about SET title=:title, description=:description WHERE id=1";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':description', $description);
        return $stmt;
    }
    // TIMELINE
    public static function getFolderTimeline()
    {
        global $conn;
        $statement = $conn->prepare("SELECT * FROM tbl_timeline");
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_OBJ);
        return $result;
    }
    public static function addTimeline($year, $description)
    {
        global $conn;
        $sql = "INSERT INTO tbl_timeline (year, description) 
        VALUES (:year, :description)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':year', $year);
        $stmt->bindParam(':description', $description);
        return $stmt;
    }
    public static function editFolderTimeLineId($title, $description)
    {
        global $conn;
        $sql = "UPDATE tbl_timeline SET year=:year, description=:description WHERE id=1";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':description', $description);
        return $stmt;
    }
    public static function editItemsId($id, $year, $description)
    {
        global $conn;
        $sql = "UPDATE tbl_timeline SET year=:year, description=:description WHERE id=:id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':year', $year);
        $stmt->bindParam(':description', $description);
        $stmt->execute();
        return $stmt;
    }
    
    public static function getEditTimelineId($tomelineId)
    {
        global $conn;
        // Consulta para obtener la descripción de la solicitud
        $statement = $conn->prepare("SELECT * FROM tbl_timeline WHERE id= :tomelineId");
        $statement->bindParam(':tomelineId', $tomelineId, PDO::PARAM_INT);
        $statement->execute();
        $result = $statement->fetch(PDO::FETCH_OBJ);
        return $result;
    }
    public static function deleteTimeline($id)
    {
        global $conn;
        $sql = "DELETE FROM tbl_timeline WHERE id = :id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        return $stmt;
    }
}
