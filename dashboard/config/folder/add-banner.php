<?php
include '../conexion.php';
include '../../class/user.php';
include '../../class/folder.php';
include '../../core/Security.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Verificar si se proporcionó el space_id
    if (!isset($_POST["space_id"])) {
        $response = array(
            'status' => 'error',
            'message' => 'Space ID not provided.'
        );
        echo json_encode($response);
        exit; // Detener la ejecución del script
    }

    $space_id = $_POST["space_id"];

    // Verificar si se envió una nueva imagen
    if (isset($_FILES["imagen"]) && $_FILES["imagen"]["error"] === UPLOAD_ERR_OK) {
        // Generar un nombre único para el archivo
        $nombreArchivoUnico = uniqid('image_', true) . '.' . pathinfo($_FILES["imagen"]["name"], PATHINFO_EXTENSION);
        $rutaDestino = "../../files/space/" . $nombreArchivoUnico;

        // Guardar la imagen en la ruta especificada
        if (move_uploaded_file($_FILES["imagen"]["tmp_name"], $rutaDestino)) {
            // Editar la imagen solo si se guardó correctamente
            $imagen = $nombreArchivoUnico;
            // Editar el resto de los campos
            $result = Folder::addImage($space_id, $imagen);
            if ($result->execute()) {
                // Items registrado correctamente
                $response = array(
                    'status' => 'success',
                    'message' => 'Image added successfully.'
                );
            } else {
                // Error al registrar Items
                $response = array(
                    'status' => 'error',
                    'message' => 'Error adding image.'
                );
            }
        }
    } else {
        // Si no se envió una imagen
        $response = array(
            'status' => 'error',
            'message' => 'No image uploaded.'
        );
    }

    // Devolver la respuesta como JSON
    echo json_encode($response);
}
?>
