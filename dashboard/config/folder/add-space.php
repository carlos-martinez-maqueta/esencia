<?php
include '../conexion.php';
include '../../class/user.php';
include '../../class/folder.php';
include '../../core/Security.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  
    $name = $_POST["name"];
    $location = $_POST["location"];
    $maximum_people = $_POST["maxium_people"];
    $price = $_POST["price"];
    $coordinates = $_POST["coordinates"];






    // Editar el resto de los campos
    $result = Folder::addSpace($name, $location, $maximum_people, $price, $coordinates);


    if ($result->execute()) {

        $lastInsertedId = $conn->lastInsertId();

        // Verificar si se envió una nueva imagen
        if (isset($_FILES["imagen"]) && $_FILES["imagen"]["error"] === UPLOAD_ERR_OK) {
            // Generar un nombre único para el archivo
            $nombreArchivoUnico = uniqid('image_', true) . '.' . pathinfo($_FILES["imagen"]["name"], PATHINFO_EXTENSION);
            $rutaDestino = "../../files/space/" . $nombreArchivoUnico;

            // Guardar la imagen en la ruta especificada
            if (move_uploaded_file($_FILES["imagen"]["tmp_name"], $rutaDestino)) {
                // Editar la imagen solo si se guardó correctamente
                $imagen = $nombreArchivoUnico;
                $result2 = Folder::editBannerSpaceMain($lastInsertedId, $imagen);
                $result2->execute();
            }
        }

        // Items registrado correctamente
        $response = array(
            'status' => 'success',
            'message' => 'Space successfully added.'
        );
    } else {
        // Error al registrar Items
        $response = array(
            'status' => 'error',
            'message' => 'Error when Space added.'
        );
    }
    // Devolver la respuesta como JSON
    echo json_encode($response);
}
