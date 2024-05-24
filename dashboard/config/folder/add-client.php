<?php
include '../conexion.php';
include '../../class/user.php';
include '../../class/folder.php';
include '../../class/client.php';
include '../../core/Security.php';
include '../../core/Utility.php';

require_once '../../mail/lib/PHPMailer/Exception.php';
require_once '../../mail/lib/PHPMailer/PHPMailer.php';
require_once '../../mail/lib/PHPMailer/SMTP.php';
require_once '../../mail/vendor/autoload.php';



use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $name = $_POST["name"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $country = $_POST["country"];
    $phone = $_POST["phone"];
    $termsAccepted = isset($_POST["termsCheck"]) ? $_POST["termsCheck"] : null;

    if (!$name || !$lastname || !$email || !$country || !$phone) {
        $response = array(
            'status' => 'error',
            'message' => 'All fields are required.'
        );
        echo json_encode($response);
        exit;
    }

    if ($termsAccepted == null) {
        $response = array(
            'status' => 'error',
            'message' => 'You must accept the terms and conditions to register.'
        );
        echo json_encode($response);
        exit;
    }

    // Inicio de Verificacion, si algunos datos ya existe en la base de datos
    $query = "SELECT * FROM tbl_client WHERE email = :email OR phone = :phone";
    $stmtExiste = $conn->prepare($query);
    $stmtExiste->bindParam(':email', $email);
    $stmtExiste->bindParam(':phone', $phone);
    $stmtExiste->execute();
    $userList = $stmtExiste->fetchAll(PDO::FETCH_OBJ);
    if ($stmtExiste->rowCount() > 0) {
        $mensaje = [];
        foreach ($userList as $user) {
            if ($user->email == $email) {
                $mensaje[] = "The mail {$email} ";
            }
            if ($user->phone == $phone) {
                $mensaje[] = "The phone {$phone} ";
            }
        }

        // Algunos datos ya existen, envía un mensaje de error
        $response = array(
            'status' => 'error',
            'message' => implode(', ', $mensaje) . ' is already registered.'
        );

        // Aplicar utf8_encode a cada valor del array
        $data = array_map('utf8_encode', $response);

        // Codificar el array a formato JSON
        echo json_encode($data);

        exit;
    }
    // Fin verificacion



    // Generar una contraseña segura
    function generateRandomPassword($length = 12)
    {
        $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890!@#$%^&*()_+{}|:<>?-=[];./';
        $password = '';
        $alphabetLength = strlen($alphabet);
        for ($i = 0; $i < $length && $i < 20; $i++) { // Limitar la longitud máxima a 20 caracteres
            $index = random_int(0, $alphabetLength - 1);
            $password .= $alphabet[$index];
        }
        return $password;
    }


    $password = generateRandomPassword(); // Genera una contraseña aleatoria de 12 caracteres




    // Editar el resto de los campos
    $result = Client::addClient($name, $lastname, $email, $country, $phone, $password);

    if ($result->execute()) {


        // Id de Usuario Agregado
        $usuario_id = $conn->lastInsertId();

        $userObj = Client::getClientId($usuario_id);

      
     

        // INICIO DE CORREO
        // --------------------------------------

        $emailPrincipal = "velasquezparedesjavier@gmail.com";  // soporte@conexacoworking.com
        $emailUsuario = $email;
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->Host = 'mail.conexacoworking.com'; // Cambia esto al servidor SMTP de tu proveedor de correo
        $mail->SMTPAuth = true;
        $mail->Username = 'conexaoficial@conexacoworking.com'; // Tu dirección de correo
        $mail->Password = 'iLyMQmswFH9B'; // Tu contraseña
        $mail->SMTPSecure = 'ssl'; // Puedes usar 'ssl' en lugar de 'tls' si es necesario
        $mail->Port = 465; // El puerto SMTP de tu proveedor de correo

        $mail->setFrom('conexaoficial@conexacoworking.com', 'NEW REGISTRATION NOTIFICATION');
        // Agregar el destinatario principal
        $mail->addAddress($emailPrincipal);
        // Agregar el destinatario del usuario
        $mail->addAddress($emailUsuario);
        $mail->Subject = 'New user registration ' . $name . '. ';
        $mail->CharSet = 'UTF-8';
        $mail->isHTML(true);

        // Primero, decidimos cuál plantilla cargar basándonos en el tipo de usuario
        $templatePath = "../../tplviews/register-client.tpl"; // Ruta por defecto

        // Cargamos la plantilla seleccionada
        $messages = Utility::readTemplateFile($templatePath);

        $messages = str_replace("#name#", $name, $messages);
        $messages = str_replace("#lastname#", $lastname, $messages);
        $messages = str_replace("#email#", $email, $messages);
        $messages = str_replace("#country#", $country, $messages);
        $messages = str_replace("#phone#", $phone, $messages);
        $messages = str_replace("#password#", $password, $messages);




        $mail->Body = $messages;

        // Enviar el correo de confirmación
        if ($mail->send()) {
            $response = array(
                'status' => 'success',
                'message' => 'User created successfully. An email has been sent with the data and credentials entered during registration.'
            );
          
        } else {
            $response = array(
                'status' => 'error',
                'message' => 'An error occurred while sending the email: ' . $mail->ErrorInfo
            );
    
        }

        // FIN DE CORREO
    } else {
        // Error al registrar Items
        $response = array(
            'status' => 'error',
            'message' => 'There was an error registering your account. Please try again.'
        );
    }

    // Devolver la respuesta como JSON
    echo json_encode($response);
}
