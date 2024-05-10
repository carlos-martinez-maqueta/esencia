<?php
include '../conexion.php';
include '../../class/user.php';



session_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $username =  !empty($_POST['username']) ? $_POST['username'] : null;
    $password = !empty($_POST['password']) ? md5($_POST['password']) : null;

    $userObj = User::consultSecurytyUser($username, $password);

    if ($userObj) {
        // Usuario encontrado, iniciar sesión
        $_SESSION['user']  = $userObj; 
        $_SESSION['user_id'] = $userObj->id; 

        $response = array(
            'status' => 'success',
            'message' => 'Usuario autenticado correctamente.'
        );
    } else {
        // Usuario no encontrado o contraseña incorrecta
        $response = array(
            'status' => 'error',
            'message' => 'Usuario o contraseña incorrectos.'
        );
    }

    // Devolver la respuesta como JSON
    echo json_encode($response);
}
