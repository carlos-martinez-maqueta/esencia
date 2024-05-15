<?php
include '../conexion.php';
include '../../class/user.php';
include '../../class/folder.php';
include '../../core/Security.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $title = $_POST["title"];
    $description = $_POST["description"];


    // Verificar si se envió una nueva imagen
    if (isset($_FILES["imagen"]) && $_FILES["imagen"]["error"] === UPLOAD_ERR_OK) {
        // Generar un nombre único para el archivo
        $nombreArchivoUnico = uniqid('image_', true) . '.' . pathinfo($_FILES["imagen"]["name"], PATHINFO_EXTENSION);
        $rutaDestino = "../../files/service/" . $nombreArchivoUnico;

        // Guardar la imagen en la ruta especificada
        if (move_uploaded_file($_FILES["imagen"]["tmp_name"], $rutaDestino)) {
            // Editar la imagen solo si se guardó correctamente
            $imagen = $nombreArchivoUnico;
            $result1 = Folder::editBannerService($imagen);
            $result1->execute();
        }
    }

    // Editar el resto de los campos
    $result2 = Folder::editFolderService($title, $description);
    if ($result2->execute()) {
        // Items registrado correctamente
        $response = array(
            'status' => 'success',
            'message' => 'Service content edited correctly.'
        );
    } else {
        // Error al registrar Items
        $response = array(
            'status' => 'error',
            'message' => 'Error when editing service content.'
        );
    }
    // Devolver la respuesta como JSON
    echo json_encode($response);
}
