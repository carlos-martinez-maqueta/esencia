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

    // EQUIPMENT
    public static function getFolderEquipment()
    {
        global $conn;
        $statement = $conn->prepare("SELECT * FROM tbl_equipment");
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_OBJ);
        return $result;
    }
    public static function addEquiment($name, $charge, $linkedin, $page, $instagram)
    {
        global $conn;
        $sql = "INSERT INTO tbl_equipment (name, charge, linkedin, www, instagram) 
        VALUES (:name, :charge, :linkedin, :page, :instagram)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':charge', $charge);
        $stmt->bindParam(':linkedin', $linkedin);
        $stmt->bindParam(':page', $page);
        $stmt->bindParam(':instagram', $instagram);
        return $stmt;
    }
    public static function editEquipment($id, $name, $charge, $linkedin, $page, $instagram)
    {
        global $conn;
        $sql = "UPDATE tbl_equipment SET name=:name, charge=:charge, linkedin=:linkedin, www=:page, instagram=:instagram WHERE id=:id";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(":id", $id);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':charge', $charge);
        $stmt->bindParam(':linkedin', $linkedin);
        $stmt->bindParam(':page', $page);
        $stmt->bindParam(':instagram', $instagram);
        return $stmt;
    }
    public static function editBannerEquipment($id, $banner)
    {
        global $conn;
        $sql = "UPDATE tbl_equipment SET image=:banner WHERE id=:id";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(":id", $id);
        $stmt->bindParam(':banner', $banner);
        return $stmt;
    }
    public static function getEditEquipmentId($tomelineId)
    {
        global $conn;
        // Consulta para obtener la descripción de la solicitud
        $statement = $conn->prepare("SELECT * FROM tbl_equipment WHERE id= :tomelineId");
        $statement->bindParam(':tomelineId', $tomelineId, PDO::PARAM_INT);
        $statement->execute();
        $result = $statement->fetch(PDO::FETCH_OBJ);
        return $result;
    }
    public static function deleteEquipment($id)
    {
        global $conn;
        $sql = "DELETE FROM tbl_equipment WHERE id = :id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        return $stmt;
    }
    // SPACE

    public static function getFolderSpace()
    {
        global $conn;
        $statement = $conn->prepare("SELECT * FROM tbl_space");
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_OBJ);
        return $result;
    }
    public static function getFolderSpaceId($id)
    {
        global $conn;
        $statement = $conn->prepare("SELECT * FROM tbl_space WHERE id = :id");
        $statement->bindValue(":id", $id);
        $statement->execute();
        $result = $statement->fetch(PDO::FETCH_OBJ);
        return $result;
    }
    public static function addSpace($name, $location, $maximum_people, $price, $coordinates)
    {
        global $conn;
        $sql = "INSERT INTO tbl_space (name, location, maximum_people, price, coordinate, state) 
                VALUES (:name, :location, :maximum_people, :price, :coordinates, :state)";
        $stmt = $conn->prepare($sql);

        $state = 'active';  // Define una variable para el estado

        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':location', $location);
        $stmt->bindParam(':maximum_people', $maximum_people);
        $stmt->bindParam(':price', $price);
        $stmt->bindParam(':coordinates', $coordinates);
        $stmt->bindValue(':state', $state);  // Usa la variable en lugar del valor literal

        return $stmt;
    }
    public static function editBannerSpaceMain($id, $banner)
    {
        global $conn;
        $sql = "UPDATE tbl_space SET main_image=:banner WHERE id=:id";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(":id", $id);
        $stmt->bindParam(':banner', $banner);
        return $stmt;
    }
    public static function editSpaceId($id, $name, $location, $maximum_people, $coordinate, $state, $body, $price)
    {
        global $conn;
        $sql = "UPDATE tbl_space SET name=:name, location=:location, maximum_people=:maximum_people, coordinate=:coordinate, body=:body, state=:state, price=:price WHERE id=:id";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(":id", $id);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':location', $location);
        $stmt->bindParam(':maximum_people', $maximum_people);
        $stmt->bindParam(':coordinate', $coordinate);
        $stmt->bindParam(':state', $state);
        $stmt->bindParam(':body', $body);
        $stmt->bindParam(':price', $price);
        return $stmt;
    }

    // LABELS
    public static function getLabels()
    {
        global $conn;
        $statement = $conn->prepare("SELECT * FROM tbl_labels");
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_OBJ);
        return $result;
    }
    public static function addLabels($name, $icons)
    {
        global $conn;
        $sql = "INSERT INTO tbl_labels (name, icons) 
                VALUES (:name, :icons)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':icons', $icons);
        return $stmt;
    }
    public static function getLabelsSpaceId($id)
    {
        global $conn;
        $statement = $conn->prepare("SELECT * FROM tbl_labels_spaces WHERE space_id = :id");
        $statement->bindValue(":id", $id);
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_OBJ);
        return $result;
    }
    // GALERY SPACE
    public static function addImage($space_id, $image)
    {
        global $conn;
        $sql = "INSERT INTO tbl_banners_space (space_id, imagen) 
                VALUES (:space_id, :imagen)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':space_id', $space_id);
        $stmt->bindParam(':imagen', $image);
        return $stmt;
    }
    public static function getImageSpaceId($id)
    {
        global $conn;
        $statement = $conn->prepare("SELECT * FROM tbl_banners_space WHERE space_id = :id");
        $statement->bindValue(":id", $id);
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_OBJ);
        return $result;
    }
    public static function deleteImage($id) {
        global $conn;
    
        $sql = "DELETE FROM tbl_banners_space WHERE id = :id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        // Ejecutar la consulta preparada y devolver el resultado
        return $stmt->execute();
    }
}
