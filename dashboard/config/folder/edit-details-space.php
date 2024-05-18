<?php
include '../conexion.php';
include '../../class/user.php';
include '../../class/folder.php';
include '../../core/Security.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $id = $_POST["id"];
    $name = $_POST["name"];
    $location = $_POST["location"];
    $maximum_people = $_POST["maximum_people"];
    $coordinate = $_POST["coordinate"];
    $state = $_POST["state"];
    $price = $_POST["price"];
    $body = $_POST["body"];


    // Verificar si se envió una nueva imagen
    if (isset($_FILES["imagen"]) && $_FILES["imagen"]["error"] === UPLOAD_ERR_OK) {
        // Generar un nombre único para el archivo
        $nombreArchivoUnico = uniqid('image_', true) . '.' . pathinfo($_FILES["imagen"]["name"], PATHINFO_EXTENSION);
        $rutaDestino = "../../files/space/" . $nombreArchivoUnico;

        // Guardar la imagen en la ruta especificada
        if (move_uploaded_file($_FILES["imagen"]["tmp_name"], $rutaDestino)) {
            // Editar la imagen solo si se guardó correctamente
            $imagen = $nombreArchivoUnico;
            $result2 = Folder::editBannerSpaceMain($id, $imagen);
            $result2->execute();
        }
    }

    // Editar el resto de los campos
    $result = Folder::editSpaceId($id, $name, $location, $maximum_people, $coordinate, $state, $body, $price);


    if ($result->execute()) {

        // Items registrado correctamente
        $response = array(
            'status' => 'success',
            'message' => 'Space successfully edited.'
        );
    } else {
        // Error al registrar Items
        $response = array(
            'status' => 'error',
            'message' => 'Error editing space.'
        );
    }
    // Devolver la respuesta como JSON
    echo json_encode($response);
}
