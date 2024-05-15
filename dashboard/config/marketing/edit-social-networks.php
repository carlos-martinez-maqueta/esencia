<?php
include '../conexion.php';
include '../../class/user.php';
include '../../class/folder.php';
include '../../core/Security.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $facebook = $_POST["facebook"];
    $instagram = $_POST["instagram"];
    $whatsapp = $_POST["whatsapp"];
    $spotify = $_POST["spotify"];
    $linkedin = $_POST["linkedin"];
    $tiktok = $_POST["tiktok"];


    // Editar el resto de los campos
    $result = Folder::editSocialNetworks($facebook, $instagram, $whatsapp, $spotify, $linkedin, $tiktok);

    if ($result->execute()) {
        // Items registrado correctamente
        $response = array(
            'status' => 'success',
            'message' => 'Social Networks edited correctly.'
        );
    } else {
        // Error al registrar Items
        $response = array(
            'status' => 'error',
            'message' => 'Error when editing Social Networks.'
        );
    }
    // Devolver la respuesta como JSON
    echo json_encode($response);
}
