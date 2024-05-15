<?php
include '../conexion.php';
include '../../class/user.php';
include '../../class/folder.php';
include '../../core/Security.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $porcenshort_text_abouttaje = $_POST["short_text_about"];
    $location = $_POST["location"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];

    // Verificar si se envió una nueva imagen
    if (isset($_FILES["imagen"]) && $_FILES["imagen"]["error"] === UPLOAD_ERR_OK) {
        // Generar un nombre único para el archivo
        $nombreArchivoUnico = uniqid('image_', true) . '.' . pathinfo($_FILES["imagen"]["name"], PATHINFO_EXTENSION);
        $rutaDestino = "../../files/home/" . $nombreArchivoUnico;

        // Guardar la imagen en la ruta especificada
        if (move_uploaded_file($_FILES["imagen"]["tmp_name"], $rutaDestino)) {
            // Editar la imagen solo si se guardó correctamente
            $imagen = $nombreArchivoUnico;
            $result1 = Folder::editBannerHome($imagen);
            $result1->execute();
        }
    }

    // Editar el resto de los campos
    $result2 = Folder::editFolderHome($porcenshort_text_abouttaje, $location, $phone, $email);
    if ($result2->execute()) {
        // Items registrado correctamente
        $response = array(
            'status' => 'success',
            'message' => 'Home content edited correctly.'
        );
    } else {
        // Error al registrar Items
        $response = array(
            'status' => 'error',
            'message' => 'Error when editing home content.'
        );
    }
    // Devolver la respuesta como JSON
    echo json_encode($response);
}
