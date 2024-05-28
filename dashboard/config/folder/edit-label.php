<?php
include '../conexion.php';
include '../../class/user.php';
include '../../class/folder.php';
include '../../core/Security.php';

// Verificar si se ha enviado el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Verificar la existencia del ID del espacio
    if (!isset($_POST['space_id'])) {
        $response = array(
            'status' => 'error',
            'message' => 'Falta el ID del espacio.'
        );
        echo json_encode($response);
        exit();
    }

    // Obtener el ID del espacio
    $space_id = $_POST['space_id'];

    // Verificar si se enviaron etiquetas
    if (isset($_POST['labels'])) {
        $labels = $_POST['labels'];
    } else {
        // Si no se enviaron etiquetas, establecer un arreglo vacío
        $labels = [];
    }

    // Obtener las etiquetas actuales del espacio
    $stmtPermisosActuales = $conn->prepare("SELECT labels_id FROM tbl_labels_spaces WHERE space_id = :space_id");
    $stmtPermisosActuales->bindParam(':space_id', $space_id);
    $stmtPermisosActuales->execute();
    $permisosActuales = $stmtPermisosActuales->fetchAll(PDO::FETCH_COLUMN);

    // Insertar nuevas etiquetas
    $permisosInsertar = array_diff($labels, $permisosActuales);
    foreach ($permisosInsertar as $permisoInsertar) {
        $stmtInsertarPermiso = $conn->prepare("INSERT INTO tbl_labels_spaces (space_id, labels_id) VALUES (:space_id, :labels_id)");
        $stmtInsertarPermiso->bindParam(':space_id', $space_id);
        $stmtInsertarPermiso->bindParam(':labels_id', $permisoInsertar);
        $stmtInsertarPermiso->execute();
    }

    // Eliminar etiquetas no seleccionadas
    $permisosEliminar = array_diff($permisosActuales, $labels);
    foreach ($permisosEliminar as $permisoEliminar) {
        $stmtEliminarPermiso = $conn->prepare("DELETE FROM tbl_labels_spaces WHERE space_id = :space_id AND labels_id = :labels_id");
        $stmtEliminarPermiso->bindParam(':space_id', $space_id);
        $stmtEliminarPermiso->bindParam(':labels_id', $permisoEliminar);
        $stmtEliminarPermiso->execute();
    }

    // Verificar si se realizaron correctamente las operaciones
    $success = true;
    if (isset($stmtEliminarPermiso) && !$stmtEliminarPermiso->rowCount()) {
        $success = false;
    }
    if (isset($stmtInsertarPermiso) && !$stmtInsertarPermiso->rowCount()) {
        $success = false;
    }

    if ($success) {
        // Operaciones realizadas correctamente
        $response = array(
            'status' => 'success',
            'message' => 'Labels edited correctly.'
        );
    } else {
        // Error al realizar las operaciones
        $response = array(
            'status' => 'error',
            'message' => 'Error when editing Labels.'
        );
    }
    // Devolver la respuesta como JSON
    echo json_encode($response);
}
?>
