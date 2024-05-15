<?php
include '../conexion.php';
include '../../class/user.php';
include '../../class/folder.php';
include '../../core/Security.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $nuevaContraseña = $_POST['password'];
    if ($nuevaContraseña) {
        $hashedPassword = md5($nuevaContraseña);
        $result = Folder::editUserPassword($hashedPassword);
        $result->execute();
    }

    // Editar el resto de los campos
    $result2 = Folder::editUsername($username, $email);

    if ($result2->execute()) {
        // Items registrado correctamente
        $response = array(
            'status' => 'success',
            'message' => 'Account edited correctly.'
        );
    } else {
        // Error al registrar Items
        $response = array(
            'status' => 'error',
            'message' => 'Error when editing Account.'
        );
    }
    // Devolver la respuesta como JSON
    echo json_encode($response);
}
