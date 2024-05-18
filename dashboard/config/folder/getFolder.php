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