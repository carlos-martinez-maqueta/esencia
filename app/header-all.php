  <header class="header_dos mt-5">
    <div class="container">
      <div class="row row_dos">
        <div class="col-lg-4"></div>
        <div class="col-lg-8 col_lista_header">
          <ul>
            <li><a href="index">HOME</a></li>
            <li><a href="events">SERVICES</a></li>
            <li><a href="about">ABOUT US</a></li>
            <?php
            // Verificar si $_SESSION['user'] está definida antes de intentar acceder a ella
            if (isset($_SESSION['user'])) {
              $client_id = $_SESSION['user_id'];
              $clientObj = User::getClientId($client_id);
              // Si hay una sesión activa, mostrar el nombre del usuario y el enlace para cerrar sesión
              echo '<li class="text-dark d-flex align-items-center"><i class="bx bxs-user me-1"></i>' . $clientObj->name . ' ' . $clientObj->lastname . '</li>';
              echo '<li class="text-danger d-flex align-items-center"><a href="logout" class="d-flex text-danger align-items-center"><i class="bx bx-log-in me-1"></i> Logout</a></li>'; // Enlace para cerrar sesión
            } else {
              // Si no hay sesión activa, mostrar los botones de inicio de sesión y registro
              echo '<li class="login_li"><a href="sign-in">SIGN IN</a></li>';
              echo '<li class="register_li"><a href="sign-up">SIGN UP</a></li>';
            }
            ?>
          </ul>
        </div>
      </div>
    </div>
  </header>