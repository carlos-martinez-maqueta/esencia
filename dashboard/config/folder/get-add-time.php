<?php
include '../conexion.php';
include '../../class/user.php';
include '../../class/folder.php';
include '../../core/Security.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    
    $year = $_POST["year"];
    $description = $_POST["description"];


    // Editar el resto de los campos
    $result = Folder::addTimeline($year, $description);

    if ($result->execute()) {
        // Items registrado correctamente
        $response = array(
            'status' => 'success',
            'message' => 'Timeline added successfully.'
        );
    } else {
        // Error al registrar Items
        $response = array(
            'status' => 'error',
            'message' => 'Error when adding timeline.'
        );
    }
    // Devolver la respuesta como JSON
    echo json_encode($response);
}
