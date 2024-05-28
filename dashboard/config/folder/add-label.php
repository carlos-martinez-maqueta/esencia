<?php
include '../conexion.php';
include '../../class/user.php';
include '../../class/folder.php';
include '../../core/Security.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  
    $name = $_POST["name"];
    $font_code = $_POST["font_code"];
   





    // Editar el resto de los campos
    $result = Folder::addLabels($name, $font_code);


    if ($result->execute()) {

        // Items registrado correctamente
        $response = array(
            'status' => 'success',
            'message' => 'Label successfully added.'
        );
    } else {
        // Error al registrar Items
        $response = array(
            'status' => 'error',
            'message' => 'Error when Label added.'
        );
    }
    // Devolver la respuesta como JSON
    echo json_encode($response);
}
