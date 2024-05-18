<?php
include '../conexion.php';
include '../../class/user.php';
include '../../class/folder.php';
include '../../core/Security.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  
    $name = $_POST["name"];
    $charge = $_POST["charge"];
    $linkedin = $_POST["linkedin"];
    $page = $_POST["page"];
    $instagram = $_POST["instagram"];



    // Editar el resto de los campos
    $result = Folder::addEquiment($name, $charge, $linkedin, $page, $instagram);
    if ($result->execute()) {

        $lastInsertedId = $conn->lastInsertId();

        // Verificar si se envió una nueva imagen
        if (isset($_FILES["imagen"]) && $_FILES["imagen"]["error"] === UPLOAD_ERR_OK) {
            // Generar un nombre único para el archivo
            $nombreArchivoUnico = uniqid('image_', true) . '.' . pathinfo($_FILES["imagen"]["name"], PATHINFO_EXTENSION);
            $rutaDestino = "../../files/equipment/" . $nombreArchivoUnico;

            // Guardar la imagen en la ruta especificada
            if (move_uploaded_file($_FILES["imagen"]["tmp_name"], $rutaDestino)) {
                // Editar la imagen solo si se guardó correctamente
                $imagen = $nombreArchivoUnico;
                $result2 = Folder::editBannerEquipment($lastInsertedId, $imagen);
                $result2->execute();
            }
        }

        // Items registrado correctamente
        $response = array(
            'status' => 'success',
            'message' => 'Equipment successfully added.'
        );
    } else {
        // Error al registrar Items
        $response = array(
            'status' => 'error',
            'message' => 'Error when Equipment added.'
        );
    }
    // Devolver la respuesta como JSON
    echo json_encode($response);
}
