<?php

include '../conexion.php';
include '../../class/folder.php';

if (isset($_POST['action']) && $_POST['action'] == 'get_all_timeline_id') {
    $tomelineId = $_POST['tomelineId'];
    $result = Folder::getEditTimelineId($tomelineId);
    echo json_encode($result);
}
if (isset($_POST['action']) && $_POST['action'] == 'delete_timeline_id') {
    $resultId = $_POST['resultId'];
    $result = Folder::deleteTimeline($resultId);
    
    if ($result->execute()) {
        // Usuario registrado correctamente
        $response = array(
            'status' => 'success',
            'message' => 'Timeline successfully deleted.'
        );
    } else {
        // Error al registrar usuario
        $response = array(
            'status' => 'error',
            'message' => 'Error when deleting timeline.'
        );
    }
    // Devolver la respuesta como JSON
    echo json_encode($response);
}

if (isset($_POST['action']) && $_POST['action'] == 'get_all_equiptment_id') {
    $tomelineId = $_POST['tomelineId'];
    $result = Folder::getEditEquipmentId($tomelineId);
    echo json_encode($result);
}

if (isset($_POST['action']) && $_POST['action'] == 'delete_equipment_id') {
    $resultId = $_POST['resultId'];
    $result = Folder::deleteEquipment($resultId);
    
    if ($result->execute()) {
        // Usuario registrado correctamente
        $response = array(
            'status' => 'success',
            'message' => 'Equipment successfully deleted.'
        );
    } else {
        // Error al registrar usuario
        $response = array(
            'status' => 'error',
            'message' => 'Error when deleting Equipment.'
        );
    }
    // Devolver la respuesta como JSON
    echo json_encode($response);
}
// Verificar si se recibió una solicitud de eliminación de imagen
if (isset($_POST['action']) && $_POST['action'] == 'delete_image') {
    // Obtener el ID de la imagen a eliminar
    $imageId = $_POST['imageId'];

    // Realizar la eliminación de la imagen
    $result = Folder::deleteImage($imageId); // Llamar a la función para eliminar la imagen

    // Verificar si la eliminación fue exitosa
    if ($result) {
        // Si la eliminación fue exitosa, enviar una respuesta JSON con estado 'success'
        $response = array(
            'status' => 'success',
            'message' => 'Image removed successfully.'
        );
    } else {
        // Si hubo un error al eliminar la imagen, enviar una respuesta JSON con estado 'error'
        $response = array(
            'status' => 'error',
            'message' => 'Error deleting image.'
        );
    }

    // Devolver la respuesta como JSON
    echo json_encode($response);
}